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
    </style>
<?php } else { ?>
<?php } ?>


<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <div class="col-lg-6 px-xl-5 offset-lg-3 div_helper1" id="div_helper1">

            <div class="col-sm-12 pb-5 shadow-lg cont_main1" id="cont_main1">

                <?php echo form_open_multipart('edit-profile', 'id="editProfile" name="editProfile" onsubmit="return validateForm()" '); ?>
                <?php echo form_hidden('user_id', $user->user_id) ?>

                <div class="text-center mb-4" style="padding-top:10px;">
                    <h1 class="h3 mb-3 font-weight-normal border-bottom">Edit Profile</h1>
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
                    <label for="bio">About</label>
                    <textarea name="bio" placeholder="About" class="form-control" id="bio"><?php echo $user->bio ?></textarea>
                </div>

                <hr>

                <div class="form-group row">
                    <label for="preview" class="col-md-3">Previous Image</label>
                    <div class="col-md-9">
                        <img src="<?php echo base_url(!empty($user->image) ? $user->image : "./assets/images/icons/user.png") ?>" class="img-thumbnail" width="125" height="100">
                        <input type="hidden" name="old_image" value="<?php echo $user->image ?>">
                    </div>
                </div>
                <div class="form-group row" id='selected_image' style='display:none;'>
                    <label for="preview1" class="col-md-3">Selected Image</label>
                    <div class="col-md-9">
                        <img id='preview1' class='img-fluid img-thumbnail' src='#' alt='"+name+"' style='width:125px; display:none;' />
                    </div>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <label for="custom_upload" class="custom-file-upload col-12" id="placeHolding">
                        <i class="fas fa-upload"></i>&emsp;Click here to select profile picture
                    </label>
                    <input type="file" id="custom_upload" accept="image/*" name="image" onchange="checkImageSize(1048576,'placeHolding',this.id)" />
                    <small id="imageHelp" class="form-text text-muted">Maximum filesize allowed is 1.024 MB</small>
                </div>

                <hr>

                <div class="form-group">
                    <label for="password"><i class="fas fa-lock"></i>Enter password to verify</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="************" data-toggle="password" onkeyup="checkPassword(this.id)">
                        <div class="input-group-append">
                            <span class="input-group-text" style="border-radius: 0px 5px 5px 0px;">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-block submit_btn mt-4" id="anime_call">Update Profile</button>

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