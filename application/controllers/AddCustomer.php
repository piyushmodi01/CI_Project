<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCustomer extends MY_Controller{

    public function index()
    {
        if($this->session->has_userdata('role'))
            $this->load->view('user/add_customer');
        else
            return redirect('Login');
    }

    public function saveCustomer(){

        $this->form_validation->set_error_delimiters("<p class=text-danger>","</p>");
        if ($this->form_validation->run('addCustomer') == true) {

            $this->session->set_flashdata('save','Your Record has been Saved Successfully.');


            //saving Record Here


                $newCustomerData=$this->input->post();
                unset($newCustomerData['btnSaveRecord']);
                $lastRec=$this->Dbmodel->getLastCustomer();
                if(isset($lastRec['c_id'])){
                    $id=$lastRec['c_id'];
                    $userRecord['c_id']=$id+1;
                }

                $this->Dbmodel->addCustomer($newCustomerData);


            //-------------




           return redirect('addCustomer');

        }

        else{
            $this->session->set_flashdata('warning','Please check the fields.');
            $this->load->view('user/add_customer.php');
        }
    }

}

?>