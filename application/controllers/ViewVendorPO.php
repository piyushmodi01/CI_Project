<?php

/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/15/2017
 * Time: 3:50 PM
 */
class ViewVendorPO extends MY_Controller
{
    public function index()
    {
        if ($this->authorizeOnly(['admin'])) {
            $vendor['data'] = $this->Dbmodel->getVendorObject(-1);
            $this->load->view('admin/view_Vendor_PO', $vendor);
        } else
            redirect('Login');
    }

    public function deleteVendorPurchaseOrder($vpo_id)
    {
        if ($this->authorizeOnly(['admin'])) {
            $this->Dbmodel->deleteVendorPO($vpo_id);
            $this->session->set_flashdata('info', 'Purchase Order has been Deleted Successfully.');

            redirect('ViewVendorPO');
        } else {
            return redirect('Login');
        }


    }

    public function getDataInAjax($c_id)
    {
        if ($this->authorizeOnly(['admin'])) {
            $data = $this->Dbmodel->getVendorPO($c_id);

            $table_result = '           
            
            <div class=\'container\'><table class=\'table table-striped table-hover\'>
                         <thead>
                         <tr>
                            <th>#</th>
                            <th>PO Number</th>
                            <th>Against</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Item Desc.</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>';


            if (count($data) > 0) {
                $count = 1;
                foreach ($data as $dataa) {
                    $table_result .= "<tr>
                                        <td>$count</td>
                                        <td>$dataa->vpo_no</td>
                                        <td>$dataa->cpo_no</td>
                                        <td>$dataa->amount</td>
                                        <td>$dataa->date</td> 
                                        <td>$dataa->item_desc</td>
                                        <td><a class='btn btn-sm btn-default' id='ChangeDate' name='$dataa->vpo_no' onclick='changeDateOf" . $dataa->vpo_no . "()'>Change Date</a><a href='" . base_url('index.php/') . "ViewVendorPO/deleteVendorPurchaseOrder/" . $dataa->vpo_no . "'  class='btn btn-sm btn-danger'>Delete</a></td>
                    
                    ";
                    $count++;

                }
                $table_result .= '</tbody></table></div> 
                
                   <script>

            ';

                //Adding Script to change Date of PO!
                foreach ($data as $dataa) {
                    $table_result .= "
                
                     
                                function changeDateOf" . $dataa->vpo_no . "(){
                                    var date=prompt('Please Enter the New Date (yyyy-mm-dd)','$dataa->date');
                                    if(date==\"\" || date===" . $dataa->date . " || date==null || date==0){}
                                    else{
                                        var url ='" . base_url('index.php/') . "ViewVendorPO/updatePODate/$dataa->vpo_no/'+date;
                                        window.location=url;
                                    }
                                    
                                }
                                    
                       
                      ";

                }

                $table_result .= " </script>";


                echo json_encode($table_result);
            }

        } else
            redirect('Login');


    }


    public function updatePODate($vpo_no, $newDate)
    {
        if ($this->authorizeOnly(['admin'])) {

            //Checking Date with REGULAR EXPRESSION
            if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $newDate)) {
                $this->Dbmodel->updateVendorPODate($vpo_no, $newDate);
                $this->session->set_flashdata('success', 'Date for the specific Vendor PO has been changed Successfully.');

            } else {
                $this->session->set_flashdata('error', 'Format for the Date is incorrect. Please Try Again.');
            }
            redirect('ViewVendorPO');


        } else
            redirect('Login');


    }


}

?>