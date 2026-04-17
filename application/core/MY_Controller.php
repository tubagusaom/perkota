<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $controller;
    protected $method;
    protected $isLogin;
    protected $totalPengunjung;
    //public $kode_tbl = 'tbl007_';
    function __construct() {
        parent::__construct();

        $this->load->library('acl');

        $data = array();

        /* tangkap nama controller class yang sedang diakses */
        $this->controller = $this->router->fetch_class();

        /* jika method kosong isi dengan index */
        $this->method = empty($this->router->fetch_method()) ? 'index' : $this->router->fetch_method();

        $role = intval($this->auth->get_role_id());

        $data['controller_name'] = $this->controller;
        $data['method_name'] = $this->method;
        $data['role_id'] = $role;

        if (is_ajax_request()) {
            $data['request_method'] = 1;
        } else {
            $data['request_method'] = 2;
        }
        if (!$this->acl->check_permission($data)) {
            if ($this->controller == 'users' && $this->method == 'login' && $this->auth->get_role_id() > 1) {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Anda sudah login menggunakan username ' . $this->auth->get_username()));
                exit;
            } else {
                block_access_method();
            }
        }
        if ($this->auth->is_logged_in()) {
            $this->aplikasi = $this->db->get('r_konfigurasi_aplikasi')->row();
            $this->id = $this->auth->get_user_data()->id;
            $this->db->where('reciepent_id', $this->id);
            $this->db->where('status_read_recepient', '0');
            $this->db->where('parent_id', '0');
            $pesan = $this->db->get('t_pesan')->result();
            $this->unread_message = count($pesan);
            $this->load->library('menus');
            $this->menus = $this->menus->display_menu();

            $this->db->where('reciepent_id', $this->id);
            $this->db->where('status_read_recepient', '0');
            $this->query_pesan_unread = $this->db->get('t_pesan')->result();

            $this->db->where('reciepent_id', $this->id);
            $this->query_pesan = $this->db->get('t_pesan')->result();
        } else {
            $this->aplikasi = $this->db->get('r_konfigurasi_aplikasi')->row();
            $this->load->helper('cookie');
             $check_visitor = get_cookie("terabytee");
             $ip = $this->input->ip_address();

             // $locationx = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
             // date_default_timezone_set('Asia/Jakarta');
             // var_dump($locationx); die();

             if ($check_visitor == false) {
                $db = array(
                    "ip"  => $ip_x,
                    "waktu" => date('H:i:s'),
                    "tanggal" => date('Y-m-d'),
                );
                setcookie('terabytee',$ip,time()+86500,'/');
                $this->db->insert('t_counter',$db);
             }
             $pengunjungHariIni = count($this->db->where('tanggal',date('Y-m-d'))->get('t_counter')->result());
             //$pengunjungHariIni = $this->db->count('t_counter');
             $global_data = array('totalPengunjung'=>$this->db->count_all('t_counter'),'pengunjungHariIni'=>$pengunjungHariIni);

         //Send the data into the current view
         //http://ellislab.com/codeigniter/user-guide/libraries/loader.html
         $this->load->vars($global_data);
            // $this->totalPengunjung = $this->db->count_all('t_counter');
        }


    }
    public function upload_image($param = "", $filename = "") {
        $config['upload_path'] = './repo/asesi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = 10048;
        $config['max_width'] = 8288;
        $config['max_height'] = 5068;
        $config['file_name'] = $filename;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($param)) {
            $error = array('error' => $this->upload->display_errors());

            $result = json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $result = json_encode($data);
        }

        return $result;
    }

    public function upload_file($param = "", $filename = "") {
        $configFile['upload_path'] = './repo/asesi/';
        $configFile['allowed_types'] = 'rtf|doc|docx|xls|xlsx|pdf|gif|jpg|png|jpeg|bmp';
        $configFile['max_size'] = 50000 * 1024;
        $configFile['file_name'] = $filename;
        $configFile['remove_spaces'] = FALSE;

        $this->upload->initialize($configFile);

        if (!$this->upload->do_upload($param)) {
            $error = array('error' => $this->upload->display_errors());

            $result = json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $result = json_encode($data);
        }

        return $result;
    }

    public function upload_member($param = "", $filename = "") {
        $configFile['upload_path'] = './assets/img/member/';
        $configFile['allowed_types'] = 'rtf|doc|docx|xls|xlsx|pdf|gif|jpg|png|jpeg|bmp';
        $configFile['max_size'] = 50000 * 1024;
        $configFile['file_name'] = $filename;
        $configFile['remove_spaces'] = FALSE;

        $this->upload->initialize($configFile);

        if (!$this->upload->do_upload($param)) {
            $error = array('error' => $this->upload->display_errors());

            $result = json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $result = json_encode($data);
        }

        return $result;
    }

    public function upload_product($param = "", $filename = "") {
        $configFile['upload_path'] = './assets/img/product/';
        $configFile['allowed_types'] = 'rtf|doc|docx|xls|xlsx|pdf|gif|jpg|png|jpeg|bmp';
        $configFile['max_size'] = 50000 * 1024;
        $configFile['file_name'] = $filename;
        $configFile['remove_spaces'] = FALSE;

        $this->upload->initialize($configFile);

        if (!$this->upload->do_upload($param)) {
            $error = array('error' => $this->upload->display_errors());

            $result = json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $result = json_encode($data);
        }

        return $result;
    }

    public function upload_product_all($param = "", $filename = "") {
        $configFile['upload_path'] = './assets/files/excels';
        $configFile['allowed_types'] = 'xls|xlsx';
        $configFile['max_size'] = 50000 * 1024;
        $configFile['file_name'] = $filename;
        $configFile['remove_spaces'] = FALSE;

        $this->upload->initialize($configFile);

        if (!$this->upload->do_upload($param)) {
            $error = array('error' => $this->upload->display_errors());

            $result = json_encode($error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $result = json_encode($data);
        }

        return $result;
    }

    function captcha() {
        $panjang = 3;
        $karakter = '123456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            // $string .= $karakter{$pos};
            $string .= $karakter[$pos];
        }

        // var_dump($string); die();
        return $string;
    }

    function inisial_seller($id = "") {

      $acuan_seller_array = array(
  			'119'=>'haston',
  			'111'=>'mitra10',
  			'112'=>'amarodinamikatangguh',
  			'113'=>'cisangkan',
  			'114'=>'histell',
  			'115'=>'rosykramindo',
  			'116'=>'lixiltrading',
  			'117'=>'sullyabadijaya',
  			'122'=>'csa',
  			'118'=>'kulitbatu',
  			'120'=>'suryarezekitimberutama',
  			'121'=>'lantaibatu',
  			'123'=>'tukangbagus',
  			'124'=>'gradana',
  		);

      return $acuan_seller_array[$id];
    }

    public function response($data = null, $http_code = null, $continue = false)
    {
        //if profiling enabled then print profiling data
        $isProfilingEnabled = $this->config->item('enable_profiling');
        if (!$isProfilingEnabled) {
            ob_start();
            // If the HTTP status is not NULL, then cast as an integer
            if ($http_code !== null) {
                // So as to be safe later on in the process
                $http_code = (int) $http_code;
            }

            // Set the output as NULL by default
            $output = null;

            // If data is NULL and no HTTP status code provided, then display, error and exit
            if ($data === null && $http_code === null) {
                $http_code = self::HTTP_NOT_FOUND;
            }

            // If data is not NULL and a HTTP status code provided, then continue
            elseif ($data !== null) {
                // If the format method exists, call and return the output in that format
                if (method_exists(Format::class, 'to_'.$this->response->format)) {
                    // CORB protection
                    // First, get the output content.
                    $output = Format::factory($data)->{'to_'.$this->response->format}();

                    // Set the format header
                    // Then, check if the client asked for a callback, and if the output contains this callback :
                    if (isset($this->_get_args['callback']) && $this->response->format == 'json' && preg_match('/^'.$this->_get_args['callback'].'/', $output)) {
                        $this->output->set_content_type($this->_supported_formats['jsonp'], strtolower($this->config->item('charset')));
                    } else {
                        $this->output->set_content_type($this->_supported_formats[$this->response->format], strtolower($this->config->item('charset')));
                    }

                    // An array must be parsed as a string, so as not to cause an array to string error
                    // Json is the most appropriate form for such a data type
                    if ($this->response->format === 'array') {
                        $output = Format::factory($output)->{'to_json'}();
                    }
                } else {
                    // If an array or object, then parse as a json, so as to be a 'string'
                    if (is_array($data) || is_object($data)) {
                        $data = Format::factory($data)->{'to_json'}();
                    }

                    // Format is not supported, so output the raw data as a string
                    $output = $data;
                }
            }

            // If not greater than zero, then set the HTTP status code as 200 by default
            // Though perhaps 500 should be set instead, for the developer not passing a
            // correct HTTP status code
            $http_code > 0 || $http_code = self::HTTP_OK;

            $this->output->set_status_header($http_code);

            // JC: Log response code only if rest logging enabled
            if ($this->config->item('rest_enable_logging') === true) {
                $this->_log_response_code($http_code);
            }

            // Output the data
            $this->output->set_output($output);

            if ($continue === false) {
                // Display the data and exit execution
                $this->output->_display();
                exit;
            } else {
                if (is_callable('fastcgi_finish_request')) {
                    // Terminates connection and returns response to client on PHP-FPM.
                    $this->output->_display();
                    ob_end_flush();
                    fastcgi_finish_request();
                    ignore_user_abort(true);
                } else {
                    // Legacy compatibility.
                    ob_end_flush();
                }
            }
            ob_end_flush();
        // Otherwise dump the output automatically
        } else {
            echo json_encode($data);
        }
    }

    function segment_qlink_parse($str = "") {
        $urlArray = parse_url($str);
        $segment_query = str_replace("v=","v_key=",$urlArray['query']);
        parse_str($segment_query);

        if(isset($v_key)){
            return $v_key;
        }else {
            return FALSE;
        }
    }

    function uri_youtube($code = "",$jenis="") {

        if($jenis === 'watch'){
            $url_youtube = 'https://www.youtube.com/watch?v=' . $code;
        }elseif($jenis === 'embed'){
            $url_youtube = 'https://www.youtube.com/embed/' . $code;
        }elseif($jenis === 'poster'){
            $url_youtube = 'https://img.youtube.com/vi/' . $code . '/hqdefault.jpg';
        }else{
            $url_youtube = "";
        }

        return $url_youtube;
    }

    function test_mycontroller($str = "") {
        echo json_encode('test mycontroller');
    }



}
