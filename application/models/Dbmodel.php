<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/2/2017
 * Time: 4:55 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');


class Dbmodel extends CI_Model
{


    //AUTHENTICATION METHODS------------------------------------------------

    //Authenticate User and return 0 or 1.
    public function authenticate($email, $pwd)
    {

        $this->load->database();
        $q = $this->db->select('password')->from('user_login')->where('email', $email);
        $result = $q->get()->result_array();

        if (empty($result)) {
            return 0;
        } else if ($result[0]['password'] == md5($pwd)) {
            return 1;
        } else {
            return 0;
        }

    }

    //Checks EMAIL and return the role of the user.
    public function getRoleAndName($email)
    {
        $this->load->database();
        $result = $this->db->select('role,name')->from('user_login')->where('email', $email)->get()->result_array();
        $returnVal = array('role' => $result[0]['role'], 'name' => $result[0]['name']);
        return ($returnVal);

    }

        //-----------------------------------------------------------------------




    //CUSTOMER METHODS-------------------------------------------------------

    //Adds the customer to the database
    public function addCustomer($resultArray){

        if(! $this->db->insert("customer_details",$resultArray)){
            return 0;
        }
        else {
            return 1;
        }
    }

    //returns the array with customer details
    public function getCustomer($c_id){
        $this->load->database();
        if($c_id==-1){

            $result=$this->db->select('*')->from('customer_details')->get()->result_array();
            return($result);

        }
        else{

            $result=$this->db->select('*')->from('customer_details')->where('c_id',$c_id)->get()->result_array();
            return($result);


        }


    }

    //returns the object with customer details
    public function getCustomerObject($c_id){
        $this->load->database();
        if($c_id==-1){

            $result=$this->db->select('*')->from('customer_details')->get()->result();
            return($result);

        }
        else{

            $result=$this->db->select('*')->from('customer_details')->where('c_id',$c_id)->get()->result();
            return($result);


        }


    }

    //Return Last Array of Customer Table
    public function getLastCustomer(){
        $this->load->database();

        //Getting Maximum CID from Database
        $maxID=$this->db->query('Select Max(c_id) as max from customer_details;')->result_array();

        //Fetching All the details of Maximum CID
        $lastRecordArray=$this->db->select("*")->from('customer_details')->where('c_id',$maxID[0]['max'])->get()->result_array();


        return $lastRecordArray;

    }

    //Updates Customer Info
    public function updateCustomer($c_id, $newDataArray){

        $this->load->database();

        if($newDataArray['c_id']!=$c_id)
            $newDataArray['c_id']=$c_id;


        if(! $this->db->where("c_id",$c_id)->update("customer_details",$newDataArray)){
            return 0;
        }
        else{
            return 1;
        }


    }

    //delete Specific Customer Details
    public function deleteCustomer($c_id){
        $this->db->where('c_id', $c_id);
        if(! $this->db->delete('customer_details'))
            return 0;
        else
            return 1;
    }
//-----------------------------------------------------------------------


    //CUSTOMER PO METHODS-----------------------------------------------------------


    //Adds the customer to the database
    public function addCustomerPO($dataArray)
    {

        //Convrting Plain Text Password to MD5

        if (!$this->db->insert("customer_po", $resultArray)) {
            return 0;
        } else {
            return 1;
        }
    }

    //-----------------------------------------------------------------------


    //CUSTOMER GST NUMBER METHODS----------------------------------------------------------------

    public function addCustomerGST($dataArray)
    {
        if (!$this->db->insert('customer_gstn', $dataArray))
            return 0;
        else
            return 1;

    }

    public function getCustomerGSTObject($customerID)
    {

        return $resultArray = $this->db->select("*")->from('customer_gstn')->where('c_id', $customerID)->get()->result();


    }

    public function getCustomerGSTArray($customerID)
    {

        return $resultArray = $this->db->select("*")->from('customer_gstn')->where('c_id', $customerID)->get()->result_array();


    }

    //---------------------------------------------------------------------------







}//Model Closes here!
?>