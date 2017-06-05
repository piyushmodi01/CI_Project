<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/3/2017
 * Time: 12:20 PM
 */?>


<?php include('user_header.php');?>


    <ul class="breadcrumb">
        <li><a href="userDashboard">Home</a></li>
        <li class="active">Add Customer</li>

    </ul>

<div class="container ">

    <?php echo form_open_multipart('addCustomer/saveCustomer',['class'=>'form-horizontal']); ?>
        <fieldset>

            <!-- Form Name -->
            <legend class="container">Add Customer</legend>

            <!--Message Printing after Successful Save-->
            <?php if ($msg=$this->session->flashdata('save')):?>
                <div class="alert alert-dismissible alert-success">
                    <strong>Woha!</strong> <?php echo $msg;?>
                </div>
             <?php   endif;?>

            <!--Message Printing after Validation -->
            <?php if ($msg=$this->session->flashdata('warning')):?>
                <div class="alert alert-dismissible alert-warning">
                    <strong>Woha!</strong> <?php echo $msg;?>
                </div>
            <?php   endif;?>




            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="name">Name</label>
                <div class="col-lg-5">
                  <?php echo form_input(['id'=>'name', 'name'=>'name', 'placeholder'=>'Name', 'class'=>'form-control input-md', 'required'=>'', 'type'=>'text','value'=>set_value('name')]);?>
                </div>
                <div class="col-lg-5">
                    <?php echo form_error('name');?>
                </div>

            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="address">Address</label>
                <div class="col-lg-5">
                    <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                </div>

            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="email">Email</label>
                <div class="col-lg-5">
                    <?php echo form_input(['id'=>'email', 'name'=>'email', 'placeholder'=>'Email', 'class'=>'form-control input-md', 'required'=>'', 'type'=>'text','value'=>set_value('email')]);?>
                </div>
                <div class="col-lg-5">
                    <?php echo form_error('email');?>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="pan_no">Pan Number</label>
                <div class="col-lg-5">
                    <?php echo form_input(['id'=>'pan_no', 'name'=>'pan_no', 'placeholder'=>'Pan Number', 'class'=>'form-control input-md', 'required'=>'', 'type'=>'text','value'=>set_value('pan_no')]);?>
                </div>
                <div class="col-lg-5">
                    <?php echo form_error('pan_no');?>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="pan_image">PAN Card Image</label>
                <div class="col-lg-5">
                    <?php echo form_input(['id'=>'pan_image', 'name'=>'pan_image' , 'class'=>'input-file', 'type'=>'file']);?>
                </div>

            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="logo">Logo Image</label>
                <div class="col-lg-5">

                    <?php echo form_input(['id'=>'logo', 'name'=>'logo' , 'class'=>'input-file', 'type'=>'file']);?>

                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="btnSubmit"></label>
                <div class="col-md-8">
                    <?php echo form_submit(['class'=>'btn btn-primary','value'=>'Save Record','name'=>'btnSaveRecord']);?>
                    <?php echo form_reset(['class'=>'btn btn-default','value'=>'Reset','name'=>'btnReset']);?>
                </div>
            </div>

        </fieldset>
    <?php echo form_close();?>

</div>

<?php include('user_footer.php');?>