<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends MY_Controller{
  
 
	 public function index()
    {
		$this->load->view('user_dashboard.html');
            
    }
}