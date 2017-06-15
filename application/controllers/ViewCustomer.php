<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/14/2017
 * Time: 3:22 PM
 */

    class ViewCustomer extends MY_Controller{
        public function index(){
            if($this->authorizeOnly(['admin'])) {

                $customerData['data']=$this->Dbmodel->getCustomerObject(-1);
                $this->load->view('admin/view_complete_customer',$customerData);
            }
            else
                redirect('Login');
        }


        public function deleteCustomer($c_id){

                if($this->authorizeOnly(['admin'])) {

                    $this->Dbmodel->deleteCustomer($c_id);
                    $this->session->set_flashdata('info', 'Record has been successfully Deleted.');
                    redirect('viewCustomer');

                }
                else
                    redirect('Login');
            }



            public function getCustomerDataAjax($c_id){

                $CustomerData=$this->Dbmodel->getCustomerObject($c_id);

                $outputForm="
                            <div class='customerData'>
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='name'>Name</label>
                                    <div class='col-lg-5'>
                                        <label class='form-control input-md'>".$CustomerData[0]->name."</label>
                                    </div>
                                </div>
                        
                                <!-- Textarea -->
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='address'>Address</label>
                                    <div class='col-lg-5'>
                                        <label class='form-control input-md'>".$CustomerData[0]->address."</label>
                                    </div>
                        
                                </div>
                        
                                <!-- Text input-->
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='email'>Email</label>
                                    <div class='col-lg-5'>
                                        <label class='form-control input-md'>".$CustomerData[0]->email."</label>
                                    </div>
                                 </div>
                        
                                <!-- Text input-->
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='pan_no'>Pan Number</label>
                                    <div class='col-lg-5'>
                                        <label class='form-control input-md'>".$CustomerData[0]->pan_no."</label>
                                    </div>
                        
                                </div>
                        
                                <!-- File Button -->
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='pan_image'>PAN Card Image</label>
                                    <div class='col-lg-5'>";
                                        if($CustomerData[0]->pan_image=='assets/upload/')
                $outputForm.=   "<label class='form-control input-md'>Image not Available</label>";
                                        else
                $outputForm.=   "<img src='".base_url($CustomerData[0]->pan_image)."' height='50%' width='50%'>";

                 $outputForm.="                       
                                    </div>
                        
                                </div>
                        
                              
                              
                              
                           <div class='form-group'>
                                    <label class='col-md-2 control-label' for='logo'>Logo Image</label>
                                    <div class='col-lg-5'>";
                                        if($CustomerData[0]->logo=='assets/upload/')
                $outputForm.=   "<label class='form-control input-md'>Image not Available</label>";
                                        else
                $outputForm.=   "<img src=".base_url($CustomerData[0]->logo)."' height='50%' width='50%'>";

                 $outputForm.="                       
                                    </div>
                        
                                </div>
                        
                              
                                                          
                        
                        
                                <!-- Button (Double) -->
                                <div class='form-group'>
                                    <label class='col-md-2 control-label' for='btnSubmit'></label>
                                    <div class='col-md-8'>
                                     <a class='btn btn-danger' href='viewCustomer/deleteCustomer/".$c_id."'>Delete</a>
                                        <a class='btn btn-default' href='adminDashboard'>Close</a>
                                    </div>
                                </div>
                        
                        

                
                
                ";


                 echo json_encode($outputForm);

            }

    }

?>



