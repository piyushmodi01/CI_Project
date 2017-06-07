<?php

    class AddVendor extends MY_Controller{

        public function index(){

            $this->load->view('user/add_vendor.php');
        }


        public function saveVendor(){

            print_r($this->input->post());

        }
    }


?>