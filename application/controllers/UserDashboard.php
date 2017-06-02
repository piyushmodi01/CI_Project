<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/userDashboard');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("../login");

    }

}