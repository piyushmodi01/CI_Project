<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller{
  
 
	 public function index()
    {       
						$this->load->view('add_customer.html');
            
    }
    


    public function add_customer()
    {
      //$t=time();
           $config = array(
           'upload_path' => "./assets/upload/",
           'allowed_types' => "gif|jpg|png|jpeg",
           'overwrite' => TRUE,
            );
           //print_r($config);

            $this->load->library('upload',$config);
            $logo=$this->upload->do_upload('logo');
            
            $uploadData = $this->upload->data('file_name');
            
            $picture="assets/upload/".$uploadData;
            $logo = array('logo' => $picture);

            $customer_data = $this->input->post();
            unset($customer_data['btn_submit']);

            $customer_data['logo']=$logo['logo'];

            $lastRecordArray=$this->Dbmodel->getLastCustomer();

            if(isset($lastRecordArray[0]))
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


    public function update_delete(){
       $customer_data = $this->input->post();
       
        $btnAction=$customer_data['btnAction'];
         $logo_url=$customer_data['logo'];
        

              unset($customer_data['btnAction']);
              unset($customer_data['Combobox1']);
               unset($customer_data['logo']);
              
      if ($btnAction == "Update") {

           $config = array(
           'upload_path' => "./assets/upload/",
           'allowed_types' => "gif|jpg|png|jpeg",
           'overwrite' => TRUE,
            );

            $this->load->library('upload',$config);
            $logo=$this->upload->do_upload('logo');
            $uploadData = $this->upload->data('file_name');
            //$t=time();
            //$picture="assets/upload/".$t.$uploadData;
            //$logo = array('logo' => $picture);
            
            

          if(strlen($uploadData) == 0)
                        {
                          //echo "No New Upload";
                          $picture=$logo_url;
                          $logo = array('logo' => $picture);
                        }
                        else    
                        {
                          //echo "New Upload";
                              //unlink($logo_url);
                                $picture = "assests/uploads/".$uploadData;
                                $logo = array('logo' => $picture);
                        }
                        $customer_data=array_merge($customer_data,$logo);
           
            
            $txtId=$customer_data['c_id'];
          $result_update=$this->Dbmodel->updateCustomer($txtId,$customer_data);
           if ($result_update == 1) 
          {
              echo "<script>alert('Success!')</script>";
             

            }
            else{
              echo "<script>alert('Failed!')</script>";
             
            }
            redirect("../Customer/update_customer","refresh");
        
      }

      elseif($btnAction=="Delete")
      {
           $txtId=$customer_data['c_id'];
          $result_del=$this->Dbmodel->deleteCustomer($txtId);
          if ($result_del == 1) 
          {
              echo "<script>alert('Success!')</script>";
             

            }
            else{
              echo "<script>alert('Failed!')</script>";
             
            }
            redirect("../Customer/update_customer","refresh");
      }

        //echo "<pre>";
        //print_r($customer_data);
    }

}