<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends MY_Controller{

	 public function index()

    {

						$this->load->view('add_customer.html');
    }

public function add_customers()
{
			$config = array(
   'upload_path' => "./assets/upload/",
   'allowed_types' => "gif|jpg|png|jpeg|pdf",
   'overwrite' => TRUE,
   );
   
   	$this->load->library('upload',$config);
   	$logo=$this->upload->do_upload('logo');
    $uploadData = $this->upload->data('file_name');
    $picture="assets/upload/".$uploadData;
    $logo = array('logo' => $picture);
    //print_r($logo);

				$cus = $this->input->post();
												//print_r($customers);
        $customers=array_merge($cus,$logo);
        //print_r($customers);
          unset($customers['btn_submit']);
        $this->Dbmodel->addCustomer($customers);
    $data['msg'] = 'Customers Added!!!';
    $this->load->view('add_customers.html',$data);
					
		}

    public function get_customers(){

    }

	}