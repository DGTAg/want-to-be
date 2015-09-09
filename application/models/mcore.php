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

        $data = array(
            'like_name' => $like_name,
            'like_category' => $like_category
        );
        $this->db->insert($tbl, $data);
        $counter++;
      }

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
          $desc_weight[] = $r;
        }
      }
      return $desc_weight;
    }
 }
