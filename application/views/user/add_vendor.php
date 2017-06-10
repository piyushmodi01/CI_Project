<?php include('user_header.php'); ?>

<!--Division Hiding Script-->



<!--Division Hiding Script Ends Here-->


<ul class="breadcrumb">
    <li><a href="userDashboard">Home</a></li>
    <li class="active">Add Vendor</li>
</ul>


<div class="container">
    <?php echo form_open_multipart('AddVendor/saveVendor',['class'=>'form-horizontal','enctype'=>'multipart/form-data']); ?>



            <!-- Form Name -->
            <legend>Add Vendor</legend>


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

        <fieldset id="basicInfo">
            <div class="panel panel-default">
                <div class="panel-heading">Basic Information</div>
                <div class="panel-body">

                    <!-- Text input-->
                    <div class="form-group">

                        <label class="col-md-2 control-label" for="name">Vendor Name</label>
                        <div class="col-md-5">
                            <?php echo form_input(['id'=>'name', 'name'=>'name', 'placeholder'=>'Vendors Name', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('name')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('name');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact_person">Contact Person</label>
                        <div class="col-md-5">
                            <?php echo form_input(['id'=>'contact_person', 'name'=>'contact_person', 'placeholder'=>'Name', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('contact_person')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('contact_person');?>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="address">Address</label>
                        <div class="col-md-5">
                            <?php echo form_textarea(['class'=>'form-control','id'=>'address','name'=>'address','placeholder'=>'Please Provide Address','rows'=>'5' ,'value'=>set_value('address')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('address');?>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="country">Country</label>
                        <div class="col-md-5">
                            <select id="country" name="country" class="form-control">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India" selected>India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's
                                    Republic of
                                </option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="mobile_no">Mobile Number</label>
                        <div class="col-md-5">
                            <?php echo form_input(['id'=>'mobile_no', 'name'=>'mobile_no', 'placeholder'=>'+91-9999888877', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('mobile_no')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('mobile_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="landline_no">Landline Number</label>
                        <div class="col-md-5">
                            <?php echo form_input(['id'=>'landline_no', 'name'=>'landline_no', 'placeholder'=>'+91-141-2523650', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('landline_no')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('landline_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="fax_no">Fax Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'fax_no', 'name'=>'fax_no', 'placeholder'=>'+91-141-5555555', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('fax_no')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('fax_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'email', 'name'=>'email', 'placeholder'=>'JhonDoe@gmail.com', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('email')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('email');?>
                        </div>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Type">Type</label>
                        <div class="col-md-5">
                            <label class="radio-inline" for="Type-0">

                                <input name="type" id="directVendor" value="direct"  checked="checked" type="radio" onClick="showHide()">
                                Direct
                            </label>
                            <label class="radio-inline" for="Type-1">
                                <input name="type" id="indirectVendor" value="indirect"  type="radio" onClick="showHide()">
                                Indirect
                            </label>
                        </div>
                    </div>


                </div>
            </div>
        </fieldset>

        <fieldset id="extraInfo" >
            <div class="panel panel-default" id="statuoryDetails">
                <div class="panel-heading">Statuory Information</div>
                <div class="panel-body">


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="tan_no">TAN Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'tan_no', 'name'=>'tan_no', 'placeholder'=>'Tan Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('tan_no')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('tan_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="pan_no">PAN Number</label>
                        <div class="col-md-5">


                            <?php echo form_input(['id'=>'pan_no', 'name'=>'pan_no', 'placeholder'=>'PAN Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('pan_no')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('pan_no');?>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="pan_image">PAN Card Image</label>
                        <div class="col-md-5">
                            <input id="pan_image" name="pan_image" class="input-file" type="file">
                        </div>

                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="company_reg_no">Company Reg. Number</label>
                        <div class="col-md-5">
                            <?php echo form_input(['id'=>'company_reg_no', 'name'=>'company_reg_no', 'placeholder'=>'Company\'s Registration Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('company_reg_no')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('company_reg_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="date_of_inc">Date Of Incorporation</label>
                        <div class="col-md-2">
                            <?php echo form_input(['id'=>'date_of_inc', 'name'=>'date_of_inc', 'placeholder'=>'Click Here', 'class'=>'form-control datepicker','readonly'=>'', 'type'=>'text', 'value'=>set_value('date_of_inc')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('date_of_inc');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="prov_fund_no">Provident Fund Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'prov_fund_no', 'name'=>'prov_fund_no', 'placeholder'=>'Provident Fund Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('prov_fund_no')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('prov_fund_no');?>
                        </div>
                    </div>


                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="pf_image">Provident Fund Document</label>
                        <div class="col-md-5">
                            <input id="pf_image" name="pf_image" class="input-file" type="file">
                        </div>

                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="esi_reg_no">ESI Registry Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'esi_reg_no', 'name'=>'esi_reg_no', 'placeholder'=>'ESI Registry Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('esi_reg_no')])?>

                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('esi_reg_no');?>
                        </div>
                    </div>


                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="esi_image">ESI Document</label>
                        <div class="col-md-5">
                            <input id="esi_image" name="esi_image" class="input-file" type="file">
                        </div>

                    </div>


                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectbasic">Invoice Currency</label>
                        <div class="col-md-5">
                            <select id="invoice_currency" name="invoice_currency" class="form-control">
                                <option value="USD" selected="selected">United States Dollars</option>
                                <option value="EUR">Euro</option>
                                <option value="GBP">United Kingdom Pounds</option>
                                <option value="DZD">Algeria Dinars</option>
                                <option value="ARP">Argentina Pesos</option>
                                <option value="AUD">Australia Dollars</option>
                                <option value="ATS">Austria Schillings</option>
                                <option value="BSD">Bahamas Dollars</option>
                                <option value="BBD">Barbados Dollars</option>
                                <option value="BEF">Belgium Francs</option>
                                <option value="BMD">Bermuda Dollars</option>
                                <option value="BRR">Brazil Real</option>
                                <option value="BGL">Bulgaria Lev</option>
                                <option value="CAD">Canada Dollars</option>
                                <option value="CLP">Chile Pesos</option>
                                <option value="CNY">China Yuan Renmimbi</option>
                                <option value="CYP">Cyprus Pounds</option>
                                <option value="CSK">Czech Republic Koruna</option>
                                <option value="DKK">Denmark Kroner</option>
                                <option value="NLG">Dutch Guilders</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="EGP">Egypt Pounds</option>
                                <option value="FJD">Fiji Dollars</option>
                                <option value="FIM">Finland Markka</option>
                                <option value="FRF">France Francs</option>
                                <option value="DEM">Germany Deutsche Marks</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="GRD">Greece Drachmas</option>
                                <option value="HKD">Hong Kong Dollars</option>
                                <option value="HUF">Hungary Forint</option>
                                <option value="ISK">Iceland Krona</option>
                                <option value="INR" selected>India Rupees</option>
                                <option value="IDR">Indonesia Rupiah</option>
                                <option value="IEP">Ireland Punt</option>
                                <option value="ILS">Israel New Shekels</option>
                                <option value="ITL">Italy Lira</option>
                                <option value="JMD">Jamaica Dollars</option>
                                <option value="JPY">Japan Yen</option>
                                <option value="JOD">Jordan Dinar</option>
                                <option value="KRW">Korea (South) Won</option>
                                <option value="LBP">Lebanon Pounds</option>
                                <option value="LUF">Luxembourg Francs</option>
                                <option value="MYR">Malaysia Ringgit</option>
                                <option value="MXP">Mexico Pesos</option>
                                <option value="NLG">Netherlands Guilders</option>
                                <option value="NZD">New Zealand Dollars</option>
                                <option value="NOK">Norway Kroner</option>
                                <option value="PKR">Pakistan Rupees</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="PHP">Philippines Pesos</option>
                                <option value="XPT">Platinum Ounces</option>
                                <option value="PLZ">Poland Zloty</option>
                                <option value="PTE">Portugal Escudo</option>
                                <option value="ROL">Romania Leu</option>
                                <option value="RUR">Russia Rubles</option>
                                <option value="SAR">Saudi Arabia Riyal</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="SGD">Singapore Dollars</option>
                                <option value="SKK">Slovakia Koruna</option>
                                <option value="ZAR">South Africa Rand</option>
                                <option value="KRW">South Korea Won</option>
                                <option value="ESP">Spain Pesetas</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="SDD">Sudan Dinar</option>
                                <option value="SEK">Sweden Krona</option>
                                <option value="CHF">Switzerland Francs</option>
                                <option value="TWD">Taiwan Dollars</option>
                                <option value="THB">Thailand Baht</option>
                                <option value="TTD">Trinidad and Tobago Dollars</option>
                                <option value="TRL">Turkey Lira</option>
                                <option value="VEB">Venezuela Bolivar</option>
                                <option value="ZMK">Zambia Kwacha</option>
                                <option value="EUR">Euro</option>
                                <option value="XCD">Eastern Caribbean Dollars</option>
                                <option value="XDR">Special Drawing Right (IMF)</option>
                                <option value="XAG">Silver Ounces</option>
                                <option value="XAU">Gold Ounces</option>
                                <option value="XPD">Palladium Ounces</option>
                                <option value="XPT">Platinum Ounces</option>
                            </select>
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

                            <?php echo form_input(['id'=>'bank_name', 'name'=>'bank_name', 'placeholder'=>'Bank Name', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('bank_name')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('bank_name');?>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="bank_address">Bank Address</label>
                        <div class="col-md-5">
                           <?php echo form_textarea(['class'=>'form-control','id'=>'bank_address','name'=>'bank_address','placeholder'=>'Please Provide Address', 'rows'=>'5','value'=>set_value('bank_address')])?>
                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('bank_address');?>
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="bank_country">Bank Country</label>
                        <div class="col-md-5">
                            <select id="bank_country" name="bank_country" class="form-control">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia (Hrvatska)</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="France Metropolitan">France, Metropolitan</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                <option value="Holy See">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India" selected>India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran (Islamic Republic of)</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Democratic People's Republic of Korea">Korea, Democratic People's
                                    Republic of
                                </option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia, Federated States of</option>
                                <option value="Moldova">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint LUCIA">Saint LUCIA</option>
                                <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                <option value="Span">Spain</option>
                                <option value="SriLanka">Sri Lanka</option>
                                <option value="St. Helena">St. Helena</option>
                                <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying
                                    Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Viet Nam</option>
                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cheque_image">Canceled Cheque</label>
                        <div class="col-md-5">
                            <input id="cheque_image" name="cheque_image" class="input-file" type="file">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="branch_no">Branch Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'branch_no', 'name'=>'branch_no', 'placeholder'=>'Branch Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('branch_no')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('branch_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="account_no">Account Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'account_no', 'name'=>'account_no', 'placeholder'=>'Branch Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('account_no')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('account_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="ifsc_code">IFS Code</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'ifsc_code', 'name'=>'ifsc_code', 'placeholder'=>'IFS Code', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('ifsc_code')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('ifsc_code');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="swift_no">Swift Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'swift_no', 'name'=>'swift_no', 'placeholder'=>'SWIFT Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('swift_no')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('swift_no');?>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="iban_no">IBAN Number</label>
                        <div class="col-md-5">

                            <?php echo form_input(['id'=>'iban_no', 'name'=>'iban_no', 'placeholder'=>'IBA Number', 'class'=>'form-control input-md', 'type'=>'text', 'value'=>set_value('iban_no')])?>


                        </div>
                        <div class="col-lg-5">
                            <?php echo form_error('iban_no');?>
                        </div>
                    </div>

                </div>
            </div>
        </fieldset>


            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="btnSubmit"></label>
                <div class="col-md-8">
                    <button id="btnSubmit" name="btnSubmit" class="btn btn-primary">Save Record</button>
                    <button id="BtnReset" name="BtnReset" class="btn btn-default">Reset</button>
                </div>
            </div>

    </form>
</div>

<?php include('user_footer.php'); ?>
