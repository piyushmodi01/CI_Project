<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/5/2017
 * Time: 11:09 AM
 */

include('user_header.php');

?>


<!--Maintain GST Form Starts Here!-->


<ul class="breadcrumb">
   <li><a href="<?php echo base_url('index.php/');?>userDashboard">Home</a></li>
        
    <li class="active">Maintain Vendor GST</li>

</ul>

<div class="container ">
    <?php echo form_open_multipart('MaintainVendorGST/saveVendorGST', ['class' => 'form-horizontal']); ?>

    <fieldset>

        <!-- Form Name -->
        <legend>Maintain Vendor GST</legend>


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


        <!--Message Printing after Deletion of GST Record -->
        <?php if ($msg = $this->session->flashdata('info')): ?>
            <div class="alert alert-dismissible alert-info">
                <strong>Done!</strong> <?php echo $msg; ?>
            </div>
        <?php endif; ?>


        <!--        Message Display Ends Here     -->


        <!-- Select Vendor -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Vendor</label>
            <div class="col-md-5">


                <select id="v_id" name="v_id" class="form-control">
                    <option value="">Please Select Vendor</option>
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
                <?php echo form_error('v_id'); ?>
            </div>


        </div>


        <!-- Select State -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select State</label>
            <div class="col-md-5">


                <select id="state" name="state" class="form-control">
                    <option value="">Please Select State</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Pondicherry">Pondicherry</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>

                </select>
            </div>

            <div class="col-lg-5">
                <?php echo form_error('state'); ?>
            </div>


        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="gstn_no">Add GSTN</label>
            <div class="col-md-5">

                <?php echo form_input(['id' => 'gstn_no', 'name' => 'gstn_no', 'placeholder' => 'GST Number', 'class' => 'form-control input-md', 'required' => '', 'type' => 'text', 'value' => set_value('gstn_no')]); ?>

            </div>

            <div class="col-lg-5">
                <?php echo form_error('gstn_no'); ?>
            </div>

        </div>


        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="pan_image">GST Number Image</label>
            <div class="col-lg-5">
                <?php echo form_input(['id' => 'gstn_image', 'name' => 'gstn_image', 'class' => 'input-file', 'type' => 'file']); ?>
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

    <!--Maintain GST Form Ends Here!-->


    <!--    GST Table Starts Here    -->

    <br/> <br/>

    <h2>GST Number List</h2>
    <!--Ajax Try-->

    <div id='result_table' style="color:black;">
        <div class='well'>Please Select Vendor to see GSTN Records.</div>
    </div>

    <script type='text/javascript' language='javascript'>

        $('#v_id').change(function () {
            var id = document.getElementById('v_id').value;
            $.ajax({
                url: 'http://[::1]/ci_project/index.php/maintainVendorGST/getDataInAjax/' + id,
                type: 'POST',
                dataType: 'json',
                error: function () {
                    $('#result_table').html("<div class=\'well\'>No GSTN Record is available for this Vendor.</div>");
                },

                success: function (data) {

                    $('#result_table').html(data);

                } // End of success function of ajax form
            }); // End of ajax call

        });
    </script>


    <!--    GST Table Ends Here    -->

    <?php include('user_footer.php'); ?>

