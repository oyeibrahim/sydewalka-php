<?php if ($theme_mode == "DARK") { ?>
    <style>
        .cont_main1 {
            /* cont_main1 is for FORMS */
            border: 2px solid grey;
            border-radius: 5px;
            background-color: #191C20;
        }

        .form-control {
            background-color: #2D2E31;
            color: whitesmoke;
        }

        .form-control:focus {
            background-color: #2D2E31;
            color: whitesmoke;
        }

        label {
            color: whitesmoke !important;
            font-weight: 500 !important;
        }

        /* For the upload fields to be added dynamically, since the field won't be one 
        then they will have 1, 2 or 3 added to their id and class, so the normal style
        won't work for them, we must give style here up to 3 since max field is 3 */

        .custom-file-upload1 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload1:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload1 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }


        .custom-file-upload2 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload2:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload2 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }


        .custom-file-upload3 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload3:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload3 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }
    </style>
<?php } else { ?>
    <style>
        /* For the upload fields to be added dynamically, since the field won't be one 
    then they will have 1, 2 or 3 added to their id and class, so the normal style
    won't work for them, we must give style here up to 3 since max field is 3 */

        .custom-file-upload1 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload1:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload1 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }


        .custom-file-upload2 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload2:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload2 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }


        .custom-file-upload3 {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .custom-file-upload3:hover {
            border: 2px solid #8E84B7;
            border-radius: 5px;
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        #custom_upload3 {
            position: fixed;
            right: 100%;
            bottom: 100%;
        }
    </style>
<?php } ?>






<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="col-sm-12 pb-5 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open_multipart('kyc-verification', 'id="kycVerify" name="kycVerify" onsubmit="return validateForm()" '); ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom">KYC Verification</h1>
                    <!-- <hr> -->
                    <p>Fill all fields below appropriately to get KYC verified on LiboPro</p>
                </div>

                <?php //Alert Messages 
                ?>
                <div class="col-sm-12">

                    <?php if ($this->session->flashdata('message') != null) {  ?>
                        <div class="alert alert-info alert-dismissable text-center shadow-lg p-0">
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('exception') != null) {  ?>
                        <div class="alert alert-danger alert-dismissable text-center shadow-lg p-0">
                            <?php echo $this->session->flashdata('exception'); ?>
                        </div>
                    <?php } ?>

                    <?php if (validation_errors()) {  ?>
                        <div class="alert alert-danger alert-dismissable text-center shadow-lg p-0">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php } ?>

                    <div class="alert-danger text-center shadow-lg p-0 invalid_form_alert" id="invalid_form_alert">
                        <!-- For form validation error -->

                    </div>

                </div>
                <?php // End Alert Messages 
                ?>


                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Andrew" onkeyup="checkInputRequired(2,this.id)">
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Liberty" onkeyup="checkInputRequired(2,this.id)">
                </div>

                <div class="form-group">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Akinwale"><!-- onkeyup="checkInputRequired(2,this.id)" -->
                </div>
                
                <fieldset class="form-group" id="radio_cont">
                    <legend class="col-form-label pt-0" id="gender_legend">Gender</legend>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="gender" value="MALE" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="FEMALE" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="custom-select form-control" name="country" id="country" onchange="checkSelectRequired(this.id)">
                        <option value="" selected disabled hidden=true>Select Country</option>
                        <?php $countries = $this->db->select('*')->from('dbt_country')->get()->result(); ?>
                        <?php foreach ($countries as $key => $country) { ?>
                            <?php echo "<option>" . $country->nicename . "</option>" ?>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Phone No (With Country Code)</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+2348000000000" onkeyup="checkPhoneRequired(this.id)">
                </div>

                <div class="form-group">
                    <label for="city">State / City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Osun" onkeyup="checkInputRequired(2,this.id)">
                </div>


                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="No 11, Street Name, City Name, State Name" onkeyup="checkInputRequired(5,this.id)">
                </div>


                <div class="form-group">
                    <label for="verify_type">Verification Type</label>
                    <select class="custom-select form-control" name="verify_type" id="verify_type" onchange="checkSelectRequired(this.id)">
                        <option value="" selected disabled hidden=true>Select Verification Type</option>
                        <option value="passport">Passport</option>
                        <option value="driving_license">Driver's License</option>
                        <option value="nid">Government-issued ID Card</option>
                    </select>
                </div>

                <div class="mb-2 p-2" style="border: 2px solid red; border-radius:5px;">
                    <p class="small m-0" style="color: red;">
                        IMPORTANT:
                    </p>
                    <p class="m-0">
                        For any verification type chosen your selfie with verification document MUST contain
                        the text "LiboPro" and Current date.
                    </p>
                </div>

                <div class="form-group">
                    <label for="id_number">Card Number (Passport / NID / Driver's Licence)</label>
                    <input type="text" class="form-control" id="id_number" name="id_number" placeholder="Enter Document Number" onkeyup="checkInputRequired(2,this.id)">
                </div>

                <!-- Dynamic upload fields holder -->
                <div id="verify_field"></div>


                <div class="d-flex justify-content-between mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="accept_terms" name="raccept_terms" value="ptConfirm" onchange="checkCheckboxRequired('accept_terms_label',this.id)">
                        <label class="custom-control-label" id="accept_terms_label" for="accept_terms">I confirm that all information entered are correct</label>
                    </div>
                </div>

                <hr>

                <button type="submit" class="btn btn-block submit_btn" id="anime_call">Submit Document</button>

                <div class="btn btn-block submit_btn" id="anime_btn" style="display: none;">
                    <div class="white_load_anime">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <?php echo form_close() ?>

            </div>

        </div>


    </div>
</div>