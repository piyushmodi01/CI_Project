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

    ),


    'addCustomerPO' => array(

        array('field' => 'cpo_no',
            'label' => 'Purchase Order Number',
            'rules' => 'trim|required|alpha_numeric'
        ),


        array('field' => 'amount',
            'label' => 'Amount',
            'rules' => 'required|is_natural_no_zero'
        ),

        array('field' => 'date',
            'label' => 'Date',
            'rules' => 'required'
        )

    ),


    'saveCustomerGST' => array(

        array('field' => 'c_id',
            'label' => 'Customer ID',
            'rules' => 'is_natural_no_zero|required'
        ),

        array('field' => 'gstn_no',
            'label' => 'GST Number',
            'rules' => 'alpha_numeric|required|is_unique[customer_gstn.gstn_no]'
        ),

        array('field' => 'state',
            'label' => 'State',
            'rules' => 'required'
        )

    ),




    'addVendorBasic' => array(

        array('field' => 'name',
            'label' => 'Vendor Name',
            'rules' => 'required|alpha_numeric_spaces'
        ),

        array('field' => 'contact_person',
            'label' => 'Contact Person',
            'rules' => 'required|alpha_numeric_spaces'
        ),

        array('field' => 'address',
            'label' => 'Address',
            'rules' => 'required|min_length[20]'
        ),

        array('field' => 'country',
            'label' => 'Country',
            'rules' => 'required'
        ),

        array('field' => 'landline_no',
            'label' => 'Landline Number',
            'rules' => 'min_length[10]'
        ),

        array('field' => 'mobile_no',
            'label' => 'Mobile Number',
            'rules' => 'required|min_length[10]'
        ),

        array('field' => 'fax_no',
            'label' => 'Fax Number',
            'rules' => 'min_length[10]'
        ),

        array('field' => 'email',
            'label' => 'Email Address',
            'rules' => 'valid_email'
        )

    ),


    'addVendorFull' => array(

        array('field' => 'name',
            'label' => 'Vendor Name',
            'rules' => 'required|alpha_numeric_spaces'
        ),

        array('field' => 'contact_person',
            'label' => 'Contact Person',
            'rules' => 'required|alpha_numeric_spaces'
        ),

        array('field' => 'address',
            'label' => 'Address',
            'rules' => 'required|min_length[20]'
        ),

        array('field' => 'country',
            'label' => 'Country',
            'rules' => 'required'
        ),

        array('field' => 'landline_no',
            'label' => 'Landline Number',
            'rules' => 'min_length[10]'
        ),

        array('field' => 'mobile_no',
            'label' => 'Mobile Number',
            'rules' => 'required|min_length[10]'
        ),

        array('field' => 'fax_no',
            'label' => 'Fax Number',
            'rules' => 'min_length[10]'
        ),

        array('field' => 'email',
            'label' => 'Email Address',
            'rules' => 'valid_email'
        ),


        array('field' => 'tan_no',
            'label' => 'Customer ID',
            'rules' => 'is_natural_no_zero'
        ),

        array('field' => 'pan_no',
            'label' => 'PAN Number',
            'rules' => 'alpha_numeric|required'
        ),

        array('field' => 'company_reg_no',
            'label' => 'Company\'s Registration Number',
            'rules' => 'alpha_numeric'
        ),

        array('field' => 'prov_fund_no',
            'label' => 'Provident Fund Number',
            'rules' => 'min_length[5]'
        ),

        array('field' => 'invoice_currency',
            'label' => 'Invoice Currency',
            'rules' => 'required'
        ),

        array('field' => 'bank_name',
            'label' => 'Bank Name',
            'rules' => 'required|alpha_numeric_spaces'
        ),

        array('field' => 'bank_address',
            'label' => 'required',
            'rules' => 'required|min_length[20]'
        ),

        array('field' => 'branch_no',
            'label' => 'Branch Number',
            'rules' => 'alpha_numeric'
        ),

        array('field' => 'account_no',
            'label' => 'Account Number',
            'rules' => 'trim|alpha_numeric_spaces|required'
        ),

        array('field' => 'ifsc_code',
            'label' => 'IFS Code',
            'rules' => 'required|trim|alpha_numeric'
        ),

        array('field' => 'swift_no',
            'label' => 'Swift Number',
            'rules' => 'trim|alpha_numeric'
        ),

        array('field' => 'iban_no',
            'label' => 'IBA Number',
            'rules' => 'trim|alpha_numeric'
        ),


    )






);


?>