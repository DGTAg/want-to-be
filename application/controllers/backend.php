<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    //public $interest = 'JOB16';


	public function gen_graph($interest=null)
	{
		//$this->load->model('jobs_model');
		//

    //$interest[0]->like_category;
    //
    $interest;

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

 		$this->load->view('backend/dashboard', $data);
	}
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
