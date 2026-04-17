
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tv_live extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('tv_live_model');
	}

	function index() {
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
					$this->load->library('grid');
					$grid = $this->grid->set_properties(array('model' => 'tv_live_model', 'controller' => 'tv_live', 'options' => array('id' => 'tv_live', 'pagination', 'rownumber')))->load_model()->set_grid();
					$view = $this->load->view('tv_live/index', array('grid' => $grid), true);
					echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
			} else {
					block_access_method();
			}
	}

    function datagrid() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $row = intval($this->input->post('rows')) == 0 ? 20 : intval($this->input->post('rows'));
            $page = intval($this->input->post('page')) == 0 ? 1 : intval($this->input->post('page'));
            $offset = $row * ($page - 1);
            $data = array();
            $params = array('_return' => 'data');
            if (isset($where))
                $params['_where'] = $where;
            $data['total'] = isset($where) ? $this->tv_live_model->count_by($where) : $this->tv_live_model->count_all();
            $this->tv_live_model->limit($row, $offset);
            $order = $this->tv_live_model->get_params('_order');
            // $rows = isset($where) ? $this->tv_live_model->order_by($order)->get_many_by($where) : $this->tv_live_model->order_by($order)->get_all();
            $rows = $this->tv_live_model->set_params($params)->with(array('categorie_live'));
            $data['rows'] = $this->tv_live_model->get_selected()->data_formatter($rows);
            echo json_encode($data);
        }
        else {
            block_access_method();
        }
    }

	function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = $this->tv_live_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->tv_live_model->check_unique($data)) {

                    if ($this->tv_live_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->tv_live_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
			// $view = $this->load->view('tv_live/add', array('url' => base_url() . 'tv_live/upload'), TRUE);
			// echo json_encode(array('msgType' => 'success', 'msgValue' => $view));

            
            $this->load->model('tv_categories_live_model');
            $categorie_live = $this->tv_categories_live_model->dropdown('id', 'categorie_live');
            
            $data_code = $this->tv_live_model->data_desc();

            // var_dump($data_code); die();

            $view = $this->load->view('tv_live/add', array('categorie_live' => $categorie_live,'url' => base_url() . 'tv_live/upload','data_code' => $data_code->code_live), TRUE);
			echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
        }
    }

		function upload() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->tv_live_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->tv_live_model->check_unique($data)) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {

                        $rename_file = rand() . "_" . str_replace(' ', '_', strtolower($_FILES['fileToUpload']['name']));
                        
                        $data['logo_link'] = base_url() . "assets_tv/images/tv/" . $rename_file;
                        $data['logo_live'] = $rename_file;

                        // var_dump($rename_file); die();

                        $config['file_name'] = $rename_file;
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/tv/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['max_size'] = '512000000';

                        $this->load->library('upload', $config);

                        if (!$this->upload->do_upload('fileToUpload')) {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => $this->upload->display_errors()));
                            exit();
                        }
                    } else {
                        $data['logo_link'] = "";
                    }

                    if ($this->tv_live_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data Berhasil Disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", strip_tag($this->tv_live_model->get_validation()))));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

		function edit($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->tv_live_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->tv_live_model->check_unique($data, intval($id))) {
                    if ($this->tv_live_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat diubah !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->tv_live_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $con_method = $this->tv_live_model->get(intval($id));
            if (sizeof($con_method) == 1) {

                $this->load->model('tv_categories_live_model');
                $categorie_live = $this->tv_categories_live_model->dropdown('id', 'categorie_live');

                $data = $this->tv_live_model->get_single($con_method);
                $view = $this->load->view('tv_live/edit', array('categorie_live' => $categorie_live,'data' => $data,'url' => base_url() . 'tv_live/edit_upload/' . $id), TRUE);
                echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        }
    }

    function edit_upload($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->tv_live_model->set_validation()->validate();

            if ($data !== false) {
                if ($this->tv_live_model->check_unique($data, intval($id))) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {

                        $tv_live = $this->tv_live_model->get(intval($id));

                        $rename_file = rand() . "_" . str_replace(' ', '_', strtolower($_FILES['fileToUpload']['name']));
                        
                        $data['logo_link'] = base_url() . "assets_tv/images/tv/" . $rename_file;
                        $data['logo_live'] = $rename_file;
                        // $data['logo_link'] = rand().str_replace(' ', '_', $_FILES['fileToUpload']['name']);

                        $config['file_name'] = $rename_file;
                        // $config['file_name'] = $data['logo_link'];
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/tv/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['max_size'] = '51200000';

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('fileToUpload')) {

                            $current_file = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/tv/' . $tv_live->logo_live;
                            if (is_file($current_file)) {
                                unlink($current_file);
                            }
                        } else {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => strip_tags($this->upload->display_errors())));
                            exit();
                        }
                    } else{

                        $val_data = $this->input->post('foto_hidden');
                        // var_dump($val_datas); die();

                        $data['logo_live'] = $val_data;
                        $data['logo_link'] = base_url() . "assets_tv/images/tv/$val_data";
                    }

                    if ($this->tv_live_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil diubah !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->tv_live_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

		function delete($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $roles = $this->tv_live_model->get(intval($id));
			$hapusgambar = $this->tv_live_model->get(intval($id));

            if (sizeof($roles) == 1) {
                if ($this->tv_live_model->delete(intval($id))) {
					$current_file = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets_tv/images/tv/' . $hapusgambar->logo_live;
					if (is_file($current_file)) {
						unlink($current_file);
					}
                    echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil dihapus'));
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak berhasil dihapus !'));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        } else {
            block_access_method();
        }
    }



}
