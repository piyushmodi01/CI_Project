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

}