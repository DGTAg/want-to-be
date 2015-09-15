<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *
  */
 class Mcore extends CI_Model {

   function __construct() {

     parent::__construct();
   }

    public function weighting($json, $tbl)
    {
      // Populate into like_{user_fb_id}_{uniqid}
      $counter = 0;
      while ($counter < sizeof($json['data'])) {

        $like_name = $json['data'][$counter]['name'];
        $like_category = $json['data'][$counter]['category'];

        $excArr = array("Community","App Page","Shopping/Retail","Product/Service");

        if(!in_array($like_category, $excArr)) {

          $data = array(
              'like_name' => $like_name,
              'like_category' => $like_category
          );
          $this->db->insert($tbl, $data);
        }

         $counter++;

      }

      // Count category weightage
      $sqlAll = "SELECT id FROM $tbl";

      //echo '=========> '.$sql;
      $rsAll = $this->db->query($sqlAll);

      if($rsAll->num_rows() > 0)
        $totalLike = $rsAll->num_rows();

      // Count category weightage
      $sql = "SELECT
              like_category,
              COUNT(id) AS weight
              FROM $tbl
              GROUP BY like_category
              ORDER BY weight DESC";

      //echo '=========> '.$sql;
      $rs = $this->db->query($sql);


      $desc_weight = null;
      if($rs->num_rows() > 0) {
        foreach ($rs->result() as $r) {
          //$desc_weight[] = $r;

          $per = ($r->weight/$totalLike) * 100;

          $desc_weight[] = array(
            "like_category" => $r->like_category,
            "weight" => round($per)
          );
        }
      }
      return $desc_weight;
    }

    public function get_like_id($value='')
    {

      //echo '=============================> '.$value;
      $this->db->where('FBPINFO_DESC', $value);
      $rs = $this->db->get('fbpageinfo');

      return $rs->row()->FBPINFO_ID;
    }

    public function get_like_desc($value='')
    {

      //echo '=============================> '.$value;
      $this->db->where('FBPINFO_ID', $value);
      $rs = $this->db->get('fbpageinfo');

      return $rs->row()->FBPINFO_DESC;
    }
 }
