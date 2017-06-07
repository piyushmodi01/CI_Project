<?php include('user_header.php'); ?>

<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Add Vendor</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Vendor Name</label>
            <div class="col-md-4">
                <input id="name" name="name" placeholder="Vendor Name" class="form-control input-md" required=""
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="contact_person">Contact Person</label>
            <div class="col-md-4">
                <input id="contact_person" name="contact_person" placeholder="Name" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address">Address</label>
            <div class="col-md-4">
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Country</label>
            <div class="col-md-4">
                <select id="country" name="country" class="form-control">
                    <option value="">Please Select Country</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="mobile_no">Mobile Number</label>
            <div class="col-md-4">
                <input id="mobile_no" name="mobile_no" placeholder="+91-9999888877" class="form-control input-md"
                       required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="landline_no">Landline Number</label>
            <div class="col-md-4">
                <input id="landline_no" name="landline_no" placeholder="+91-141-2523650" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fax_no">Fax Number</label>
            <div class="col-md-4">
                <input id="fax_no" name="fax_no" placeholder="+91-141-2222555" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" placeholder="JhonDoe@gmail.com" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Type">Type</label>
            <div class="col-md-4">
                <label class="radio-inline" for="Type-0">
                    <input name="Type" id="Type-0" value="direct" checked="checked" type="radio">
                    Direct
                </label>
                <label class="radio-inline" for="Type-1">
                    <input name="Type" id="Type-1" value="indirect" type="radio">
                    Indirect
                </label>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tan_no">TAN Number</label>
            <div class="col-md-4">
                <input id="tan_no" name="tan_no" placeholder="Tan Number" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pan_no">PAN Number</label>
            <div class="col-md-4">
                <input id="pan_no" name="pan_no" placeholder="PAN Number" class="form-control input-md" required=""
                       type="text">

            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pan_image">PAN Card Image</label>
            <div class="col-md-4">
                <input id="pan_image" name="pan_image" class="input-file" type="file">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="company_reg_no">Company Reg. Number</label>
            <div class="col-md-4">
                <input id="company_reg_no" name="company_reg_no" placeholder="Company's Registration Number"
                       class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="date_of_inc">Date Of Incorporation</label>
            <div class="col-md-4">
                <input id="date_of_inc" name="date_of_inc" placeholder="YYYY/MM/DD" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="prov_fund_no">Provident Fund Number</label>
            <div class="col-md-4">
                <input id="prov_fund_no" name="prov_fund_no" placeholder="Provident Fund Number"
                       class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="esi_reg_no">ESI Registry Number</label>
            <div class="col-md-4">
                <input id="esi_reg_no" name="esi_reg_no" placeholder="ESI Registry Number" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
            <div class="col-md-4">
                <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bank_name">Bank Name</label>
            <div class="col-md-4">
                <input id="bank_name" name="bank_name" placeholder="Bank Name" class="form-control input-md" required=""
                       type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="bank_address">Bank Address</label>
            <div class="col-md-4">
                <textarea class="form-control" id="bank_address" name="bank_address"></textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Bank Country</label>
            <div class="col-md-4">
                <select id="country" name="country" class="form-control">
                    <option value="0">Select Country</option>
                </select>
            </div>
        </div>

        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="cheque_image">Canceled Cheque</label>
            <div class="col-md-4">
                <input id="cheque_image" name="cheque_image" class="input-file" type="file">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="branch_no">Branch Number</label>
            <div class="col-md-4">
                <input id="branch_no" name="branch_no" placeholder="Branch Number" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="account_no">Account Number</label>
            <div class="col-md-4">
                <input id="account_no" name="account_no" placeholder="Bank Account Number" class="form-control input-md"
                       required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="ifsc_code">IFS Code</label>
            <div class="col-md-4">
                <input id="ifsc_code" name="ifsc_code" placeholder="IFS Code" class="form-control input-md" required=""
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="swift_no">Swift Number</label>
            <div class="col-md-4">
                <input id="swift_no" name="swift_no" placeholder="Swift Number" class="form-control input-md"
                       type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="iban_no">IBAN Number</label>
            <div class="col-md-4">
                <input id="iban_no" name="iban_no" placeholder="IBAN Number" class="form-control input-md" type="text">

            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="btnSubmit"></label>
            <div class="col-md-8">
                <button id="btnSubmit" name="btnSubmit" class="btn btn-primary">Save Record</button>
                <button id="BtnReset" name="BtnReset" class="btn btn-default">Reset</button>
            </div>
        </div>

    </fieldset>
</form>


<?php include('user_footer.php'); ?>
