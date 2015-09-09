<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *
  */
 class Mfb extends CI_Model {

   function __construct() {

     parent::__construct();
   }

   function fb_register($data = null) {


     $data = array(
       'fbname' => $data['user_profile']['name'],
       'fbid' => $data['user_profile']['id']
     );
     $this->db->insert('core_profile', $data);


   }

 }
