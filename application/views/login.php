<?php include('public_header.php');?>

<div class="container">

    <?php echo form_open('Login/authenticate',['class'=>'form-horizontal']); ?>

        <fieldset>
            <legend>Login Now</legend>
            <?php if ($err=$this->session->flashdata('login_failed')):?>
            <div class="alert alert-dismissible alert-danger">
                <strong>Oh snap!</strong> <?php echo $err;?>
            </div>
            <?php endif;?>

            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-5">
                    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','type'=>'text','id'=>'txtEmail','required'=>'','name'=>'email','value'=>set_value('email')])?>
                </div>
                <div class="col-lg-6">
                    <?php echo form_error('email');?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-5">
                    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','required'=>'','id'=>'txtPassword','name'=>'password'])?>
                </div>
                <div class="col-lg-6">
                    <?php echo form_error('password');?>
                </div>
            </div>

                <div class="col-lg-10 col-lg-offset-2">

                    <?php echo form_submit(['class'=>'btn btn-primary','value'=>'Login','name'=>'Submit']);?>
                    <?php echo form_submit(['class'=>'btn btn-link','value'=>'Forget Password?','name'=>'forgetPassword?']);?>

                </div>

        </fieldset>

    <?php echo form_close();?>
</div>

<?php
if (isset($errMsg))
    echo "<p class=txt-danger>$errMsg;</p>";
?>
<?php include('public_footer.php');?>

