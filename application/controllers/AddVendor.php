<?php

class AddVendor extends MY_Controller
{

    public function index()
    {
        if ($this->authorizeOnly(['user']))
            $this->load->view('user/add_vendor.php');
        else
            redirect(base_url());
    }


    public function saveVendor()
    {
        if ($this->authorizeOnly(['user'])) {



            $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");

             $config = array(
           'upload_path' => "./assets/upload",
           'allowed_types' => "gif|jpg|png|jpeg",
           'overwrite' => FALSE,
           'encrypt_name'=> TRUE,
               );

        // upload pan image in assests/upload(folder)
            $this->load->library('upload',$config);
            $pan_image=$this->upload->do_upload('pan_image');
             $upload_panimage = $this->upload->data('file_name');
              $picture_panimage="assets/upload/".$upload_panimage;
            $pan_image = array('pan_image' => $picture_panimage);

         // upload provident_funnd image in assests/upload(folder)

            $this->load->library('upload',$config);
            $pf_image=$this->upload->do_upload('pf_image');
             $upload_pf_image = $this->upload->data('file_name');
              $picture_pf_image="assets/upload/".$upload_pf_image;
            $pf_image = array('pf_image' => $picture_pf_image);

       // upload Esi document image in assests/upload(folder)

            $this->load->library('upload',$config);
            $esi_image=$this->upload->do_upload('esi_image');
             $upload_esi_image = $this->upload->data('file_name');
              $picture_esi_image="assets/upload/".$upload_esi_image;
            $esi_image = array('esi_image' => $picture_esi_image);

            // upload cancelled cheque image in assests/upload(folder)

            $this->load->library('upload',$config);
            $cheque_image=$this->upload->do_upload('cheque_image');
             $upload_cheque_image = $this->upload->data('file_name');
              $picture_cheque_image="assets/upload/".$upload_cheque_image;
            $cheque_image = array('cheque_image' => $picture_cheque_image);



            $vendorData = $this->input->post();
           
           print_r($vendorData);


            if(!isset($vendorData['type']))
                return redirect('addVendor');

            unset($vendorData['btnSubmit']);
             $vendorData['pan_image']=$pan_image['pan_image'];
             $vendorData['pf_image']=$pf_image['pf_image'];
             $vendorData['esi_image']=$esi_image['esi_image'];
             $vendorData['cheque_image']=$cheque_image['cheque_image'];
             
            $point = 0;

            $vendorBasic = array();
            $vendorExtra = array();

            //Splitting Data into Basic and Extra
            foreach ($vendorData as $key => $data) {

                if ($key == 'tan_no')
                    $point = 1;

                if ($point == 0)
                    $vendorBasic[$key] = $data;
                else
                    $vendorExtra[$key] = $data;

            }


            //  Fetching Last Vendor ID and appending to Data Arrays (for Relational Data)

            $lastRec = $this->Dbmodel->getLastVendor();

            if (isset($lastRec[0]['v_id'])) {
                $id = $lastRec[0]['v_id'];
                $vendorBasic['v_id'] = $id + 1;
                $vendorExtra['v_id'] = $id + 1;
            } else {
                $vendorBasic['v_id'] = 1;
                $vendorExtra['v_id'] = 1;
            }

            //  Vendor ID Fixed!


            $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");

             print_r($vendorData);
            if ($vendorData['type'] == 'direct') {

                //Validating Complete Data
                if ($this->form_validation->run('addVendorFull') == true) {
                    //Direct Vendor All Data is Correct
                    $this->Dbmodel->addVendorBasic($vendorBasic);
                    $this->Dbmodel->addVendorExtra($vendorExtra);

                    $this->session->set_flashdata('save', 'Record for Direct Vendor Saved Successfully!');
                    redirect('addVendor');
                } else {

                    $this->session->set_flashdata('warning', 'Please Check the highlighted fields!');
                    $this->load->view('user/add_Vendor');
                }


            } else {

                if ($this->form_validation->run('addVendorBasic') == true) {
                    //Direct Vendor All Data is Correct
                    $this->Dbmodel->addVendorBasic($vendorBasic);
                    $this->session->set_flashdata('save', 'Record for Indirect Vendor Saved Successfully!');
                    redirect('addVendor');
                } else {

                    $this->session->set_flashdata('warning', 'Please Check the highlighted fields!');
                    $this->load->view('user/add_Vendor');
                }


            }


        } //else
        //     //redirect(base_url());


    }

}


?>