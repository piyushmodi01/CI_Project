<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller{
  
 
	 public function index()
    {       
						$this->load->view('add_customer.html');
            
    }
    


    public function add_customer()
    {
           $config = array(
           'upload_path' => "./assets/upload/",
           'allowed_types' => "gif|jpg|png|jpeg",
           'overwrite' => TRUE,
            );

            $this->load->library('upload',$config);
            $logo=$this->upload->do_upload('logo');
            $uploadData = $this->upload->data('file_name');
            $picture="assets/upload/".$uploadData;
            $logo = array('logo' => $picture);

            $customer_data = $this->input->post();
            unset($customer_data['btn_submit']);

            $customer_data['logo']=$logo['logo'];

            $lastRecordArray=$this->Dbmodel->getLastCustomer();


            $customer_data['c_id']=$lastRecordArray[0]['c_id']+1;


            $result=$this->Dbmodel->addCustomer($customer_data);
            
            if ($result == 1) {
              echo "<script>alert('Success!')</script>";
              redirect("../Customer","refresh");

            }
        

       else
          echo "<script>alert('Failed! Try Again.')</script>";


  }




    public function update_customer(){
        
        
            $allCustomerRecord['data']=$this->Dbmodel->getCustomerObject(-1);
        
            $this->load->view('update_customer.html',$allCustomerRecord);    
        
    }

    public function delete_customer(){
      $customer_data = $this->input->post();
          // $id = $this->uri->segment(3);
          // $this->Dbmodel->deleteCustomer($id);
          // self::view_emp();
    }

    public function test(){
       $customer_data = $this->input->post();
        $btnAction=$customer_data['btnAction'];

              unset($customer_data['btnAction']);
              unset($customer_data['Combobox1']);
              
      if ($btnAction == "Update") {
          
             print_r($customer_data);
          //$txtId=$customer_data['txtId'];
          //$this->Dbmodel->updateCustomer($customer_data);
        
      }

      elseif($btnAction=="Delete")
      {
           $txtId=$customer_data['txtId'];
          $result_del=$this->Dbmodel->deleteCustomer($txtId);
          if ($result_del == 1) 
          {
              echo "<script>alert('Success!')</script>";
              //redirect("../Customer","refresh");

            }
            else{
              echo "<script>alert('Failed!')</script>";
            }
      }

        //echo "<pre>";
        //print_r($customer_data);
    }

}