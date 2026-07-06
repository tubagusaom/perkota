<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Pendaftaran_model extends MY_Model {

    function provinsi() {
        $this->db->from('m_ro_provinsi');
        $query = $this->db->get();
        return $query->result();
    }

}
