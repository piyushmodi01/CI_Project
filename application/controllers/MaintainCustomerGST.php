<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/5/2017
 * Time: 5:55 PM
 */


class MaintainCustomerGST extends MY_Controller{

    public function index(){

        if($this->authorizeOnly(['user'])){

            $customerData['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('user/maintain_customer_GST',$customerData);

        }
        else{
            redirect('Login');
        }

    }


//    function for saving GST Data into database
    public function saveCustomerGST()
    {


        $this->form_validation->set_error_delimiters("<p class=text-danger>", "</p>");
        if ($this->form_validation->run('saveCustomerGST') == true) {


            //saving Record Here
            $newGSTNData = $this->input->post();
            unset($newGSTNData['btnSaveRecord']);

            //checking if record for particular state is already present or not
            $allGSTRecordsofCustomer = $this->Dbmodel->getCustomerGSTArray($newGSTNData['c_id']);

            $isRecordThere = false;

            foreach ($allGSTRecordsofCustomer as $record) {
                if ($record['state'] == $newGSTNData['state'])
                    $isRecordThere = true;
            }

            if ($isRecordThere == false) {
                $this->Dbmodel->addCustomerGST($newGSTNData);
                $this->session->set_flashdata('save', 'Your Record has been Saved Successfully.');

            } else {
                $this->session->set_flashdata('warning', 'Entry for this State is already there for this Customer.');
            }

            //-------------

            return redirect('MaintainCustomerGST');


        } else {
            $this->session->set_flashdata('warning', 'Please check the fields.');
            $customerData['data'] = $this->Dbmodel->getCustomerObject(-1);
            $this->load->view('user/maintain_customer_GST.php', $customerData);
        }


    }


//    Function to get the data from thetable and show it in the tables
    public function getDataInAjax($c_id)
    {

        if ($this->authorizeOnly(['user'])) {

            $data= $this->Dbmodel->getCustomerGSTObject($c_id);
             $sno=0;
             // print_r($data);
             // print_r($data[0]);
    $table_result='<div class=\'container\'><table class="table table-striped table-hover ">
                         <thead>
                         <tr>
                            <th>#</th>
                            <th>State</th>
                            <th>GST Number</th>
                            <th>Image Location</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>';



           if(count($data)>0){

          foreach ($data as $key => $data)
           {
             //$table_result .='<table="'.$data->c_id.'">'.$data->state.'</table>';
              $table_result .='
               <tr>
                   <td>'.++$sno.'</td>
                   <td>'.$data->state.'</td>
                   <td>'.$data->gstn_no.'</td>
                   <td>'.$data->gstn_image.'</td>
                   <td><a href=\'MaintainCustomerGST\deleteGST\\'.$data->gstn_no.'\' class=\'btn btn-sm btn-danger\' id=>DELETE</a></td>
               </tr>';
          }
          $table_result.='</tbody></table></div> ';

          echo json_encode( $table_result);
         }



            // $this->output->set_content_type('application/json');
            //$this->output->set_output(json_encode($data));
             //echo json_encode($data);

        } else {
            redirect('Login');
        }


    }


//    Function to delete specific GSTN from the table (passed by parameter)
    public function deleteGST($gst_no){

      $this->Dbmodel->deleteCustomerGSTN($gst_no);
      redirect('MaintainCustomerGST');


    }

}