<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *
  */
 class Mdb extends CI_Model {

   function __construct() {

     parent::__construct();
     $this->load->dbforge();

   }

   function create_table($tbl="", $postname="") {

  		$tbl_name = $tbl.$postname;

  		// set table engine
  		$this->db->query('SET storage_engine=MYISAM;');

  		if($tbl == 'like_') {

  			// create table
  			$fields = array(
  				'id' => array(
  					'type' => 'BIGINT',
  					'unsigned' => TRUE,
  					'auto_increment' => TRUE,
  				),
          'like_name' => array(
  					'type' => 'VARCHAR',
  					'constraint' => 500
  				),
  				'like_category' => array(
  					'type' => 'VARCHAR',
  					'constraint' => 500
  				),
  				'timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
  			);

  		}

  		$this->dbforge->add_field($fields);
  		$this->dbforge->add_key('id', TRUE);
  		$this->dbforge->create_table($tbl_name, TRUE);


  	}

 }
