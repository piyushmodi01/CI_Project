<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/14/2017
 * Time: 2:12 PM
 */

include('admin_header.php'); ?>



<ul class="breadcrumb">
    <li><a href="<?php echo base_url('index.php/');?>adminDashboard">Home</a></li>
    <li class="active">View Vendor PO</li>

</ul>



<div class="container ">
    <?php echo form_open('', ['class' => 'form-horizontal']); ?>


    <!--        Message Display    -->

    <!--Message Printing after Successful Save-->
    <?php if ($msg = $this->session->flashdata('success')): ?>
        <div class="alert alert-dismissible alert-success">
            <strong>Woha!</strong> <?php echo $msg; ?>
        </div>
    <?php endif; ?>

    <!--Message Printing after Validation -->
    <?php if ($msg = $this->session->flashdata('error')): ?>
        <div class="alert alert-dismissible alert-danger">
            <strong>Woha!</strong> <?php echo $msg; ?>
        </div>
    <?php endif; ?>


    <!--        Message Display Ends Here     -->





    <fieldset>

        <!-- Form Name -->
        <legend>View Vendor Purchase Order</legend>


        <!--        Message Display    -->

        <!--Message Printing after Successful Save-->
        <?php if ($msg = $this->session->flashdata('info')): ?>
            <div class="alert alert-dismissible alert-info">
                <strong>Woha!</strong> <?php echo $msg; ?>
            </div>
        <?php endif; ?>


        <?php if ($msg = $this->session->flashdata('fail')): ?>
            <div class="alert alert-dismissible alert-danger">
                <strong>Woha!</strong> <?php echo $msg; ?>
            </div>
        <?php endif; ?>

        <!--        Message Display Ends Here     -->


        <div class="form-group">
            <label class="col-md-2 control-label" for="selectbasic">Select Vendor</label>
            <div class="col-md-5">


                <select id="v_id" name="v_id" class="form-control">
                    <option value="0">Please Select Vendor</option>
                    <?php

                    foreach ($data as $record) {
                        echo "<option value='" . $record->v_id . "'>";
                        echo $record->v_id . " -> " . $record->name;
                        echo "</option>";
                    }

                    ?>
                </select>
            </div>
        </div>




        <h3>Purchase Orders</h3>
        <!--Ajax Try-->

        <div id='result_table' style="color:black;">
            <div class='well'>Please Select Vendor to see Purchase Orders.</div>
        </div>

        <script type='text/javascript' language='javascript'>

            $('#v_id').change(function () {
                var id=document.getElementById('v_id').value;

                $.ajax({
                    url: 'http://[::1]/ci_project/index.php/ViewVendorPO/getDataInAjax/'+id,
                    type: 'POST',
                    dataType: 'json',
                    error: function () {
                        $('#result_table').html("<div class=\'well\'>No Purchase Order Record is available for this Vendor.</div>");
                    },

                    success: function (data) {

                        $('#result_table').html(data);

                    } // End of success function of ajax form
                }); // End of ajax call

            });



        </script>


        <!--    GST Table Ends Here    -->





        <?php  include('admin_footer.php');?>
