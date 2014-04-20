<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
       $this->load->model('Blog_model');
    }


    public function index()
    {
       $datos['dato'] = $this->Blog_model->getAll();
        $this->load->view('blog',$datos);
    }

    

}