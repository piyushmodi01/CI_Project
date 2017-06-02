<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('main_file.php');
	}


    public function authenticate()
    {
        $this->form_validation->set_rules('email','Email Address','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters("<p class=text-danger>","</p>");
        if($this->form_validation->run()==true){
            echo "fuck! You are Correct!";
        }
        else{

            $this->load->view('main_file.php');
        }

    }


}
