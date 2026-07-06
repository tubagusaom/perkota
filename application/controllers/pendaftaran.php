<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('pendaftaran_model');
	}

	// function index() { }

	function daftar() {
		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();

        $data['provinsi'] = $this->pendaftaran_model->provinsi();
        // $data['provinsi_ro'] = $this->provinsi_ro();

        // $provinsi_ro = $this->provinsi_ro();

        // var_dump($provinsi_ro); die();
        // var_dump($data['provinsi']); die();

        $this->load->view('templates/pendaftaran/header', $data);
        $this->load->view('templates/pendaftaran/daftar_member', $data);
        $this->load->view('templates/pendaftaran/bottom', $data);
	}

  function qr_payment() {
    $data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();

    $this->load->view('templates/pendaftaran/header', $data);
    $this->load->view('templates/pendaftaran/qr_pay', $data);
    $this->load->view('templates/pendaftaran/bottom', $data);
  }

	function save_pendaftaran(){

        $buyer =  kode_tbl() . 'buyer';
        $buyer_alamat =  kode_tbl() . 'buyer_alamat';


        $nm_buyer = $this->input->post('nm_buyer');
        $klamin_buyer = $this->input->post('klamin_buyer');
        $hp_buyer = $this->input->post('hp_buyer');
        $email_buyer = $this->input->post('email_buyer');
        $tgl_lahir_buyer = $this->input->post('tgl_lahir_buyer');
        $label_alamat = $this->input->post('label_alamat');
        $alamat_buyer = $this->input->post('alamat_buyer');
        $id_provinsi = $this->input->post('id_provinsi');
        $id_kabupaten = $this->input->post('id_kabupaten');
        $kode_pos = $this->input->post('kode_pos');
        $pass1 = $this->input->post('pass1');
        $pass2 = $this->input->post('pass2');

        $this->db->where('akun', $email_buyer);
        $query_user = $this->db->get("t_users");

        // var_dump($email_buyer); die();

        if ($query_user->num_rows() > 0) {
        $this->session->set_flashdata('result', 'Pendaftaran Gagal. email sudah terdaftar.');
        $this->session->set_flashdata('mode_alert', 'warning');
        redirect('pendaftaran/sukses');
        die();
        }

        $data = array(
        'nm_buyer' => $nm_buyer,
        'klamin_buyer' => $klamin_buyer,
        'hp_buyer' => $hp_buyer,
        'email_buyer' => $email_buyer,
        'tgl_lahir_buyer' => $tgl_lahir_buyer,
          // 'klamin_buyer' => $xxx,
        'status_buyer' => '1'
        );

        if ($this->db->insert($buyer, $data)) {

        $id = $this->db->insert_id();

        $data_alamat = array(
            'id_buyer' => $id,
            'label_alamat' => $label_alamat,
            'nm_penerima' => $nm_buyer,
            'tlp_penerima' => $hp_buyer,
            'alamat_buyer' => $alamat_buyer,
            'id_provinsi' => $id_provinsi,
            'id_kabupaten' => $id_kabupaten,
            'kode_pos' => $kode_pos,
            'jenis_alamat' => '1',
            'stts_alamat' => '1',
        );
        $this->db->insert($buyer_alamat, $data_alamat);

          // $datax['sender_id'] = 1;
          // $datax['reciepent_id'] = 1;
          // $datax['title'] = 'Pendaftaran Uji Kompetensi';
          // $datax['message'] = 'Pendaftaran UJK atas nama ' . $nama_lengkap . ' No HP ' . $no_telp;
          //
          // $this->load->model('Pesan_Model');
          // $this->Pesan_Model->insert($datax);
          // $admin = $this->db->get('r_konfigurasi_aplikasi')->row();
          //
          // $data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
          // $nama = str_replace(' ', '', strtolower($nama_lengkap));
          //
          // if (strlen($nama) > 4) {
          //   $dataxy['akun'] = substr($nama, 0, 4) . rand(1, 9999);
          // } else {
          //   $dataxy['akun'] = $nama . rand(1, 9999);
          // }

        $dataxy['akun'] = $email_buyer;
        $dataxy['email'] = $email_buyer;
        $dataxy['hp'] = $hp_buyer;
        $dataxy['nama_user'] = $nm_buyer;
        $dataxy['jenis_user'] = '3';
        $dataxy['sandi'] = $pass1;
        $dataxy['sandi_asli'] = $pass1;
        $dataxy['aktif'] = '1';
        $dataxy['id_member'] = $id;

        $this->load->model('User_Model');
        $this->User_Model->insert($dataxy);
        $user_id = $this->db->insert_id();

        $datayy['user_id'] = $user_id;
        $datayy['role_id'] = 5;
        $this->load->model('User_Role_Model');
        $this->User_Role_Model->insert($datayy);

          // $dataxyz = array(
          //   'id_users' => $user_id
          // );
          // $this->db->where('id', $id);
          // $this->db->update(kode_tbl() . 'asesi', $dataxyz);

        $this->session->set_flashdata('result', '<b> Pendaftaran Berhasil. silahkan <a href="#" id="login-btn" data-toggle="modal" data-target="#myModal" class="">login</a> menggunakan email yg didaftarkan sebagai username dan password yg anda tentukan. </b>');
        $this->session->set_flashdata('mode_alert', 'success');
        redirect('pendaftaran/sukses');
        } else {

        $this->session->set_flashdata('result', 'Pendaftaran Gagal. Ada kesalahan dalam pengisian database. Atau email sudah terdaftar.');
        $this->session->set_flashdata('mode_alert', 'warning');
        redirect('pendaftaran/sukses');
        }

        // var_dump($data); die();

	}

	function sukses() {
        $data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
        // $data['marquee'] = $this->artikel_model->marquee();

        // $this->load->view('templates/bootstraps/header', $data);
        $this->load->view('templates/bootstraps/sukses', $data);
        // $this->load->view('templates/bootstraps/bottom',$data);
    }

	// function sukses_pembayaran() {
    //     $data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
    //     $data['inisial'] = "Pembayaran sukses";
    //     // $data['marquee'] = $this->artikel_model->marquee();

    //     $this->load->view('templates/bootstraps/header', $data);
    //     $this->load->view('templates/bootstraps/sukses_pembayaran', $data);
    //     // $this->load->view('templates/bootstraps/bottom',$data);
	// }

}