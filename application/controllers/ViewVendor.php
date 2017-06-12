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

            $data['approvedCount']=$this->Dbmodel->getApprovedVendorCount();
            $data['disapprovedCount']=$this->Dbmodel->getDisApprovedVendorCount();

            $data['vendorData']=$this->Dbmodel->getVendorArray(-1);

            $this->load->view('admin/view_approve_vendor',$data);

        } else {
            redirect('Login');
        }
    }


    public function changeVendorStatus($v_id){
        $data=$this->Dbmodel->getVendorDetails($v_id);
        if($data->status=='approved')
            $this->Dbmodel->setVendorDisapproved($v_id);
        else if($data->status=='disapproved')
            $this->Dbmodel->setVendorApproved($v_id);
    }


}





?>