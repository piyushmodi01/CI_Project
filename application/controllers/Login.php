<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        $this->load->view('login.php');
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
                    redirect('AdminDashboard');


                } else if ($role == "user") {

                    $this->session->set_userdata($result);
                    redirect('UserDashboard');

                } else {

                    echo "Your account is not activated yet";
                }


            } else {

                $errMsg = "Wrong Credintials. Email or Password is wrong.";
                $this->load->view('login.php', $errMsg);
            }

        } else {

            $this->load->view('login.php');
        }

    }


}
