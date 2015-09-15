<?php
class Jobs_model extends CI_Model {

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

	public function get_jobs()
	{
		// $query = $this->db->get('jobs_by_state_category');
		// return $query->result_array();

		$this->db->select('*');
		$this->db->from('jobs_by_state_category');
		$this->db->join('job_category', 'job_category.JOB_ID = jobs_by_state_category.JOB_ID');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_jobs_stats()
	{
		$this->db->select('JOB_ID, JOB_TOTAL');
		$this->db->from('jobs_by_state_category');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_jobs_by_state($stateid)
	{
		$this->db->select('*');
		$this->db->from('jobs_by_state_category');
		$this->db->join('job_category', 'job_category.JOB_ID = jobs_by_state_category.JOB_ID');
		$this->db->where('jobs_by_state_category.JOB_STATE =', $stateid);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_jobs_by_category($categoryid)
	{
		$this->db->select('*');
		$this->db->from('jobs_by_state_category');
		$this->db->join('job_category', 'job_category.JOB_ID = jobs_by_state_category.JOB_ID');
		$this->db->where('jobs_by_state_category.JOB_ID =', $categoryid);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_jobs_by_category_edu($categoryid)
	{
		$this->db->select('universiti.UNI_STATE AS JOB_STATE, kursus.KSS_UNI, COUNT(kursus.KSS_ID) AS JOB_TOTAL');
		$this->db->from('onetobe.kursus');
		$this->db->join('universiti', 'kursus.KSS_UNI = universiti.UNI_ID');
		$this->db->join('jobs_by_course', 'kursus.KSS_BID = jobs_by_course.CJ_ID');
		$this->db->where('jobs_by_course.CJ_JOB =', $categoryid);
		$this->db->group_by('universiti.UNI_STATE');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_jobs_by_category_edu_details($categoryid)
	{
		// $this->db->select('universiti.UNI_STATE, universiti.UNI_DESC, kursus.KSS_UNI, kursus.*');
		// $this->db->from('onetobe.kursus');
		// $this->db->join('universiti', 'kursus.KSS_UNI = universiti.UNI_ID');
		// $this->db->join('jobs_by_course', 'kursus.KSS_BID = jobs_by_course.CJ_ID');
		// $this->db->where('jobs_by_course.CJ_JOB =', $categoryid);
		// $this->db->group_by('universiti.UNI_STATE');
		// $query = $this->db->get();

		$sql = "SELECT KSS_ID,UNI_DESC,KSS_KOD_PROG,KSS_PROG_DESC,KSS_SEM,BID_DESC,FAK_DESC,UNI_STATE,KSS_UNI
						FROM kursus
						INNER JOIN lookup
						INNER JOIN bidang
						INNER JOIN universiti
						INNER JOIN fakulti
						ON
						(lookup.LOK_BIDANG=kursus.kss_bid OR
						lookup.LOK_FAKULTI=kursus.kss_FAK) AND
						bidang.BID_ID = KSS_BID AND
						universiti.UNI_ID = KSS_UNI AND
						fakulti.FAK_ID = KSS_FAK
						where lookup.LOK_DESC like '%$categoryid%'
						GROUP BY KSS_KOD_PROG
						LIMIT 0, 15";

		$rs = $this->db->query($sql);

		return $rs->result_array();

		//return $query->result_array();
	}

	public function get_edu_levels()
	{
		$this->db->select('*');
		$this->db->from('edu_levels');
		$query = $this->db->get();

		return $query->result_array();
	}
}
