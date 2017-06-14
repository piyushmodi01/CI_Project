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
    <li class="active">View Customers</li>

</ul>

<div class="container ">


    <?php echo form_open_multipart('ViewCustomer/deleteCustomer',['class'=>'form-horizontal','enctype'=>'multipart/form-data']); ?>
    <fieldset>




        <!-- Form Name -->
        <legend class="container">View Customer</legend>

        <!--Message Printing after Successful Save-->
        <?php if ($msg=$this->session->flashdata('info')):?>
            <div class="alert alert-dismissible alert-info">
                <strong>Woha!</strong> <?php echo $msg;?>
            </div>
        <?php   endif;?>



        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">Select Customer</label>
            <div class="col-lg-5 ">
                <select name="c_id" class="form-control">
                    <option value="">Please Select Customer</option>
                    <?php

                    foreach($data as $d){
                        echo "<option value='".$d->c_id."'>".$d->c_id."  ->  ".$d->name."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>




<div class="customerData">
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">Name</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="address">Address</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>

        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="email">Email</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>
         </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="pan_no">Pan Number</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>

        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="pan_image">PAN Card Image</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>

        </div>

        <!-- Display Iamage -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="logo">Logo Image</label>
            <div class="col-lg-5">
                <label class="form-control input-md">-</label>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="btnSubmit"></label>
            <div class="col-md-8">
                <a class="btn btn-default" href="<?php base_url('index.php/')?>adminDashboard">Close</a>
            </div>
        </div>

</div>
    </fieldset>
    <?php echo form_close();?>


    <script type='text/javascript' language='javascript'>

        $('#c_id').change(function () {
            alert('jeu');
            var id=document.getElementById('c_id').value;
            alert(id);
            $.ajax({
                url: 'http://[::1]/ci_project/index.php/ViewCustomer/getCustomerDataAjax/'+id,
                type: 'POST',
                dataType: 'json',
                error: function () {
                    $('#customerData').html("<div class=\'well\'>Data Fetching Error. Please contact Developers.</div>");
                },

                success: function (data) {

                    $('#customerData').html(data);

                } // End of success function of ajax form
            }); // End of ajax call

        });
    </script>


</div>


<?php  include('admin_footer.php');?>
