<?php defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . "libraries/format.php";
require_once APPPATH . "libraries/RestController.php";

// new Restcontroller;

use chriskacerguis\RestServer\RestController;

class Api_konfigurasi extends RestController{

  public function __construct() {
      parent::__construct();
      $this->load->model('Api_konfigurasi_model', 'm_konfigurasi');
      // $this->load->model('api_konfigurasi_model');
      // Membatasi Jumlah akses sesuai kebutuhan
      $this->methods['index_get']['limit'] = 200;
  }

  public function index_get($id = "") {

    // $xxx = APPPATH . "libraries/format.php";
    // var_dump($xxx); die();

    $id = $this->get('id');

    if ($id === null) {
        $konfigurasi = $this->m_konfigurasi->get_konfigurasi();
        // $konfigurasi = $this->api_konfigurasi_model->get_konfigurasi();
    } else {
        $konfigurasi = $this->m_konfigurasi->get_konfigurasi($id);
        // $konfigurasi = $this->api_konfigurasi_model->get_konfigurasi($id);
    }

    // var_dump($konfigurasi); die();

    // echo json_encode($konfigurasi);

    // if ($konfigurasi) {
    //     $this->response([
    //         'status' => true,
    //         'data' => $konfigurasi
    //     ], RestController::HTTP_OK);
    // } else {
    //     $this->response([
    //         'status' => false,
    //         'message' => 'id not found'
    //     ], RestController::HTTP_NOT_FOUND);
    // }

  }

}
