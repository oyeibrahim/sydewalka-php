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

        .t_c_style {
            color: wheat;
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

        .t_c_style {
            color: black;
        }
    </style>
<?php } ?>


<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="col-sm-12 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open('register', 'id="registerForm" name="registerForm" onsubmit="return validateForm()" '); ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom">Site Registration</h1>
                    <!-- <hr> -->
                    <p>Fill out the fields below and confirm your email account to start using LiboPro</p>
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
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="remail" placeholder="example@mail.com" onkeyup="checkEmail(this.id)">
                </div>

                <div class="form-group">
                    <label for="f_name">Firstname</label>
                    <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Akinwale" onkeyup="checkInputRequired(2,this.id)">
                </div>

                <div class="form-group">
                    <label for="l_name">Lastname</label>
                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Liberty" onkeyup="checkInputRequired(2,this.id)">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="myusername" onkeyup="checkInputRequired(2,this.id)">
                </div>



                <div class="form-group">
                    <label for="pass">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass" name="rpass" placeholder="************" data-toggle="password" onfocus="password_focus()" onblur="password_blur()" onkeyup="checkPassword(this.id)">
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
                    <label for="r_pass">Confirm Password</label>
                    <input type="password" class="form-control" id="r_pass" name="rr_pass" placeholder="************" onkeyup="checkConfirmPassword('pass',this.id)">
                </div>

                <div class="form-group">
                    <label for="email">Referral Code</label>
                    <input type="text" class="form-control" id="rcode" name="rcode" value="<?php echo $this->input->get('ref') ?>" placeholder="LPULISNK9H4">
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="accept_terms" name="raccept_terms" value="ptConfirm" onchange="checkCheckboxRequired('accept_terms_label',this.id)">
                        <label class="custom-control-label" id="accept_terms_label" for="accept_terms">I Accept <a href="<?php echo base_url("terms-and-conditions") ?>" class="t_c_style">Terms & Conditions</a> of LiboPro</label>
                    </div>
                </div>

                <hr>

                <div class="form-group text-center">
                    <label class="control-label" for="captcha"><?php echo $captcha_image ?></label>
                    <input type="captcha" placeholder="Enter the Captcha value" name="captcha" id="captcha" class="form-control" autocomplete="off" onkeyup="checkInputRequired(7,this.id)">
                </div>

                <hr>

                <button type="submit" class="btn btn-block submit_btn" id="anime_call">Register</button>

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

                <p class="mt-5 mb-3 text-muted text-center border-top">
                    Already have an account?&emsp;<a href="<?php echo base_url("login") ?>" class="text-muted">Login</a>
                </p>

            </div>

        </div>


    </div>
</div>