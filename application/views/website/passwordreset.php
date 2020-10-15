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

        #message {
            display: none;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            margin-bottom: 0;
        }

        .password_valid {
            background-color: #1D2635;
        }

        .password_valid .valid {
            color: green;
        }

        .password_valid .valid:before {
            position: relative;
            left: -10px;
            content: "✔";
        }

        .password_valid .invalid {
            color: red;
        }

        .password_valid .invalid:before {
            position: relative;
            left: -10px;
            content: "✖";
        }
    </style>
<?php } else { ?>
    <style>
        #message {
            display: none;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            margin-bottom: 0;
        }

        .password_valid .valid {
            color: green;
        }

        .password_valid .valid:before {
            position: relative;
            left: -10px;
            content: "✔";
        }

        .password_valid .invalid {
            color: red;
        }

        .password_valid .invalid:before {
            position: relative;
            left: -10px;
            content: "✖";
        }
    </style>
<?php } ?>



<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="col-sm-12 pb-5 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open('resetpassword', 'id="resetPassword" name="resetPassword" onsubmit="return validateForm()" '); ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom">Reset Password</h1>
                    <p>
                        For security reasons withdrawal will the disabled on your account for 24 hours
                        after a password change
                    </p>
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
                    <label for="verificationcode"><i class="fas fa-lock"></i>Password Reset Token</label>
                    <input type="text" class="form-control" id="verificationcode" name="verificationcode" value="<?php echo $this->input->get('rcode') ?>" placeholder="Password reset token" autocomplete="off" onkeyup="checkInputRequired(110,this.id)"">
                </div>


                <div class=" form-group">
                    <label for="newpassword"><i class="fas fa-lock"></i>Enter New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="************" autocomplete="off" data-toggle="password" onfocus="password_focus()" onblur="password_blur()" onkeyup="checkPassword(this.id)">
                        <div class="input-group-append">
                            <span class="input-group-text" style="border-radius: 0px 5px 5px 0px;">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="img-thumbnail password_valid" id="message" style="font-size: 14px;">
                    <p class="border-bottom">Password MUST include : </p>
                    <p id="letter" class="invalid" style="margin:0px;">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid" style="margin:0px;">A <b>capital (uppercase)</b> letter</p>
                    <p id="special" class="invalid" style="margin:0px;">A <b>special</b></p>
                    <p id="number" class="invalid" style="margin:0px;">A <b>number</b></p>
                    <p id="length" class="invalid" style="margin:0px;">Minimum <b>8 characters</b></p>
                </div>


                <div class="form-group">
                    <label for="r_pass"><i class="fas fa-lock"></i>Confirm New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="r_pass" name="r_pass" placeholder="************" data-toggle="password" onkeyup="checkConfirmPassword('newpassword',this.id)">
                    </div>
                </div>



                <button type="submit" class="btn btn-block submit_btn mt-4" id="anime_call">Reset Password</button>

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