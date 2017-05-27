<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerPO extends MY_Controller{
  
 
	 public function index()
    {   
        
         $customerData['data']=$this->Dbmodel->getCustomerObject(-1);
         
         $this->load->view('add_customer_PO.html',$customerData);
            
    }
    
    public function addCustomerPO()
    {
        
        $customerPO_data=$this->input->post();
        
        $lastRecordArray=$this->Dbmodel->getLastCustomerPO();


            if(isset($lastRecordArray[0]))
            $customerPO_data['cpo_id']=$lastRecordArray[0]['cpo_id']+1;

            
            if ($this->Dbmodel->addCustomerPO($customerPO_data)==1) {
              echo "<script>alert('Success!')</script>";
              redirect("../CustomerPO","refresh");
                }   
        
    
    }
    
    
    public function UpdateCustomerPO(){
        
        
        $customerData['data']=$this->Dbmodel->getCustomerObject(-1);
        
        
        $this->load->view('update_customer_PO.html',$customerData);
        
        
    }
    
}
?>