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





}//Model Closes here!
?>