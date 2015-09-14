<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Awesome extends CI_Controller {

	public function index()
	{

		$this->load->library('facebook');

		$user = $this->facebook->getUser();

		if($user) {

			try {
				$data['user_profile'] = $this->facebook->api('/me');
			} catch(FacebookApiException $e) {
				$user = null;
			}

			// Insert into db
			$this->mfb->fb_register($data);

			// Start processing
			$demo_access_token = 'CAACEdEose0cBAMOXKaS3VcR5cxKoWL4MNvMqPG3g38UPRL5QXoShS4frICPOEhPXjfx9tZCOG7pEeLe2rYlfeT3TVBjxb0NIKh3lN3hakYypiQzGW4s9LyhZAqw2W0awsREx55kYowKZCrrNezqpgu5dQyKjYJZCy4hITrqhouN2boZBfw4IMQNRHuztHCE3CzKL047IiNiguZBdEbdahr';

			//$data['me'] = $this->facebook->api('/me?fields=id,name,likes,books');

			// user_likes
			$like_url = 'https://graph.facebook.com/me/likes?about&access_token='.$demo_access_token.'&limit=100';

			$options = array(
				CURLOPT_RETURNTRANSFER	=> TRUE,
				CURLOPT_HEADER					=> FALSE
			);

			$ch = curl_init($like_url);
			curl_setopt_array($ch, $options);
			$content = curl_exec($ch);
			curl_close($ch);

			$user_like =  json_decode($content, TRUE);

			// user_about_me
			$about_url = 'https://graph.facebook.com/me/?access_token='.$demo_access_token.'&limit=100';

			$ch1 = curl_init($about_url);
			curl_setopt_array($ch1, $options);
			$content1 = curl_exec($ch1);
			curl_close($ch1);

			$user_about =  json_decode($content1, TRUE);
			$data['me'] = $user_about;

			// create table : {user_fb_id}_{uniqid}
			$postname = $data['user_profile']['id'].'_'.uniqid();
			$this->mdb->create_table('like_', $postname);
			$table_name = 'like_'.$postname;

			// calculate category weighting to pass to graph
			$data['weighting'] = $this->mcore->weighting($user_like, $table_name);

			$top = 0;
			$interest = null;
			foreach ($data['weighting'] as $w) {
				if($top < 1) {
					$interest	= $w->like_category;
				}
				$top++;
			}
			//print_r($data['weighting']);
			//echo '=============================---------------==> '.$data[0]['weighting']->like_category;
			//$this->backend->gen_graph($data['weighting']);
			//

			$interest = 'JOB16';
			$jobs_category = $this->jobs_model->get_jobs_by_category($interest);
			$jobs_category_edu = $this->jobs_model->get_jobs_by_category_edu($interest);
			$jobs_category_edu_table = $this->jobs_model->get_jobs_by_category_edu_details($interest);
			$edu_levels = $this->jobs_model->get_edu_levels();

			$set_dataX = null;
			$set_dataY = null;
			$set_dataZ = null;
			$set_deg = null;
			$set_dip = null;
			$set_leg = null;

			foreach ($jobs_category as $jobs_data) {
				$set_dataX .= '"'.$jobs_data['JOB_TOTAL'].'",';
				$set_dataY .= '"'.$jobs_data['JOB_STATE'].'",';
			}

			foreach ($jobs_category_edu as $jobs_data) {
				$set_dataZ .= '"'.$jobs_data['JOB_TOTAL'].'",';
			}

			foreach ($edu_levels as $edu_data) {
				$set_leg .= '"'.$edu_data['STATE'].'",';
				$set_deg .= '"'.$edu_data['DEGREE'].'",';
				$set_dip .= '"'.$edu_data['DIPLOMA'].'",';
			}

			$data['jobs_edu'] = $jobs_category_edu_table;
			$data['dataX'] = substr($set_dataX, 0, -1);
			$data['dataY'] = substr($set_dataY, 0, -1);
			$data['dataZ'] = substr($set_dataZ, 0, -1);
			$data['degY'] = substr($set_deg, 0, -1);
			$data['dipY'] = substr($set_dip, 0, -1);
			$data['legX'] = substr($set_leg, 0, -1);

			//echo $data['weighting'];
			// update into core_profile tbl
			$this->mfb->fb_update($data);

			$data['body'] = 'dashboard';
			$this->load->view('master', $data);

		} else {

			$data['login_url'] = $this->facebook->getLoginUrl(array(
				'redirect_uri' => site_url('awesome'),
				'scope' => array('email')
			));

			$data['body'] = 'login';
			$this->load->view('master', $data);

		}

	}

	public function university()
	{
		$this->load->view('dashboard');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
