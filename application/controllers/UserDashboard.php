<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    public function index()
    {

        if($role=$this->session->userdata('role')){
            if($role=='admin'){
                return redirect('adminDashboard');
            }
            else if($role=='user') {

                $this->load->view('user/userDashboard');
            }

        }
        else{
            return redirect('login');
        }




    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect(base_url());

    }

}