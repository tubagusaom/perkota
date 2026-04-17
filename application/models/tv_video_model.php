<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Tv_video_model extends MY_Model {

public function __construct() {
    $this->_table = "tv_video";
    parent::__construct($this->_table);
}

protected $_table;
protected $table_label = 'Data Video';
protected $_columns = array(
    // 'code_video' => array(
    //     'label' => 'Code',
    //     'rule' => 'trim|xss_clean',
    //     'formatter' => 'string',
    //     'save_formatter' => 'string',
    //     'width' => 15,
    //     'align' =>'center',
    //     'hidden' => 'true'
    // ),
    'code_video'	=>	array(
        'label'	=>	'Code',
        'rule'	=>	'trim|xss_clean',
        'formatter'	=>	"int",
        'save_formatter' => 'int',
        'width' => 75,
        'hidden' => 'true'
    ),
    'id_categorie' => array(
        'label' => 'Categorie',
        'rule' => 'trim|required|xss_clean',
        'formatter' => 'categories',
        'save_formatter' => 'string',
        'width' => 30,
    ),
    'nama_video' => array(
        'label' => 'Title',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 80,
        'align' =>'left',
    ),
    'desc_video' => array(
        'label' => 'Description',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'width' => 80,
        'align' =>'left',
    ),

    'link_video' => array(
        'label' => 'link_video',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'link_embed' => array(
        'label' => 'link_embed',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'poster_video' => array(
        'label' => 'poster_video',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'frame_border' => array(
        'label' => 'frame_border',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'allow_arr' => array(
        'label' => 'allow_arr',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
    'allow_full_screen' => array(
        'label' => 'allow_full_screen',
        'rule' => 'trim|xss_clean',
        'formatter' => 'string',
        'save_formatter' => 'string',
        'hidden' => 'true'
    ),
);

    protected $_order = array("id" => "DESC");
    protected $_unique = array('unique' => array('id'), 'group' => false);

    protected $belongs_to = array(
        'categories' => array(
            'model' => 'tv_categories_model',
            'primary_key' => 'id_categorie',
            'retrieve_columns' => array('categories'),
            'join_type' => 'left'
        )
    );

    function data_desc(){
        $tv_video = 'tv_video';
        $this->db->select('a.code_video');
        $this->db->from($tv_video.' a');
        $this->db->order_by('a.id','DESC');
        $code_video = $this->db->get()->row();
        return $code_video;
    }

    function url2images($url) {
        if(!is_null($url) && !empty($url)) {
            return "<img width=100% height=100% src='$url' class='img-thumbnail' />";
        }else {
            return "";
        }
    }

}

?>
