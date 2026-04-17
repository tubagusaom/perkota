<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Proyek extends MY_Controller
{


	function __construct()

	{
		parent::__construct();
		$this->load->model('welcome_model');
	}

	public function index()
	{
	}

	public function tac()
	{
		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();

		$data['jenis_user'] = $this->auth->get_user_data()->jenis_user;
		$data['nama_user'] = $this->auth->get_user_data()->nama;
		$data['id_user'] = $this->auth->get_user_data()->id;
		$data['id_member'] = $this->auth->get_user_data()->id_member;
		$id_member = $data['id_member'];

		$data['menu'] = $this->welcome_model->menu();
		$data['kategori'] = $this->welcome_model->kategori();
		$data['sub_kategori'] = $this->welcome_model->sub_kategori();

		$data['keranjang_get_member'] = $this->welcome_model->keranjang_get_member($id_member);
		$data['product_favorite'] = $this->welcome_model->product_favorite($id_member);
		$data['keranjang_buyer'] = $this->welcome_model->keranjang_buyer($id_member);

		$keranjang_buyer = $data['keranjang_buyer'];

		$data_toko = "";
		$total_keranjang = "";
		foreach ($keranjang_buyer as $key => $keranjang) {
			$total_keranjang += $keranjang->jumlah_product;
		}

		if ($total_keranjang == "") {
			$data['total_keranjang'] = '0';
		} else {
			$data['total_keranjang'] = $total_keranjang;
		}


		if (empty($id_member)) {
			$this->load->view('templates/bootstraps/header', $data);
		} else {
			$this->load->view('templates/buyer/header', $data);
		}

		$this->load->view('proyek/tac', $data);
		$this->load->view('templates/buyer/bottom_buyer', $data);
	}
}
