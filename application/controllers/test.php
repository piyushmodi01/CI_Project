<?php

class test extends CI_Controller{

    public function index(){

        $this->load->helper('url');
        $this->load->view('update_customer.html');
        
    }
    
}


?>