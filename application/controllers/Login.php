<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{

    public function index()
    {
						$this->load->view('login.html');
    }

    public function do_login()
				{
		
	 					

  				if( element('btn_submit',$this->input->post()) != NULL)
							{	
												$users = $this->input->post();
												//print_r($users);
												echo $email=$users['email'];
												echo $password=$users['password'];
										$res =$this->Dbmodel->authenticate($email,$password);
										if($res==1){
											$role=$this->Dbmodel->getRole($email);	
											//$this->session->set_userdata('email', $users['user_email']);
											//redirect('Customer','referesh');
											
										}
										else{
												echo "WRONG CREDINTIALS";

										}
										

			// //echo $res;
			// if($res==-1){
			// 	//to do if user is invalid

			// }
			// else if($res==1){
			// 				$this->session->set_userdata('email', $users['user_email']);
			// 				redirect('Customer','referesh');
			// 		}

			// 	else {
			// 		//$this->session->set_userdata('email', $users['user_email']);
			// 				redirect('User_dashboard','referesh');
						
			// 	}

			
		 }
			
	
		
		}

		

		/*function do_logout()
		{
					$this->session->unset_userdata('email');
					self::index();
		}*/
    
}


?>