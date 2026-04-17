<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Sitemap_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function segmen_1() {

      // var_dump('test'); die();

  		$this->db->select('slug_url_1,updated_when');

  		$this->db->where('status_slug',1);
      // $this->db->where('slug_url_3 !=','');

  	    return $this->db->order_by('updated_when', 'desc')->get(kode_tbl().'post')->result_array();
  	}

    function segmen_2() {

      // var_dump('test'); die();

  		$this->db->select('slug_url_1,slug_url_2,updated_when');

  		$this->db->where('status_slug',2);
      // $this->db->where('slug_url_3 !=','');

  	    return $this->db->order_by('updated_when', 'desc')->get(kode_tbl().'post')->result_array();
  	}

}
