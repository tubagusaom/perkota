<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth_login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
  }

    function index(){
        echo json_encode("index");
    }

		function fb($id_fb,$nama){
        // echo json_encode("FB");

				$rname = str_replace("_-_"," ",$nama);
				// echo ($rname);

				$this->db->where('akun',$id_fb);
				$query_user = $this->db->get("t_users");

				// if($query_user->num_rows() > 0){
				// 	$this->session->set_flashdata('result', 'Pendaftaran Gagal. email sudah terdaftar.');
				// 	$this->session->set_flashdata('mode_alert', 'warning');
				// 	redirect('welcome/sukses');
				// 	die();
				// }

				$buyer =  kode_tbl().'buyer';
				$buyer_alamat =  kode_tbl().'buyer_alamat';

				if ($query_user->num_rows() == 0) {

					$data = array(
						'nm_buyer' => $rname,
						'klamin_buyer' => '',
						'hp_buyer' => '',
						'email_buyer' => '',
						'tgl_lahir_buyer' => '',
						// 'klamin_buyer' => $xxx,
						'status_buyer' => '1'
					);
					$this->db->insert($buyer, $data);

					$id = $this->db->insert_id();

					$data_alamat = array(
						'id_buyer' => $id,
						'label_alamat' => 'Rumah',
						'nm_penerima' => $rname,
						'tlp_penerima' => '',
						'alamat_buyer' => '',
						'id_provinsi' => '',
						'id_kabupaten' => '',
						'kode_pos' => '',
						'jenis_alamat' => '1',
						'stts_alamat' => '1',
					);
					$this->db->insert($buyer_alamat, $data_alamat);

					$dataxy['akun'] = $id_fb;
					$dataxy['email'] = $id_fb;
					$dataxy['hp'] = '';
					$dataxy['nama_user'] = $rname;
					$dataxy['jenis_user'] = '3';
					$dataxy['sandi'] = 'login_fb';
					$dataxy['sandi_asli'] = '';
					$dataxy['aktif'] = '1';
					$dataxy['id_member'] = $id;

					$this->load->model('User_Model');
					$this->User_Model->insert($dataxy);
					$user_id = $this->db->insert_id();

					$datayy['user_id'] = $user_id;
					$datayy['role_id'] = 5;
					$this->load->model('User_Role_Model');
					$this->User_Role_Model->insert($datayy);

					$this->session->set_flashdata('result', '<b> Pendaftaran Berhasil. silahkan <a href="#" id="login-btn" data-toggle="modal" data-target="#myModal" class="">login</a> menggunakan email yg didaftarkan sebagai username dan password yg anda tentukan. </b>');
					$this->session->set_flashdata('mode_alert', 'success');
					redirect('home');

				}else {

					// $this->session->set_flashdata('result', 'Pendaftaran Gagal. Ada kesalahan dalam pengisian database. Atau email sudah terdaftar.');
					// $this->session->set_flashdata('mode_alert', 'warning');
					// redirect('home');

				}

				// var_dump($nama); die();
    }

		function google(){
        echo json_encode("GOOGLE");
    }

}
