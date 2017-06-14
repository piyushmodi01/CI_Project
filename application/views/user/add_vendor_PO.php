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
    <li><a href="<?php echo base_url('index.php/');?>userDashboard">Home</a></li>
    <li class="active">Add Vendor Purchase Order</li>

</ul>

<div class="container ">
    <?php echo form_open('addVendorPO/saveVendorPO', ['class' => 'form-horizontal']); ?>

    <fieldset>

        <!-- Form Name -->
        <legend>Add Vendor Purchase Order</legend>


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


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Customer</label>
            <div class="col-md-5">


                <select id="c_id" name="c_id" class="form-control">
                    <option value="">Please Select Customer</option>
                    <?php

                    foreach ($customer as $record) {
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


        <!-- Select AJAX Control Basic -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Customer PO</label>
            <div class="col-md-5">

                <div id='result_combobox' style="color:black;">
                    <select id="cpo_no" name="cpo_no" class="form-control">
                        <option value="">Please Select Customer PO</option>
                    </select>
                </div>


            </div>

            <div class="col-lg-5">
                <?php echo form_error('cpo_no'); ?>
            </div>


        </div>


        <!--        Script for Generating Combobox Automatically by JQUERY          -->


        <script type='text/javascript' language='javascript'>

            $('#c_id').change(function () {
                var id = document.getElementById('c_id').value;
                $.ajax({
                    url: 'http://[::1]/ci_project/index.php/addVendorPO/getDataInAjax/' + id,
                    type: 'POST',
                    dataType: 'json',
                    success: function (data) {

                        $('#result_combobox').html(data);

                    } // End of success function of ajax form
                }); // End of ajax call

            });
        </script>


        <!--        Ends Here       -->


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="cpo_no">PO Number</label>
            <div class="col-md-5">

                <?php echo form_input(['id' => 'vpo_no', 'name' => 'vpo_no', 'placeholder' => 'Purchase Order Number', 'class' => 'form-control input-md', 'required' => '', 'type' => 'text', 'value' => set_value('vpo_no')]); ?>

            </div>

            <div class="col-lg-5">
                <?php echo form_error('vpo_no'); ?>
            </div>


        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Vendor</label>
            <div class="col-md-5">


                <select id="v_id" name="v_id" class="form-control">
                    <option value="0">Please Select Vendor (only Approved Vendors can be seen)</option>
                    <?php

                    foreach ($data as $record) {
                        echo "<option value='" . $record->v_id . "'>";
                        echo $record->v_id . " -> " . $record->name;
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>

            <div class="col-lg-5">
                <?php echo form_error('selectVendor'); ?>
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
            <div class="col-lg-5">
                <?php echo form_error('date'); ?>
            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="date">Email</label>
            <div class="col-md-5">
                <?php echo form_input(['id' => 'email', 'name' => 'email', 'placeholder' => 'JhonDoe@email.com', 'class' => 'form-control input-md', 'required' => '', 'type' => 'text', 'value' => set_value('email')]); ?>
            </div>
            <div class="col-lg-5">
                <?php echo form_error('email'); ?>
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
