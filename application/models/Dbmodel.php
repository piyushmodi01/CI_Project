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
    //AUTHENTICATION METHODS--------------------------------------------------
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
    //--------------------------------------------------------------------


    //CUSTOMER METHODS--------------------------------------------------------
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
//---------------------------------------------------------------------------


    //CUSTOMER PO METHODS----------------------------------------------------
    //Adds the customer to the database
    public function addCustomerPO($dataArray)
    {
        //Convrting Plain Text Password to MD5
        if (!$this->db->insert("customer_po", $dataArray)) {
            return 0;
        } else {
            return 1;
        }
    }

    public function getCustomerPO($c_id)
    {
        if (!$data = $this->db->select("*")->from('customer_PO')->where('c_id', $c_id)->get()->result())
            return 0;
        else
            return $data;

    }

    public function deleteCustomerPO($cpo_no){
        $this->db->where('cpo_no',$cpo_no);
        $this->db->delete('customer_po');
    }
    //-----------------------------------------------------------------------


    //CUSTOMER GST NUMBER METHODS--------------------------------------------
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
    public function deleteCustomerGSTN($gst_no){

        $this->db->where('gstn_no',$gst_no);

        if(!$this->db->delete('customer_gstn'))
            return 0;
        else
            return 1;
        

    }
    //------------------------------------------------------------------------


    //Vendor NUMBER METHODS---------------------------------------------------
    //Adds the VendorDirect to the database
    public function addVendorBasic($resultArray){
        if(! $this->db->insert("vendor_details",$resultArray)){
            return 0;
        }
        else {
            return 1;
        }
    }
    //Adds the 7090568907VendorIndirect to the database
    public function addVendorExtra($resultArray){
        if(! $this->db->insert("vendor_additional_details",$resultArray)){
            return 0;
        }
        else {
            return 1;
        }
    }
    //returns the array with customer details

    public function getVendorArray($v_id){
        $this->load->database();
        if($v_id==-1){
            $result=$this->db->select('*')->from('vendor_details')->get()->result_array();
            return($result);
        }
        else{
            $result=$this->db->select('*')->from('vendor_details')->where('v_id',$v_id)->get()->result_array();
            return($result);
        }
    }
    //returns the object with customer details
    public function getVendorObject($v_id){
        $this->load->database();
        if($v_id==-1){
            $result = $this->db->select('*')->from('vendor_details')->get()->result();
            return($result);
        }
        else{
            $result = $this->db->select('*')->from('vendor_details')->where('v_id', $v_id)->get()->result();
            return($result);
        }
    }
    //returns the object of approved Vendors

    public function getVendorExtrasArray($v_id){
        $this->load->database();
        if($v_id==-1){
            $result=$this->db->select('*')->from('vendor_additional_details')->get()->result_array();
            return($result);
        }
        else{
            $result=$this->db->select('*')->from('vendor_additional_details')->where('v_id',$v_id)->get()->result_array();
            return($result);
        }
    }
    //returns the object with customer details
    public function getVendorExtrasObject($v_id){
        $this->load->database();
        if($v_id==-1){
            $result = $this->db->select('*')->from('vendor_additional_details')->get()->result();
            return($result);
        }
        else{
            $result = $this->db->select('*')->from('vendor_additional_details')->where('v_id', $v_id)->get()->result();
            return($result);
        }
    }
    //returns the object of approved Vendors


    public function getApprovedVendorObject($v_id){
        if($v_id==-1){
            $result = $this->db->select('*')->from('vendor_details')->where('status','approved')->get()->result();
            return($result);
        }
        else{
            $result = $this->db->select('*')->from('vendor_details')->where(['v_id'=>$v_id,'status'=>'approved'])->get()->result();
            return($result);
        }
    }
    //Return Last Array of Customer Table
    public function getLastVendor(){
        //Getting Maximum CID from Database
        $maxID=$this->db->query('Select Max(v_id) as max from vendor_details;')->result_array();
        //Fetching All the details of Maximum CID
        $lastRecordArray=$this->db->select("*")->from('vendor_details')->where('v_id',$maxID[0]['max'])->get()->result_array();
        return $lastRecordArray;
    }
    //Updates Customer Info
    public function updateVendor($v_id, $newDataArray){
        $this->load->database();
        if($newDataArray['c_id']!=$v_id)
            $newDataArray['c_id']=$v_id;
        if(! $this->db->where("v_id",$v_id)->update("vendor_details",$newDataArray)){
            return 0;
        }
        else{
            return 1;
        }
    }
    //delete Specific Customer Details
    public function deleteVendor($v_id){
        $this->db->where('v_id', $v_id);
        if(! $this->db->delete('vendor_details'))
            return 0;
        else
            return 1;
    }
    //returns the count of approved Vendors
    public function getApprovedVendorCount(){
        $data= $this->db->select("count(*)")->from("vendor_details")->where("status","approved")->get()->result_array();
        return $data[0]["count(*)"];
    }
    //returns the count of approved Vendors
    public function getDisApprovedVendorCount(){
        $data = $this->db->select("count(*)")->from("vendor_details")->where("status","disapproved")->get()->result_array();
        return $data[0]["count(*)"];
    }
    //Sets Vendor Status ON (Approved)
    public function setVendorApproved($v_id){
        $this->db->where('v_id',$v_id);
        $this->db->update('vendor_details',['status'=>'approved']);
    }
    //Sets Vendor Status OFF (Disapproved)
    public function setVendorDisapproved($v_id){
        $this->db->where('v_id',$v_id);
        $this->db->update('vendor_details',['status'=>'disapproved']);
    }
    //------------------------------------------------------------------------


    //Vendor GST NUMBER METHODS---------------------------------------------
    public function addVendorGST($dataArray)
    {
        if (!$this->db->insert('vendor_gstn', $dataArray))
            return 0;
        else
            return 1;
    }

    public function getVendorGSTObject($vendorID)
    {
        return $resultArray = $this->db->select("*")->from('vendor_gstn')->where('v_id', $vendorID)->get()->result();
    }

    public function getVendorGSTArray($vendorID)
    {
        return $resultArray = $this->db->select("*")->from('customer_gstn')->where('c_id', $vendorID)->get()->result_array();
    }

    public function deleteVendorGSTN($gst_no)
    {

        $this->db->where('gstn_no', $gst_no);

        if (!$this->db->delete('vendor_gstn'))
            return 0;
        else
            return 1;


    }
    //-------------------------------------------------------------------------

//Vendor PO NUMBER METHODS---------------------------------------------
    public function addVendorPO($dataArray)
    {

        if (!$this->db->insert("vendor_po", $dataArray)) {
            return 0;
        } else {
            return 1;
        }
    }
    //-------------------------------------------------------------------------





}//Model Closes here!
?>