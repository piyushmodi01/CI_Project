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

    )


);


?>