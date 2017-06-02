<?php include('public_header.php');?>

<div class="container">

    <?php echo form_open('Login/authenticate',['class'=>'form-horizontal']); ?>

        <fieldset>
            <legend>Login Now</legend>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-5">
                    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','type'=>'text','id'=>'txtEmail','name'=>'email','value'=>set_value('email')])?>
                </div>
                <div class="col-lg-4">
                    <?php echo form_error('email');?>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-5">
                    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','id'=>'txtPassword','name'=>'password'])?>
                </div>
                <div class="col-lg-4">
                    <?php echo form_error('password');?>
                </div>
            </div>

                <div class="col-lg-10 col-lg-offset-2">

                    <?php echo form_submit(['class'=>'btn btn-primary','value'=>'Login','name'=>'Submit']);?>
                    <?php echo form_submit(['class'=>'btn btn-link','value'=>'Forget Password?','name'=>'forgetPassword?']);?>

                </div>

        </fieldset>
    </form>
</div>


<?php include('public_footer.php');?>

