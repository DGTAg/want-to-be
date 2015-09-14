<?php
class Files_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function set_file()
	{
	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'slug' => $slug,
	        'text' => $this->input->post('text')
	    );

	    return $this->db->insert('files', $data);
	}

	public function get_file($id = FALSE)
	{
        if ($id === FALSE)
        {
                $query = $this->db->get('files');
                return $query->result_array();
        }

        $query = $this->db->get_where('files', array('id' => $id));
        return $query->row_array();
	}	

	public function get_files()
	{
		$query = $this->db->get('files');	
		return $query->result_array();
	}		
}