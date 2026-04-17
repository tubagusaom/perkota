<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Tv_banner_model extends MY_Model {

  public function __construct() {
      $this->_table = "tv_banner";
      parent::__construct($this->_table);
  }

  protected $_table;
  protected $table_label = 'Data Banner';
  protected $_columns = array(
    'title' => array(
        'label' => 'Nama Baner',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 50
    ),
    // 'status_iklan' => array(
    //     'label' => 'Status Iklan',
    //     'rule' => 'trim|xss_clean',
    //     'formatter' => array('Tidak Aktiv','Aktiv'),
    //     'save_formatter' => 'string',
    //     'width' => 60,
    //     'align' =>'center',
    // ),
    'link' => array(
        'label' => 'Link Banner',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'target' => array(
        'label' => 'target Link',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'no_urut' => array(
        'label' => 'No Urut',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 30,
        'align' =>'center',
    ),
    'image_slide' => array(
        'label' => 'Gambar Banner',
        'rule' => 'trim|xss_clean',
        'formatter' => 'url2images',
        'save_formatter' => 'string',
        'width' => 60,
        'align' =>'center',
    ),
  );

    protected $_order = array("id" => "DESC");
    protected $_unique = array('unique' => array('id'), 'group' => false);

    function url2images($url) {
        if(!is_null($url) && !empty($url)) {
          return "<img width=100% height=100% src='$url' class='img-thumbnail' />";
        }else {
            return "";
        }
    }

    function tampil_slideshow() {
        $iklan = 't_iklan';
        $this->db->select("*");
        $this->db->from("$iklan");
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        return $query->result();
    }



}

?>
