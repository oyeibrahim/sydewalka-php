<?php if ($theme_mode == "DARK") { ?>
    <style>
        .cont_main1,.modal-body {
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

    </style>
<?php } else { ?>
<?php } ?>

<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="col-sm-12 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open('login', 'id="loginForm" name="loginForm" onsubmit="return validateForm()" '); ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom">Account Login</h1>
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
                    <label for="e_name"><i class="fas fa-user"></i>Email</label>
                    <input type="email" class="form-control" id="e_name" name="luseremail" placeholder="example@mail.com" onkeyup="checkEmail(this.id)">
                </div>

                <div class="form-group">
                    <label for="pass"><i class="fas fa-lock"></i>Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass" name="lpassword" placeholder="************" data-toggle="password" onkeyup="checkPassword(this.id)">
                        <div class="input-group-append">
                            <span class="input-group-text" style="border-radius: 0px 5px 5px 0px;">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberMe" name="raccept_terms" value="ptConfirm">
                        <label class="custom-control-label" for="rememberMe">Remember me</label>
                    </div>
                </div>

                <hr>

                <div class="form-group text-center">
                    <label class="control-label" for="captcha"><?php echo $captcha_image ?></label>
                    <input type="captcha" placeholder="Enter the Captcha value" name="captcha" id="captcha" class="form-control" autocomplete="off" onkeyup="checkInputRequired(7,this.id)">
                </div>

                <hr>

                <button type="submit" class="btn btn-block submit_btn" id="anime_call">Login</button>

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


                <div class="px-3 mt-5 mb-3 row justify-content-between">
                    <p class="text-muted text-center">
                        Don't have an account? <a href="<?php echo base_url("register") ?>" class="text-muted">Register</a>
                    </p>
                    <p class="text-muted text-center">
                        <a href="#" data-toggle="modal" data-target="#forgotModal" class="text-muted forgot">Forgot Password?</a>
                    </p>
                </div>

            </div>

        </div>


    </div>
</div>




<!-- Modal -->
<div id="forgotModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-body">
                    <div class="form-content forgotlogin">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="user-login-title border-bottom">Forgot Password</h3>
                        <div class="col-sm-12">

                            <div class="alert-danger text-center shadow-lg p-0 invalid_form_alert" id="invalid_form_alert_2">
                                <!-- For form validation error -->

                            </div>

                        </div>
                        <div class="user-login py-3">
                            <?php echo form_open('forgotPassword', 'id="forgotPassword" name="forgotPassword" onsubmit="return validateRecoveryForm()" '); ?>

                            <div class="form-group">
                                <label for="e_name"><i class="fas fa-user"></i><?php echo display('email') ?></label>
                                <input type="text" class="form-control" id="e_name_2" name="fuseremail" placeholder="example@mail.com" onkeyup="checkEmail(this.id)">
                            </div>
                            <button type="submit" class="btn btn-block submit_btn" id="anime_call_2">Recover Password</button>

                            <div class="btn btn-block submit_btn" id="anime_btn_2" style="display: none;">
                                <div class="white_load_anime">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>