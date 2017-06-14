<?php
/**
 * Created by PhpStorm.
 * User: Piyush Modi
 * Date: 6/12/2017
 * Time: 5:46 PM
 */
include("admin_header.php"); ?>


    <ul class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/');?>adminDashboard">Home</a></li>
        <li><a href="<?php echo base_url('index.php/');?>ViewVendor">Apporve Vendor</a></li>
        <li class="active">View Complete Vendor</li>

    </ul>


    <h2 align="center">Vendor's Details</h2>


    <div class="container">
        <?php $v_id = $basic[0]->v_id; ?>
        <?php echo form_open_multipart('/viewVendor/deleteVendor/' . $v_id, ['class' => 'form-horizontal', 'enctype' => 'multipart/form-data']); ?>


        <!-- Form Name -->
        <legend>View Vendor</legend>


        <fieldset id="basicInfo">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Information</div>
                <div class="panel-body">

                    <!-- Text input-->
                    <div class="form-group">

                        <label class="col-md-2 control-label" for="name">Vendor Name</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->name; ?></label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact_person">Contact Person</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->contact_person; ?></label>

                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="address">Address</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->address; ?></label>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('address'); ?>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="country">Country</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->country; ?></label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="mobile_no">Mobile Number</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->mobile_no; ?></label>
                        </div>

                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="landline_no">Landline Number</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->landline_no; ?></label>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="fax_no">Fax Number</label>
                        <div class="col-md-5">

                            <label class="form-control input-md"> <?php echo $basic[0]->fax_no; ?></label>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email</label>
                        <div class="col-md-5">

                            <label class="form-control input-md"> <?php echo $basic[0]->email; ?></label>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Type">Type</label>
                        <div class="col-md-5">
                            <label class="form-control input-md"> <?php echo $basic[0]->type; ?></label>
                        </div>
                    </div>


                </div>
            </div>
        </fieldset>

        <!--        This IF wont show the further details if the Vendor is Indirect     -->
        <?php

        if ($basic[0]->type == "direct") {

            ?>


            <fieldset id="extraInfo">
                <div class="panel panel-default" id="statuoryDetails">
                    <div class="panel-heading">Statuory Information</div>
                    <div class="panel-body">


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="tan_no">TAN Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->tan_no; ?></label>

                            </div>
                            <div class="col-lg-5">
                                <?php echo form_error('tan_no'); ?>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="pan_no">PAN Number</label>
                            <div class="col-md-5">


                                <label class="form-control input-md"> <?php echo $extra[0]->pan_no; ?></label>


                            </div>

                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="pan_image">PAN Card Image</label>
                            <div class="col-md-5">

                                <?php if (!$extra[0]->pan_image == "assets/upload/") { ?>
                                    <img src="<?php echo base_url().$extra[0]->pan_image; ?>" height="50%"
                                         width="50%">

                                <?php } else { ?>
                                    <label class="form-control input-md"> <?php echo "No Image Found"; ?></label>

                                <?php } ?>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="company_reg_no">Company Reg. Number</label>
                            <div class="col-md-5">
                                <label class="form-control input-md"> <?php echo $extra[0]->company_reg_no; ?></label>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="date_of_inc">Date Of Incorporation</label>
                            <div class="col-md-2">
                                <label class="form-control input-md"> <?php echo $extra[0]->date_of_inc; ?></label>
                            </div>

                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prov_fund_no">Provident Fund Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->prov_fund_no; ?></label>
                            </div>

                        </div>


                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="pf_image">Provident Fund Document</label>
                            <div class="col-md-5">

                                <?php if (!$extra[0]->pf_image == "assets/upload/") { ?>
                                    <img src="<?php echo base_url().$extra[0]->pf_image; ?>" height="50%" width="50%">

                                <?php } else { ?>
                                    <label class="form-control input-md"> <?php echo "No Image Found"; ?></label>

                                <?php } ?>

                            </div>

                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="esi_reg_no">ESI Registry Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->esi_reg_no; ?></label>

                            </div>
                        </div>


                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="esi_image">ESI Document</label>
                            <div class="col-md-5">

                                <?php if (!$extra[0]->esi_image == "assets/upload/") { ?>
                                    <img src="<?php echo base_url().$extra[0]->esi_image; ?>" height="50%"
                                         width="50%">

                                <?php } else { ?>
                                    <label class="form-control input-md"> <?php echo "No Image Found"; ?></label>

                                <?php } ?>

                            </div>

                        </div>


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="selectbasic">Invoice Currency</label>
                            <div class="col-md-5">
                                <label class="form-control input-md"> <?php echo $extra[0]->invoice_currency; ?></label>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="panel panel-default" id="bankDetails">
                    <div class="panel-heading">Bank Details</div>
                    <div class="panel-body">


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="bank_name">Bank Name</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->bank_name; ?></label>

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="bank_address">Bank Address</label>
                            <div class="col-md-5">
                                <label class="form-control"> <?php echo $extra[0]->bank_address; ?></label>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="bank_country">Bank Country</label>
                            <div class="col-md-5">
                                <label class="form-control input-md"> <?php echo $extra[0]->bank_country; ?></label>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cheque_image">Canceled Cheque</label>
                            <div class="col-md-5">

                                <?php if (!$extra[0]->cheque_image == "assets/upload/") { ?>
                                    <img src="<?php echo base_url().$extra[0]->cheque_image; ?>" height="50%"
                                         width="50%">
                                <?php } else { ?>
                                    <label class="form-control input-md"> <?php echo "No Image Found"; ?></label>

                                <?php } ?>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="branch_no">Branch Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->branch_no; ?></label>


                            </div>

                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="account_no">Account Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->account_no; ?></label>

                            </div>

                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="ifsc_code">IFS Code</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->ifsc_code; ?></label>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="swift_no">Swift Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->swift_no; ?></label>

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="iban_no">IBAN Number</label>
                            <div class="col-md-5">

                                <label class="form-control input-md"> <?php echo $extra[0]->iban_no; ?></label>

                            </div>
                        </div>

                    </div>
                </div>
            </fieldset>

            <?php
        }
        ?>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="btnSubmit"></label>
            <div class="col-md-8">

                <button id="btnSubmit" name="btnSubmit" class="btn btn-danger" href="">Delete Record</button>
                <a class="btn btn-default" class="btn btn-default" href="../">Close</a>
            </div>
        </div>

        </form>
    </div>


<?php include("admin_footer.php");
