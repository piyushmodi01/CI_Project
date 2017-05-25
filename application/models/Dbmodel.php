<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    class Dbmodel extends CI_Model{
        
        
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
    
    }
?>