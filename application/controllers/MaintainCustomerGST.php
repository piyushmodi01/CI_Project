<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/5/2017
 * Time: 5:55 PM
 */


class MaintainCustomerGST extends MY_Controller{

    public function index(){

        if($this->authorizeOnly(['user'])){

            $customerData['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('user/maintain_customer_GST',$customerData);

        }
        else{
            redirect('Login');
        }

    }


//    function for saving GST Data into database
    public function saveCustomerGST()
    {


        $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");
        if ($this->form_validation->run('saveCustomerGST') == true) {


            //saving Record Here
            $newGSTNData = $this->input->post();
            unset($newGSTNData['btnSaveRecord']);

            //checking if record for particular state is already present or not
            $allGSTRecordsofCustomer = $this->Dbmodel->getCustomerGSTArray($newGSTNData['c_id']);

            $isRecordThere = false;

            foreach ($allGSTRecordsofCustomer as $record) {
                if ($record['state'] == $newGSTNData['state'])
                    $isRecordThere = true;
            }

            if ($isRecordThere == false) {
                $this->Dbmodel->addCustomerGST($newGSTNData);
                $this->session->set_flashdata('save', 'Your Record has been Saved Successfully.');

            } else {
                $this->session->set_flashdata('warning', 'Entry for this State is already there for this Customer.');
            }

            //-------------

            return redirect('MaintainCustomerGST');


        } else {
            $this->session->set_flashdata('warning', 'Please check the fields.');
            $customerData['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('user/maintain_customer_GST.php', $customerData);
        }


    }


//    Function to get the data from thetable and show it in the tables
    public function getDataInAjax($c_id)
    {

        if ($this->authorizeOnly(['user'])) {

            $data['details'] = $this->Dbmodel->getCustomerGSTArray($c_id);
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($data));

        } else {
            redirect('Login');
        }


    }

}