<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/15/2017
 * Time: 3:50 PM
 */



class ViewCustomerPO extends MY_Controller
{
    public function index()
    {
        if ($this->authorizeOnly(['admin'])) {
            $customer['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('admin/view_customer_PO', $customer);
        } else
            redirect('Login');
    }

    public function deleteCustomerPurchaseOrder($cpo_id){
        $this->Dbmodel->deleteCustomerPO($cpo_id);
        $this->session->set_flashdata('info', 'Purchase Order has been Deleted Successfully.');

        redirect('ViewCustomerPO');
    }

    public function getDataInAjax($c_id)
    {
        if ($this->authorizeOnly(['admin'])) {
            $data = $this->Dbmodel->getCustomerPO($c_id);

            $table_result = '           
            
            <div class=\'container\'><table class=\'table table-striped table-hover\'>
                         <thead>
                         <tr>
                            <th>#</th>
                            <th>PO Number</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Item Desc.</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>';


            if (count($data) > 0) {
                $count=1;
                foreach ($data as $dataa) {
                    $table_result.="<tr>
                                        <td>$count</td>
                                        <td>$dataa->cpo_no</td>
                                        <td>$dataa->amount</td>
                                        <td>$dataa->date</td> 
                                        <td>$dataa->item_desc</td>
                                        <td><a href='".base_url('index.php/')."ViewCustomerPO/deleteCustomerPurchaseOrder/".$dataa->cpo_no."'  class='btn btn-sm btn-danger'>Delete</a></td>
                    
                    ";
                    $count++;
                }
                $table_result .= '</tbody></table></div> ';

                echo json_encode($table_result);
            }

        } else
            redirect('Login');


    }

}

?>