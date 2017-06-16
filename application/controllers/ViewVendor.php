<?php

/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/12/2017
 * Time: 12:53 PM
 */
class ViewVendor extends MY_Controller
{

    public function index()
    {
        if ($this->authorizeOnly(['admin'])) {

            $data['approvedCount'] = $this->Dbmodel->getApprovedVendorCount();
            $data['disapprovedCount'] = $this->Dbmodel->getDisApprovedVendorCount();

            $data['vendorData'] = $this->Dbmodel->getVendorArray(-1);

            $this->load->view('admin/view_approve_vendor', $data);

        } else {
            redirect('Login');
        }
    }


    public function changeVendorStatus($v_id)
    {
        if ($this->authorizeOnly(['admin'])) {
            $data = $this->Dbmodel->getVendorObject($v_id);
            if ($data[0]->status == 'approved')
                $this->Dbmodel->setVendorDisapproved($v_id);
            else if ($data[0]->status == 'disapproved')
                $this->Dbmodel->setVendorApproved($v_id);
        } else {
            return redirect('Login');
        }

    }

    public function viewCompleteDetails($v_id)
    {
        if ($this->authorizeOnly(['admin'])) {
            $vendorData['basic'] = $this->Dbmodel->getVendorObject($v_id);
            if ($vendorData['basic'][0]->type == 'direct')
                $vendorData['extra'] = $this->Dbmodel->getVendorExtrasObject($v_id);

            $this->load->view('admin/view_complete_vendor', $vendorData);
        } else {
            return redirect('Login');
        }

    }


    public function deleteVendor($v_id)
    {

        if ($this->authorizeOnly(['admin'])) {
            $this->Dbmodel->deleteVendor($v_id);
            $this->session->set_flashdata('info', 'Record has been successfully Deleted.');
            redirect('viewVendor');
        } else {
            return redirect('Login');
        }
    }
}


?>