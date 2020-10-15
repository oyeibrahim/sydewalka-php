<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                
                <?php echo form_open_multipart("backend/manage/mail_users_controller") ?>


                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Send To<i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <select class="form-control" id="type" name="type" required>
                                <option value="" selected disabled hidden=true></option>
                                    <option value="one">One User</option>
                                    <option value="one_email">One Email</option>
                                    <option value="country">Users in a Country [NEVER USE THIS]</option>
                                    <option value="all_subscribers">All Subscribers [NEVER USE THIS]</option>
                                    <option value="all">All Users [NEVER USE THIS]</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="user_id" class="col-sm-2 col-form-label">User ID <small>[if sending to one user]</small></label>
                        <div class="col-sm-10">
                            <input name="user_id" class="form-control" placeholder="User ID" type="text" id="user_id">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="destination_email" class="col-sm-2 col-form-label">Email <small>[if sending to one email]</small></label>
                        <div class="col-sm-10">
                            <input name="destination_email" class="form-control" placeholder="Destination Email" type="text" id="destination_email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-sm-2 col-form-label">Country <small>[if sending to one country... Name must be as in the Database]</small></label>
                        <div class="col-sm-10">
                            <input name="country" class="form-control" placeholder="Country" type="text" id="country">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="from" class="col-sm-2 col-form-label">From <small>[Admin email to send message from]</small></label>
                        <div class="col-sm-10">
                            <input name="from" class="form-control" placeholder="From" type="text" id="from" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="from_passcode" class="col-sm-2 col-form-label">From Email Unique Password String</label>
                        <div class="col-sm-10">
                            <input name="from_passcode" class="form-control" placeholder="Unique Password String" type="text" id="from_passcode" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="priority" class="col-sm-2 col-form-label">Email Priority <small>[1=highest, 3=normal, 5=lowest] [Default is 3]</small></label>
                        <div class="col-sm-10">
                            <input name="priority" class="form-control" value="3" placeholder="Email Priority" type="number" min="1" max="5" id="priority" required>
                        </div> 
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-sm-2 col-form-label">Email Subject</label>
                        <div class="col-sm-10">
                            <input name="subject" class="form-control" placeholder="Subject" type="text" id="subject" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="heading" class="col-sm-2 col-form-label">Email Heading</label>
                        <div class="col-sm-10">
                            <input name="heading" class="form-control" placeholder="Subject" type="text" id="heading" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Email Content<i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <textarea  id="summernote" name="content" class="form-control" placeholder="Long Description" id="content"></textarea>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary  w-md m-b-5"><?php echo display("cancel") ?></a>
                            <button type="submit" class="btn btn-success  w-md m-b-5">Send Email</button>
                        </div>
                    </div>

                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>


<!-- summernote css -->
<link href="<?php echo base_url(); ?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
<!-- summernote js -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
    "use strict"; // Start of use strict
    //summernote
    $('#summernote').summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true     // set focus to editable area after initializing summernote
    });
});
</script>