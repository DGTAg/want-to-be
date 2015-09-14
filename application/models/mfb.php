<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *
  */
 class Mfb extends CI_Model {

   function __construct() {

     parent::__construct();
   }

   function fb_register($data = null) {

     $this->db->where('fbid', $data['user_profile']['id']);
     $rs = $this->db->get('core_profile');

     if($rs->num_rows() > 0) {

       // record exist
       // do nothing

     } else {

      // insert new record
      $new_data = array(
        'fbname' => $data['user_profile']['name'],
        'fbid' => $data['user_profile']['id']
      );
      $this->db->insert('core_profile', $new_data);

     }
   }

   function fb_update($data = null) {

     $this->db->where('fbid', $data['user_profile']['id']);
     $rs = $this->db->get('core_profile');

     if($rs->num_rows() > 0) {

       // record exist
       // do update
       $new_data = array(
         'tendency' => json_encode($data['weighting'])
       );
       $this->db->where('fbid', $data['user_profile']['id']);
       $this->db->update('core_profile', $new_data);

     } else {

      // record not exist
      // do nothing

     }
   }

 }
