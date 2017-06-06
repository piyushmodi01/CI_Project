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