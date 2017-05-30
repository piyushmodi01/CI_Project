<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Dbmodel extends CI_Model{
        
        
        //AUTHENTICATION METHODS------------------------------------------------
        
         //Authenticate User and return 0 or 1.
        public function authenticate($email, $pwd){
            
            $this->load->database();
            $q=$this->db->select('password')->from('user_login')->where('email',$email);
            $result=$q->get()->result_array();
            
            if(empty($result)){
                return 0;
            }
            
            else if($result[0]['password']==md5($pwd)){
                return 1;
            }
            else{
              return 0;
            }
            
        }
        
        //Checks EMAIL and return the role of the user.
        public function getRole($email){
            $this->load->database();
            $result=$this->db->select('role')->from('user_login')->where('email',$email)->get()->result_array();
            return($result[0]['role']);
        
        }
     
        //-----------------------------------------------------------------------    
            
        
        
   
        //CUSTOMER METHODS-------------------------------------------------------
        
        //Adds the customer to the database
        public function addCustomer($resultArray){
           
            if(! $this->db->insert("customer_details",$resultArray)){
                return 0;
            }
            else {
                return 1;
            }
        }
        
        //returns the array with customer details
        public function getCustomer($c_id){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('customer_details')->get()->result_array();
                    return($result);
                    
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_details')->where('c_id',$c_id)->get()->result_array();
                    return($result);
                    
                
                }
            
        
        }
    
        //returns the object with customer details
        public function getCustomerObject($c_id){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('customer_details')->get()->result();
                    return($result);
                        
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_details')->where('c_id',$c_id)->get()->result();
                    return($result);
                    
                
                }
            
        
        }
        
        //Return Last Array of Customer Table
        public function getLastCustomer(){
          $this->load->database();

          //Getting Maximum CID from Database
          $maxID=$this->db->query('Select Max(c_id) as max from customer_details;')->result_array();
          
          //Fetching All the details of Maximum CID
          $lastRecordArray=$this->db->select("*")->from('customer_details')->where('c_id',$maxID[0]['max'])->get()->result_array();


          return $lastRecordArray;

        }

        //Updates Customer Info
        public function updateCustomer($c_id, $newDataArray){

            $this->load->database();

            if($newDataArray['c_id']!=$c_id)
                $newDataArray['c_id']=$c_id;


            if(! $this->db->where("c_id",$c_id)->update("customer_details",$newDataArray)){
                return 0;
            }
            else{
             return 1;
            }


        }
        
        //delete Specific Customer Details
        public function deleteCustomer($c_id){
            $this->db->where('c_id', $c_id);
            if(! $this->db->delete('customer_details'))
                return 0;
            else
                return 1;
        }
        
        //-----------------------------------------------------------------------
        
    
        
  
        //USER METHODS-----------------------------------------------------------
        
        //Adds the customer to the database
        public function addUser($resultArray){
           
            //Convrting Plain Text Password to MD5
            $demoPass=md5($resultArray['password']);
            $resultArray['password']=$demoPass;
            
            if(! $this->db->insert("user_login",$resultArray)){
                return 0;
            }
            else {
                return 1;
            }
        }
        
        //returns the array with customer details
        public function getUser($id){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('user_login')->get()->result_array();
                    return($result);
                    
                }
                else{
                    
                    $result=$this->db->select('*')->from('user_login')->where('id',$id)->get()->result_array();
                    return($result);
                    
                
                }
            
        
        }
    
        //returns the object with customer details
        public function getUserObject($id){
                $this->load->database();
                if($id==-1){
                    
                    $result=$this->db->select('*')->from('user_login')->get()->result();
                    return($result);
                        
                }
                else{
                    
                    $result=$this->db->select('*')->from('user_login')->where('id',$id)->get()->result();
                    return($result);
                    
                
                }
            
        
        }
        
        //Return Last Array of Customer Table
        public function getLastUser(){
          $this->load->database();

          //Getting Maximum CID from Database
          $maxID=$this->db->query('Select Max(id) as max from user_login;')->result_array();
          
          //Fetching All the details of Maximum CID
          $lastRecordArray=$this->db->select("*")->from('user_login')->where('id',$maxID[0]['max'])->get()->result_array();


          return $lastRecordArray;

        }

        //Updates Customer Info
        public function updateUser($id, $newDataArray){

            $this->load->database();

            if($newDataArray['id']!=$id)
                $newDataArray['id']=$id;

            if(isset($newDataArray['password'])){
                
                $txtPass=$newDataArray['password'];
                $newDataArray['password']=md5($txtPass);
                
                
            }
            if(! $this->db->where("id",$id)->update("user_login",$newDataArray)){
                return 0;
            }
            else{
             return 1;
            }


        }
        
        //delete Specific Customer Details
        public function deleteUser($id){
            $this->db->where('id', $id);
            if(!$this->db->delete('user_login'))
                return 0;
            else
                return 1;
        }
        
        //-----------------------------------------------------------------------    
        
        
        
        
        //CUSTOMER PO METHODS-----------------------------------------------------------
    
                
        //Adds the customer to the database
        public function addCustomerPO($resultArray){
           
            //Convrting Plain Text Password to MD5
            
            if(! $this->db->insert("customer_po",$resultArray)){
                return 0;
            }
            else {
                return 1;
            }
        }
        
        //returns the array with customer details
        public function getCustomerPO($cpo_id){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('customer_po')->get()->result_array();
                    return($result);
                    
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_po')->where('cpo_id',$cpo_id)->get()->result_array();
                    return($result);
                    
                
                }
            
        
        }
    
        //returns the object with customer details
        public function getCustomerPOObject($cpo_id){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('customer_po')->get()->result();
                    return($result);
                        
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_po')->where('cpo_id',$cpo_id)->get()->result();
                    return($result);
                    
                
                }
            
        
        }
        
        //Return Last Array of Customer Table
        public function getLastCustomerPO(){
          $this->load->database();

          //Getting Maximum CID from Database
          $maxID=$this->db->query('Select Max(cpo_id) as max from customer_po;')->result_array();
          
          //Fetching All the details of Maximum CID
          $lastRecordArray=$this->db->select("*")->from('customer_po')->where('cpo_id',$maxID[0]['max'])->get()->result_array();


          return $lastRecordArray;

        }

        //Updates Customer Info
        public function updateCustomerPO($cpo_id, $newDataArray){

            $this->load->database();

            if($newDataArray['cpo_id']!=$cpo_id)
                $newDataArray['cpo_id']=$cpo_id;


            if(! $this->db->where("cpo_id",$cpo_id)->update("customer_po",$newDataArray)){
                return 0;
            }
            else{
             return 1;
            }


        }
        
        //delete Specific Customer Details
        public function deleteCustomerPO($cpo_id){
            $this->db->where('cpo_id', $cpo_id);
            
            if(!$this->db->delete('customer_po'))
                return 0;
            else
                return 1;
        }
        
        //----------------------------------------------------------------------- 
        
        
        
        //CUSTOMER INVOICE METHODS
                        
        //Adds the customer to the database
        public function addCustomerInvoice($resultArray){
           
            //Convrting Plain Text Password to MD5
            
            if(! $this->db->insert("customer_invoice",$resultArray)){
                return 0;
            }
            else {
                return 1;
            }
        }
        
        //returns the array with customer details
        public function getCustomerInvoice($bill_no){
                $this->load->database();
                if($c_id==-1){
                    
                    $result=$this->db->select('*')->from('customer_invoice')->get()->result_array();
                    return($result);
                    
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_invoice')->where('bill_no',$cpo_id)->get()->result_array();
                    return($result);
                    
                
                }
            
        
        }
    
        //returns the object with customer details
        public function getCustomerInvoiceObject($bill_no){
                $this->load->database();
                if($bill_no==-1){
                    
                    $result=$this->db->select('*')->from('customer_invoice')->get()->result();
                    return($result);
                        
                }
                else{
                    
                    $result=$this->db->select('*')->from('customer_invoice')->where('bill_no',$bill_no)->get()->result();
                    return($result);
                    
                
                }
            
        
        }
        
        //Updates Customer Info
        public function updateCustomerInvoice($bill_no, $newDataArray){

            $this->load->database();

            if($newDataArray['bill_no']!=$bill_no)
                $newDataArray['bill_no']=$bill_no;


            if(! $this->db->where("bill_no",$bill_no)->update("customer_invoice",$newDataArray)){
                return 0;
            }
            else{
             return 1;
            }


        }
        
        //delete Specific Customer Details
        public function deleteCustomerInvoice($bill_no){
            $this->db->where('bill_no', $bill_no);
            
            if(!$this->db->delete('customer_po'))
                return 0;
            else
                return 1;
        }
        
        //----------------------------------------------------------------------- 
        
        
        
        
        
    }//Model Closes here!
?>