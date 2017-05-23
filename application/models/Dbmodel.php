<?php

    class Dbmodel extends CI_Model{
        
        public function __construct(){
        
            parent::__construct();
            
        }
        
        
        
        
        //Authenticate User and return 0 or 1.
        
        
        public function authenticate($email, $pwd){
            $this->load->database();
            
            $this->db->select('password')->from('user_login')->where('email',$email);
            $result=$this->db->get()->result();
            
            if($result[0]->password==md5($pwd))
                return 1;
            
            else
                return 0;
            
            
        }
        
        //Checks EMAIL and return the role of the user.
        
        
        public function getRole($email){
            $this->load->database();
            $this->db->select('role')->from('user_login')->where('email',$email);
            $result=$this->db->get()->result();
            return($result[0]->role);
        
        }
    
    }
?>