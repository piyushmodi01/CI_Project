<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCustomer extends MY_Controller{

    public function index()
    {
            if ($this->authorizeOnly(['user']))  //Add Roles if want to allow any other person
                    $this->load->view('user/add_customer');
        else
            return redirect('Login');
    }


    public function saveCustomer(){

        $this->form_validation->set_error_delimiters("<p class=text-danger>","</p>");
        if ($this->form_validation->run('addCustomer') == true) {

             $this->session->set_flashdata('save','Your Record has been Saved Successfully.');


            //saving Record Here
             $config = array(
           'upload_path' => "./assets/upload",
           'allowed_types' => "gif|jpg|png|jpeg",
           'overwrite' => False,
           'encrypt_name'=> TRUE,
            );

            $this->load->library('upload',$config);
            $logo=$this->upload->do_upload('logo');

             $uploadData = $this->upload->data('file_name');
              $picture="assets/upload/".$uploadData;

            $logo = array('logo' => $picture);

            $pan_image=$this->upload->do_upload('pan_image');
            $uploadData1 = $this->upload->data('file_name');
             $picture1="assets/upload/".$uploadData1;
            $pan_image = array('pan_image' => $picture1);

            


                $newCustomerData=$this->input->post();

                unset($newCustomerData['btnSaveRecord']);
                $newCustomerData['logo']=$logo['logo'];
                $newCustomerData['pan_image']=$pan_image['pan_image'];

                $lastRec=$this->Dbmodel->getLastCustomer();
                if(isset($lastRec['c_id'])){
                    $id=$lastRec['c_id'];
                    $userRecord['c_id']=$id+1;
                }

                $this->Dbmodel->addCustomer($newCustomerData);


            //-------------




           return redirect('addCustomer');

        }

        else{
            $this->session->set_flashdata('warning','Please check the fields.');
            $this->load->view('user/add_customer.php');
        }
    }

}

?>