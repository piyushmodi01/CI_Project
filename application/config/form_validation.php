<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/2/2017
 * Time: 3:26 PM
 */

$config = array(

    'login' => array(

        array('field' => 'email',
            'label' => 'Email Address',
            'rules' => 'required|trim|valid_email'
        ),

        array('field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )

    ),



    'addCustomer' => array(

        array('field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|alpha_numeric_spaces'
        ),


        array('field' => 'address',
            'label' => 'Address',
             'rules' => 'trim'
         ),

         array('field' => 'email',
            'label' => 'Email',
            'rules' => 'valid_email'
         ),

        array('field' => 'pan_no',
            'label' => 'PAN Number',
            'rules' => 'required|exact_length[10]|alpha_numeric'
        )

    )



);


?>