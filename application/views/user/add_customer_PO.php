<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/5/2017
 * Time: 11:09 AM
 */

include('user_header.php');

?>

<!--Main Content of the File-->


<ul class="breadcrumb">
    <li><a href="userDashboard">Home</a></li>
    <li class="active">Add Customer Purchase Order</li>

</ul>

<div class="container ">
    <?php echo form_open('addCustomerPO/saveCustomerPO', ['class' => 'form-horizontal']); ?>

    <fieldset>

        <!-- Form Name -->
        <legend>Add Customer Purchase Order</legend>


        <!--        Message Display    -->

        <!--Message Printing after Successful Save-->
        <?php if ($msg = $this->session->flashdata('save')): ?>
            <div class="alert alert-dismissible alert-success">
                <strong>Woha!</strong> <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <!--Message Printing after Validation -->
        <?php if ($msg = $this->session->flashdata('warning')): ?>
            <div class="alert alert-dismissible alert-warning">
                <strong>Woha!</strong> <?php echo $msg; ?>
            </div>
        <?php endif; ?>


        <!--        Message Display Ends Here     -->


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="cpo_no">PO Number</label>
            <div class="col-md-5">

                <?php echo form_input(['id' => 'cpo_no', 'name' => 'cpo_no', 'placeholder' => 'Purchase Order Number', 'class' => 'form-control input-md', 'required' => '', 'type' => 'text', 'value' => set_value('cpo_no')]); ?>

            </div>

            <div class="col-lg-5">
                <?php echo form_error('cpo_no'); ?>
            </div>


        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Customer</label>
            <div class="col-md-5">


                <select id="c_id" name="c_id" class="form-control">
                    <option value="0">Please Select Customer</option>
                    <?php

                    foreach ($data as $record) {
                        echo "<option value='" . $record->c_id . "'>";
                        echo $record->c_id . " -> " . $record->name;
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>

            <div class="col-lg-5">
                <?php echo form_error('selectCustomer'); ?>
            </div>


        </div>

        <!-- Prepended text-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="amount">Amount</label>
            <div class="col-md-5">
                <div class="input-group">
                    <span class="input-group-addon"><b>₹</b></span>
                    <?php echo form_input(['id' => 'amount', 'name' => 'amount', 'placeholder' => 'Amount', 'class' => 'form-control input-md', 'required' => '', 'type' => 'text', 'value' => set_value('amount')]); ?>

                </div>

            </div>

            <div class="col-lg-5">
                <?php echo form_error('amount'); ?>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="item_desc">Item Description</label>
            <div class="col-md-5">
                <textarea class="form-control" id="item_desc" name="item_desc" , placeholder="Item Description"
                          value="<?php echo set_value('item_desc') ?>"></textarea>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="date">Date</label>
            <div class="col-md-2">
                <?php echo form_input(['id' => 'date', 'name' => 'date', 'placeholder' => 'Click Here', 'class' => 'form-control datepicker', 'required' => '', 'type' => 'text', 'readonly' => '', 'value' => set_value('date')]); ?>


            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="btnSubmit"></label>
            <div class="col-md-8">
                <?php echo form_submit(['class' => 'btn btn-primary', 'value' => 'Save Record', 'name' => 'btnSaveRecord']); ?>
                <?php echo form_reset(['class' => 'btn btn-default', 'value' => 'Reset', 'name' => 'btnReset']); ?>
            </div>
        </div>

    </fieldset>
    <?php form_close(); ?>


    <!--Main Content of the File ends Here-->

    <?php include('user_footer.php'); ?>
