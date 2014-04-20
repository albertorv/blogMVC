<?php

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        // Load our view to be displayed
        // to the user
        $this->load->view('login_view');
    }

      public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index();
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }        
    }
}