<?php

/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/9/2017
 * Time: 12:31 PM
 */
class AddVendorPO extends MY_Controller
{

    public function index()
    {
        if ($this->authorizeOnly(['user'])) {

            $vendorData['data'] = $this->Dbmodel->getApprovedVendorObject(-1);
            $vendorData['customer'] = $this->Dbmodel->getCustomerObject(-1);

            $this->load->view('user/add_vendor_PO', $vendorData);

        } else
            return redirect('Login');
    }


    public function saveVendorPO()
    {
        if ($this->authorizeOnly(['user'])) {

            $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");
            if ($this->form_validation->run('addVendorPO') == true) {

                $this->session->set_flashdata('save', 'Your Record has been Saved Successfully.');


                //saving Record Here


                $newVendorData = $this->input->post();
                unset($newVendorData['btnSaveRecord']);
                unset($newVendorData['c_id']);

                print_r('$newVendorData');
                $this->Dbmodel->addVendorPO($newVendorData);


                //-------------


                return redirect('addVendorPO');

            } else {
                $this->session->set_flashdata('warning', 'Please check the fields.');

                $vendorData['data'] = $this->Dbmodel->getVendorObject(-1);
                $vendorData['customer'] = $this->Dbmodel->getCustomerObject(-1);

                $this->load->view('user/add_vendor_PO', $vendorData);

            }
        } else {
            return redirect('Login');
        }

    }


//    Function to get the data from thetable and show it in the tables
    public function getDataInAjax($c_id)
    {

        if ($this->authorizeOnly(['user'])) {


            $data = $this->Dbmodel->getCustomerPO($c_id);


            $table_result = '<div id=\'result_combobox\' style="\'color:black\'">
                            <select name=\'cpo_no\' id=\'cpo_no\' class=\'form-control\'>';
            $table_result .= '<option value=\'0\'>Please Select Customer PO</option>';
            if ($data != 0)
                foreach ($data as $k) {
                    $table_result .= '<option value=\'' . $k->cpo_no . '\'>' . $k->cpo_no . '  ->  RS. ' . $k->amount . '</option>';
                }
            $table_result .= '</select>';
            echo json_encode($table_result);


        } else {
            return redirect('Login');
        }

    }


}