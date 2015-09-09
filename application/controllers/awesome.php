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
			// $this->mfb->fb_register($data);

			// Start processing
			$demo_access_token = 'CAACEdEose0cBAPQJoGiJFMQdPGPtSZB0IemFqMZChMWwjoltkfd4fteYpnjoDa0E0OCITUwNoZAOfqn9hLkjZBGpSQ0X3jL7G5FR5xdaWvYbKPqvnsMcH4DMLxDJ85fAaxPpytV0IcXTaT9A4MBSR3pCAcQFDPxz8Qx3u7NOBMqYcbUqLb12QTQYiYrM1YaMKWRIJbEZCNfmtKcsLZCRa7fvt05rZAeDNMZD';

			//$data['me'] = $this->facebook->api('/me?fields=id,name,likes,books');

			$url = 'https://graph.facebook.com/me/likes?access_token='.$demo_access_token.'&limit=100';

			$options = array(
				CURLOPT_RETURNTRANSFER	=> TRUE,
				CURLOPT_HEADER					=> FALSE
			);

			$ch = curl_init($url);
			curl_setopt_array($ch, $options);
			$content = curl_exec($ch);
			curl_close($ch);

			$me =  json_decode($content, TRUE);

			// create table : {user_fb_id}_{uniqid}
			$postname = $data['user_profile']['id'].'_'.uniqid();
			$this->mdb->create_table('like_', $postname);
			$table_name = 'like_'.$postname;

			// calculate category weighting
			$data['weighting'] = $this->mcore->weighting($me, $table_name);

		} else {

			$data['login_url'] = $this->facebook->getLoginUrl(array(
				'redirect_uri' => site_url('awesome'),
				'scope' => array('email')
			));

		}

		$this->load->view('login', $data);
	}

	public function university()
	{
		$this->load->view('dashboard');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
