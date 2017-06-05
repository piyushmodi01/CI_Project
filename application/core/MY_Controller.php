<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/2/2017
 * Time: 4:22 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    //This function will return TRUE if the ROLE of the user matches to the any of the role passed in an array to the function
    public function authorizeOnly($allowedRolesArray)
    {
        $data = $this->session->get_userdata();
        $isAllowed = false;
        foreach ($allowedRolesArray as $role) {
            if ($data['role'] == $role)
                $isAllowed = true;
        }
        return $isAllowed;

    }
}

?>