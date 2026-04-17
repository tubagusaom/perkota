<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('product_model');
		$this->load->model('welcome_model');
		$this->load->library('pagination');
	}

	function show($id=0,$offset=0){

		$keyword=$this->input->get('q');
		$data['keyword']=$keyword;

		$data['inisial']="Pencarian ".$keyword;

		$id_member = $this->auth->get_user_data()->id_member;
		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();
		$data['nama_user'] = $this->auth->get_user_data()->nama;

		$data['pengunjung'] = $this->welcome_model->dataPengunjung();
		$data['total'] = $this->welcome_model->totalPengunjung();
		$data['rst'] = array();

		$data['menu'] = $this->welcome_model->menu();
		$data['kategori'] = $this->welcome_model->kategori();
		$data['sub_kategori'] = $this->welcome_model->sub_kategori();

		$data['keranjang_buyer'] = $this->welcome_model->keranjang_buyer($id_member);

		$keranjang_buyer = $data['keranjang_buyer'];

		$data_toko = "";
		$total_keranjang ="";
		foreach ($keranjang_buyer as $key => $keranjang) {
			$total_keranjang += $keranjang->jumlah_product;
		}

		if ($total_keranjang == "") {
			$data['total_keranjang'] = '0';
		}else {
			$data['total_keranjang'] = $total_keranjang;
		}

		$seller_array = array(
            '119'=>'haston',
      			'111'=>'mitra10',
      			'112'=>'amarodinamikatangguh',
      			'113'=>'cisangkan',
      			'114'=>'histell',
      			'115'=>'rosykramindo',
      			'116'=>'lixiltrading',
      			'117'=>'sullyabadijaya',
      			'0'=>'csa',
      			'118'=>'kulitbatu',
      			'120'=>'suryarezekitimberutama',
      			'121'=>'lantaibatu',
      			'0'=>'tukangbagus',
      			'0'=>'gradana',
      		);

          $data['seller_array'] = $seller_array;

		// var_dump($data['nama_user']); die();
		// $suffix = "?q=".$keyword;
		// echo $suffix;

		if($keyword==""){
			// code...
		}else {

		$offset = $this->uri->segment(4);
		// $this->db->where('id_group_users',6);
		// $this->db->where('is_product','0');
    	$this->db->where('is_product !=','2');
		$this->db->like('nama_product', $keyword);
		$jml = $this->db->get(kode_tbl().'product');
		$data['jmldata'] = $jml->num_rows();

		$config['enable_query_strings'] = true;
		// $config['prefix'] = "?q=".$keyword."&rftb=true";
		$config['suffix'] = "?q=".$keyword."&rftb=true";

		$config['base_url'] = base_url().'search/show/'.$id;
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = 20;
		$data['per_page'] = 20;
		// $config['first_page'] = 'Awal';
		// $config['last_page'] = 'Akhir';
		// $config['next_page'] = '&laquo;';
		// $config['prev_page'] = '&raquo;';
		$config['uri_segment'] = 4;

		$this->pagination->initialize($config);
		//buat pagination
		$data['halaman'] = $this->pagination->create_links();
		$data['data'] = $this->product_model->get_all_product($config['per_page'],$offset,$keyword);

		// echo $offset;

		// var_dump($data['data']); die();
		// var_dump($offset); die();

		}

		if (empty($id_member)) {
			$header = 'bootstraps/header';
			$filpro = "filter";
		}else {
			$header = 'buyer/header';
			$filpro = "filter_buyer";
		}

		// var_dump($id_member); die();

		$this->load->view('templates/'.$header,$data);
		$this->load->view('product/view_search');
		$this->load->view('templates/bootstraps/bottom',$data);

	}

	function filter($id=0,$offset=0,$k=false,$id_k=false,$k1=false,$id_k1=false,$k2=false,$id_k2=false) {

		// var_dump($id); die();

		$id_member = $this->auth->get_user_data()->id_member;
		$data['nama_user'] = $this->auth->get_user_data()->nama;

		$data['aplikasi'] = $this->db->get('r_konfigurasi_aplikasi')->row();

		$data['pengunjung'] = $this->welcome_model->dataPengunjung();
		$data['total'] = $this->welcome_model->totalPengunjung();
		$data['rst'] = array();

		$data['slide_count'] = $this->welcome_model->slide_total();
		$data['slideshow'] = $this->welcome_model->slide_show();
		$data['showiklan'] = $this->welcome_model->show_iklan();

		$data['menu'] = $this->welcome_model->menu();
		$data['kategori'] = $this->welcome_model->kategori();
		$data['sub_kategori'] = $this->welcome_model->sub_kategori();

		$data['keranjang_buyer'] = $this->welcome_model->keranjang_buyer($id_member);

		$keranjang_buyer = $data['keranjang_buyer'];

		$data_toko = "";
		$total_keranjang ="";
		foreach ($keranjang_buyer as $key => $keranjang) {
			$total_keranjang += $keranjang->jumlah_product;
		}

		if ($total_keranjang == "") {
			$data['total_keranjang'] = '0';
		}else {
			$data['total_keranjang'] = $total_keranjang;
		}

		if($k==""){
			// code...
		}else {

			// $offset = $this->uri->segment(4);
			//
	    // $menuid  = $id_k;
	    // $katid   = $id_k1;
	    // $subid   = $id_k2;
			//
	    // if (!empty($menuid) AND !empty($subid)) {
	    //   $where1 = $this->db->where('id_sub_kategori', $id_k2);
			// 	$sfx = $k.'/'.$id_k.'/'.$k1.'/'.$id_k1.'/'.$k2.'/'.$id_k2;
			// 	$acuanid = $id_k2;
	    // }elseif (!empty($menuid) AND !empty($katk)) {
	    //   $where1 = $this->db->where('id_kategori', $id_k1);
			// 	$sfx = $k.'/'.$id_k.'/'.$k1.'/'.$id_k1;
			// 	$acuanid = $id_k1;
	    // }elseif (!empty($menuid)) {
	    //   $where1 = $this->db->where('id_menu_kategori', $id_k);
			// 	$sfx = $k.'/'.$id_k;
			// 	$acuanid = $id_k;
	    // }
			//
			// $jml = $this->db->get(kode_tbl().'product');
			// // $this->db->join(kode_tbl().'menu_kategori b','b.id=a.id_menu_kategori');
			// // $this->db->join(kode_tbl().'kategori c','c.id=a.id_kategori');
			// // $this->db->join(kode_tbl().'sub_kategori d','d.id=a.id_sub_kategori');
			// $where1;
			//
			// $data['jmldata'] = $jml->num_rows();
			//
			// // var_dump($data['jmldata']); die();
			// // var_dump($acuanid); die();



		$menu_k   = $k;
		$menu_id  = $id_k;
		$kat_k    = $k1;
		$kat_id   = $id_k1;
		$sub_k    = $k2;
		$sub_id   = $id_k2;

		if (!empty($menu_id) AND !empty($kat_k) AND !empty($sub_id)) {
			$data['ket_filter'] = $sub_k;
			$usegment = "4";
		}elseif (!empty($menu_id) AND !empty($kat_k)) {
			$data['ket_filter'] = $kat_k;
			$usegment = "5";
		}elseif (!empty($menu_id)) {
			$data['ket_filter'] = $menu_k;
			$usegment = "4";
		}

		$ket_filter = $data['ket_filter'];

		$replace_ket = str_replace("%20"," ",$ket_filter);
		$data['inisial']="Kategori ".$replace_ket;

		// var_dump($menu_k); die();
		// var_dump($data['show_filter_product']); die();

		
		$offset = $this->uri->segment($usegment);
		// $this->db->where('id_group_users',6);
		// $this->db->where('is_product !=','2');
		// $this->db->like('nama_product', $keyword);
		// $jml = $this->db->get(kode_tbl().'product');
		// $data['jmldata'] = $jml->num_rows();

		$show_filter_product = $this->product_model->show_filter_product($k,$id_k,$k1,$id_k1,$k2,$id_k2);
		$jml =  count($show_filter_product);
		$data['jmldata'] = count($show_filter_product);

		$config['enable_query_strings'] = true;
		// $config['prefix'] = "?q=".$keyword."&rftb=true";
		$config['suffix'] = '/'.$sfx;
		// $config['suffix'] = '';
			
		// $config['base_url'] = base_url().'f/'.$id.'/'.$offset;
		$config['base_url'] = base_url().'search/filter/'.$id.'/'.$k.'/'.$id_k.'/'.$k1.'/'.$id_k1.'/'.$k2.'/'.$id_k2;
		$config['total_rows'] = $jml;
		$config['uri_segment'] = $usegment;
		$config['per_page'] = 20;
		$data['per_page'] = 20;
			
		$this->pagination->initialize($config);
		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		// $data['show_filter_product'] = $this->product_model->get_filter_product($config['per_page'],$offset,$k,$id_k,$k1,$id_k1,$k2,$id_k2);
		$data['show_filter_product'] = $this->product_model->show_filter_product($k,$id_k,$k1,$id_k1,$k2,$id_k2);

		// var_dump($config['per_page']); die();
		// var_dump($data['jmldata']); die();

		}

		if (empty($id_member)) {
			$header = 'bootstraps/header';
			$filpro = "filter";
		}else {
			$header = 'buyer/header';
			$filpro = "filter_buyer";
		}

		// var_dump($data['show_filter_product']); die();
		// var_dump($id_member); die();

		$this->load->view('templates/'.$header,$data);
		// $this->load->view('templates/bootstraps/body',$data);
		$this->load->view('product/filter',$data);
		$this->load->view('templates/bootstraps/bottom',$data);
	}

}
