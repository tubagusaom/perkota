<?php

class Api_konfigurasi_model extends MY_Model {

  public function get_konfigurasi($id = null)
  {

    // var_dump('ok'); die();

      if ($id == null) {
          // return $this->db->get('r_konfigurasi_aplikasi')->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');

          $data_konfigurasi = $this->db->get();
      } else {
          // return $this->db->get_where('r_konfigurasi_aplikasi', ['id' => $id])->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');
          $this->db->where("id",$id);

          $data_konfigurasi = $this->db->get();
      }

      return $data_konfigurasi->result_array();

  }

}
