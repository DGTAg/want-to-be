<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files extends CI_Controller {

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

	public function view($id = NULL)
	{ 
		echo 'id '.$id;die();
		$this->load->model('files_model');
		$data['files'] = $this->files_model->get_file($id);

		// if (empty($data['files_item']))
  //       {
  //               show_404();
  //       }

        //$data['title'] = $data['files']['title'];
        $data['title'] = 'View File';
        $this->load->view('templates/header', $data);
        $this->load->view('files/view', $data);
        $this->load->view('templates/footer');
	}	

	public function lists()
	{ 
		$this->load->model('files_model');
		$data['files'] = $this->files_model->get_files();

		if (empty($data['files']))
        {
                show_404();
        }

        $data['title'] = 'List all Files';
        $this->load->view('templates/header', $data);
        $this->load->view('files/list', $data);
        $this->load->view('templates/footer');
	}	

	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a files item';

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('text', 'text', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	       $this->load->view('templates/header', $data);
	        $this->load->view('files/create');
	       $this->load->view('templates/footer');

	    }
	    else
	    {
	        $this->load->model('files_model');
	        $this->files_model->set_file();
	        $this->load->view('files/success');
	    }
	}	
}

/* End of file files.php */
/* Location: ./application/controllers/files.php */