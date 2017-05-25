<?php

class test extends CI_Controller{

    public function index(){

        $this->load->helper('url');
        $this->load->view('add_user.html');
        
    }
    
}


?>