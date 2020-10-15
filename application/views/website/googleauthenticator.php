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

        .code_text {
            border: 2px solid grey;
            border-radius: 2px;
            border-color: #8E84B7;
            font-weight: 600;
            letter-spacing: 1px;
            background-color: #2D2E31;
        }
    </style>
<?php } else { ?>
    <style>
        .code_text {
            border: 2px solid grey;
            border-radius: 2px;
            border-color: #8E84B7;
            font-weight: 600;
            letter-spacing: 1px;
        }
    </style>
<?php } ?>


<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="pb-5 col-sm-12 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open('googleauth', 'id="googleAuth" name="googleAuth" onsubmit="return validateForm()" '); ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom"><?php echo ($btnenable == 0) ? 'Disable' : 'Enable'; ?> Google Auth</h1>
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

                <?php if ($btnenable == 1) { //show these instructions only when enabling the Auth 
                ?>
                    <p class="mb-0" style="font-weight:600;"><i class="fas fa-angle-double-right"></i>&emsp;STEP 1</p>
                    <p>Download and Install the Google Authenticator App. You can get it on <a target="_blank" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2">Google Play</a> or <a target="_blank" href="https://apps.apple.com/us/app/google-authenticator/id388497605">App Store</a></p>
                    <p class="mb-0" style="font-weight:600;"><i class="fas fa-angle-double-right"></i>&emsp;STEP 2</p>
                    <p>Scan this QR Code using the Google Authenticator App or enter the code below it manually into the App if you are unable to scan the QR Code</p>
                    <div class="text-center">
                        <img src="<?php echo $qrCodeUrl
                                    ?>" class="img-thumbnail img-fluid" alt="">
                    </div>

                    <div class="text-center mt-4 mb-4">
                        <span class="img-thumbnail py-2 px-3 mb-2 user-select-all code_text"><?php echo $secret ?></span>
                    </div>

                    <hr>
                    <p class="mb-0" style="font-weight:600;"><i class="fas fa-angle-double-right"></i>&emsp;STEP 3</p>
                <?php } else { //if disabling, then show the warning 
                ?>
                    <p>
                        For security reasons withdrawal will the disabled on your account for 24 hours
                        after disabling Google Auth
                    </p>
                <?php } ?>
                <div class="form-group">
                    <label for="e_name"><i class="fas fa-lock"></i>Enter Auth Code</label>
                    <input type="text" class="form-control" id="token" name="token" placeholder="123456" onkeyup="checkInputRequired(6,this.id)">
                    <input type="hidden" value="<?php echo $secret ?>" name="secret">
                </div>

                <!-- Set name for enable or disable POST -->
                <button type="submit" class="btn btn-block submit_btn" id="anime_call" name="<?php echo ($btnenable == 0) ? 'disable' : 'enable'; ?>"><?php echo ($btnenable == 0) ? 'Disable' : 'Enable'; ?> Google Auth</button>

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