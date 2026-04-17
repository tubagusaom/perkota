<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends MY_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('sitemap_model');
  }

    public function index(){

      $post_segmen_1 = $this->sitemap_model->segmen_1();
      $post_segmen_2 = $this->sitemap_model->segmen_2();

      $data = [
        'post1'   => $post_segmen_1,
        'post2'   => $post_segmen_2,
      ];

      // var_dump($post_segmen_2); die();

      $this->load->view('sitemap', $data);
    }

}
