<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller{
  
 
	 public function index()
    {       
							$this->load->view('add_user.html');
            
    }
    


     public function add_user()
    {
      					
            $user_data = $this->input->post();
          		unset($user_data['cpassword']);
          		unset($user_data['btnAction']);

            $lastRecordArray=$this->Dbmodel->getLastUser();


            $customer_data['c_id']=$lastRecordArray[0]['c_id']+1;


            $result=$this->Dbmodel->addUser($user_data);
            
            if ($result == 1) {
              echo "<script>alert('Success!')</script>";
              redirect("../Customer","refresh");

            }
        

       else
          echo "<script>alert('Failed! Try Again.')</script>";


  }

  public function update_user(){
        
        
            $allUserRecord['data']=$this->Dbmodel->getUserObject(-1);
        
            $this->load->view('update_user.html',$allUserRecord);    
        
    }


    public function update_delete()
    {
       $user_data = $this->input->post();
      
       
      $btnAction=$user_data['btnAction'];
      $txtId=$user_data['id'];
       $password=$user_data['password'];
        if(strlen($password) == 0)
        {
        		unset($user_data['password']);
        }
        

              unset($user_data['btnAction']);
              unset($user_data['userList']);
               
              unset($user_data['txtCPassword']);
               //print_r($user_data);
      if ($btnAction == "Update") {

          $result_update=$this->Dbmodel->updateUser($txtId,$user_data);
           if ($result_update == 1) 
          {
              echo "<script>alert('Success!')</script>";
             

            }
            else{
              echo "<script>alert('Failed!')</script>";
             
            }
            redirect("../User/update_user","refresh");
        
      }

      elseif($btnAction=="Delete")
      {
           $txtId=$user_data['id'];
          $result_del=$this->Dbmodel->deleteUser($txtId);
          if ($result_del == 1) 
          {
              echo "<script>alert('Success!')</script>";
             

            }
            else{
              echo "<script>alert('Failed!')</script>";
             
            }
            redirect("../User/update_user","refresh");
      }

      
    }


}