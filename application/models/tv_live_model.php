<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Tv_live_model extends MY_Model {

public function __construct() {
    $this->_table = "tv_live";
    parent::__construct($this->_table);
}

protected $_table;
protected $table_label = 'Data Live TV';
protected $_columns = array(
    'logo_link' => array(
        'label' => 'Logo',
        'rule' => 'trim|xss_clean',
        'formatter' => 'url2images',
        'save_formatter' => 'string',
        'width' => 10,
        'align' =>'center',
    ),
    'logo_live' => array(
        'label' => 'logo_live',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true',
    ),
    'code_live' => array(
        'label' => 'Code',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 15,
        'align' =>'center',
        'hidden' => 'true',
    ),
    'nama_live' => array(
        'label' => 'Name Chanel',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 80,
        'align' =>'left',
    ),
    'id_categories' => array(
        'label' => 'Live Categorie',
        'rule' => 'trim|required|xss_clean',
        'formatter' => 'categorie_live',
        'save_formatter' => 'string',
        'width' => 20,
    ),
    'link_live' => array(
        'label' => 'link_video',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'poster_live' => array(
        'label' => 'Poster',
        'rule' => 'trim|xss_clean',
        'formatter' => 'url3images',
        'save_formatter' => 'string',
        'width' => 15,
    ),
);


    protected $_order = array("id" => "DESC");
    protected $_unique = array('unique' => array('id'), 'group' => false);

    protected $belongs_to = array(
        'categorie_live' => array(
            'model' => 'tv_categories_live_model',
            'primary_key' => 'id_categories',
            'retrieve_columns' => array('categorie_live'),
            'join_type' => 'left'
        )
    );

    function url2images($url) {
        if(!is_null($url) && !empty($url)) {
            return "<img width=100% height=100% src='$url' class='img-thumbnail' />";
        }else {
            return "";
        }
    }

    function url3images($url) {
        if(!is_null($url) && !empty($url)) {
            return "<img width=100% height=100% src='" . base_url() . "assets_tv/images/tv/" . $url . "' class='img-thumbnail' />";
        }else {
            return "";
        }
    }

    function data_desc(){
        $tv_live = 'tv_live';
        $this->db->select('a.code_live');
        $this->db->from($tv_live.' a');
        $this->db->order_by('a.id','DESC');
        $code_live = $this->db->get()->row();
        return $code_live;
    }

}

?>
