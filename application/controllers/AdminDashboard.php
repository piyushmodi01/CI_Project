<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    public function index()
    {

        $name = $this->session->get_userdata('name');
        $this->load->view('admin/adminDashboard', $name);

    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect("../login");

    }

}