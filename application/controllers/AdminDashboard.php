<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends MY_Controller{
  
 
	 public function index()
    {
		$this->load->view('admin_dashboard.html');
            
    }
}