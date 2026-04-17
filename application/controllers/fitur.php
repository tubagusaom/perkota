<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fitur extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('welcome_model');
	}

	function index() {
		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
		
        $data['inisial'] = "Fitur";

        $data['pengunjung'] = $this->welcome_model->dataPengunjung();
        $data['total'] = $this->welcome_model->totalPengunjung();
        $data['rst'] = array();
		


        // $this->load->view('templates/bootstraps/header',$data);
        $this->load->view('fitur/view',$data);
        // $this->load->view('templates/bootstraps/bottom',$data);
	}

}