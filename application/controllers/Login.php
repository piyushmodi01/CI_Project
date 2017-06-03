<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
	    if($role=$this->session->userdata('role')){
	            if($role=='admin'){
	                return redirect('adminDashboard');
	            }
	            else if($role=='user') {
                    return redirect('userDashboard');
                }

        }
        else{
            $this->load->view('login.php');
        }

	}


    public function authenticate()
    {

        $this->form_validation->set_error_delimiters("<p class=text-danger>","</p>");
        if ($this->form_validation->run('login') == true) {

            $email = $this->input->post('email');
            $pass = $this->input->post('password');

            if ($res = $this->Dbmodel->authenticate($email, $pass) == 1) {

                //checking the role of the user

                $result = $this->Dbmodel->getRoleAndName($email);
                $result['loggedIn'] = '1';
                $role = $result['role'];
                $name = $result['name'];


                if ($role == "admin") {

                    $this->session->set_userdata($result);
                   return  redirect('AdminDashboard');


                } else if ($role == "user") {

                    $this->session->set_userdata($result);
                   return  redirect('UserDashboard');

                } else {

                    echo "Your account is not activated yet";
                }


            } else {
                $this->session->set_flashdata('login_failed','Wrong Crediantials Entered. Please Try Again.');
                return redirect('login');

            }

        } else {

            $this->load->view('login.php');
        }

    }


}
