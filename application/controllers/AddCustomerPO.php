<?php

/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/5/2017
 * Time: 11:40 AM
 */
class AddCustomerPO extends MY_Controller
{

    public function index()
    {
        if ($this->authorizeOnly(['user'])) {

            $customerData['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('user/add_customer_PO', $customerData);

        } else
            return redirect('Login');
    }


    public function saveCustomerPO()
    {

        $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");
        if ($this->form_validation->run('addCustomerPO') == true) {

            $this->session->set_flashdata('save', 'Your Record has been Saved Successfully.');


            //saving Record Here


            $newCustomerData = $this->input->post();
            unset($newCustomerData['btnSaveRecord']);

            $this->Dbmodel->addCustomerPO($newCustomerData);


            //-------------


            return redirect('addCustomerPO');

        } else {
            $this->session->set_flashdata('warning', 'Please check the fields.');
            $this->load->view('user/add_customer_PO.php');
        }
    }

}

?>