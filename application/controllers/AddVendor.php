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
            $vendorData = $this->input->post();
            if(!isset($vendorData['type']))
                return redirect('addVendor');

            unset($vendorData['btnSubmit']);
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


        } else
            redirect(base_url());


    }

}


?>