<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{

    public function index()
    {
        if($role=$this->session->userdata('role')){
            if($role=='admin'){
                $this->load->view('admin/adminDashboard');
            }
            else if($role=='user') {
                return redirect('userDashboard');
            }

        }
        else{
            return redirect('login');
        }


    }


    public function logout()
    {

        $this->session->sess_destroy();
        redirect(base_url('index.php/Login'));

    }





}