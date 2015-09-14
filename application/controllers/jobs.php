<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/files
	 *	- or -  
	 * 		http://example.com/index.php/files/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/files/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function lists()
	{ 
		$this->load->model('jobs_model');
		$data['jobs'] = $this->jobs_model->get_jobs();

		if (empty($data['jobs']))
        {
                show_404();
        }

        $data['title'] = 'List all Jobs';
        $this->load->view('templates/header', $data);
        $this->load->view('jobs/list', $data);
        $this->load->view('templates/footer');
	}	

	public function lists_json()
	{ 
		// $this->load->library('fusioncharts');
		// $this->fusioncharts->hyole();
		$this->load->model('jobs_model');
		$data['jobs'] = $this->jobs_model->get_jobs();

		$this->output
		    ->set_content_type('application/json')
		    ->set_output(json_encode(array($data['jobs'])));

		$this->load->view('jobs/json', $data);
	}	

	public function lists_by_state($stateid)
	{ 
		$this->load->model('jobs_model');
		$data['jobs'] = $this->jobs_model->get_jobs_by_state($stateid);

		if (empty($data['jobs']))
        {
                show_404();
        }

        $data['title'] = 'List all Jobs';
        $this->load->view('templates/header', $data);
        $this->load->view('jobs/list', $data);
        $this->load->view('templates/footer');
	}		

	public function lists_by_category($categoryid)
	{ 
		$this->load->model('jobs_model');
		$data['jobs'] = $this->jobs_model->get_jobs_by_category($categoryid);

		if (empty($data['jobs']))
        {
                show_404();
        }

        $data['title'] = 'List all Jobs';
        $this->load->view('templates/header', $data);
        $this->load->view('jobs/list', $data);
        $this->load->view('templates/footer');
	}		
}

/* End of file files.php */
/* Location: ./application/controllers/files.php */