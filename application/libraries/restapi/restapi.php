<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * alias field table
 *
 * member = toko.
 */

class Restapi {
  protected $ci;
  protected $options =  array();

  function __construct () {
    $this->ci =& get_instance();
    $this->ci->load->model('api_model');
  }

  function testrestapi(){
    echo "ini adalah test API";
    // var_dump('ini adalah test API'); die();
  }

  function auth_api_key($id) {

		// $id_member = $this->auth->get_user_data()->id_member;
    // $dataid = $_POST[$id];

		$data = $this->ci->api_model->get_api_key($id);

		return ($data);
		// var_dump(($id)); die();
	} 

  public function content_type_json(){
    header('Content-Type: application/json');
  }

  public function response_api($id){

    // var_dump($id); die();
    
    $data=array(
        '200' => 'Success',
        '201' => 'Successfully Created.',
        '400' => 'Invalid key. API key not found.',
        '401' => 'Unauthorized.',
        '404' => 'Not Found.',
        '405' => 'NOT ALLOWED.',
        '409' => 'Response Conflict.',
        '500' => 'Internal Server Error.'
    );

    $response=array(
        'Code' => intval($id),
        'Message' =>$data[$id]
    );

    // var_dump($data[$id]); die();

    //  return $data[$id];
    return ($response);
  }

}
