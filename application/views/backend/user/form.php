<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h2><?php echo (!empty($title)?$title:null) ?></h2>
                </div>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart("backend/user/user/form/$user->id") ?>
                <?php echo form_hidden('id', $user->id) ?>
                <?php echo form_hidden('user_id', $user->user_id) ?>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label><?php echo display("firstname") ?> *</label>
                            <input type="text" value="<?php echo $user->first_name ?>" class="form-control" name="first_name" placeholder="<?php echo display("firstname") ?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label><?php echo display("lastname") ?></label>
                            <input type="text" value="<?php echo $user->last_name ?>" class="form-control" name="last_name" placeholder="<?php echo display("lastname") ?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label><?php echo display("referral_id") ?></label>
                            <input type="text" value="<?php echo $user->referral_id ?>" class="form-control" <?php echo $user->id?'disabled':'' ?> name="referral_id" placeholder="<?php echo display("sponsor_name") ?>">
                        </div>                        
                        <div class="form-group col-lg-6">
                            <label><?php echo display("email") ?> *</label>
                            <input type="text" value="<?php echo $user->email ?>" class="form-control" name="email" placeholder="<?php echo display("email") ?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label><?php echo display("password") ?> *</label>
                            <input type="password" value="" class="form-control" name="password" placeholder="<?php echo display("password") ?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label><?php echo display("mobile") ?></label>
                            <input type="text" value="<?php echo $user->phone ?>" id="mobile" class="form-control" name="mobile" placeholder="<?php echo display("mobile") ?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label><?php echo display("conf_password") ?> *</label>
                            <input type="password" value="" class="form-control" name="conf_password" placeholder="<?php echo display("conf_password") ?>">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="status" class="col-sm-3 col-form-label">Status *</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <?php echo form_radio('status', '1', (($user->status==1 || $user->status==null)?true:false)); ?><?php echo display('active') ?>
                                </label>
                                <label class="radio-inline">
                                    <?php echo form_radio('status', '0', (($user->status=="0")?true:false) ); ?><?php echo display('inactive') ?>
                                </label> 
                            </div>
                        </div>

                    </div> 
                    <div>
                        <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary"><?php echo display("cancel") ?></a>
                        <button type="submit" class="btn btn-success"><?php echo $user->id?display("update"):display("register") ?></button>
                    </div>

                <?php echo form_close() ?>


            </div>


            <?php //only dislay the below if we are editing a user and not creating ?>
            <?php if($user->id){ ?>
            <div class="panel-heading">
                <div class="panel-title">
                    <h2>Edit Maker and Taker Fee Percentage</h2>
                </div>
            </div>

            <div class="panel-body">
                <?php echo form_open_multipart("backend/user/user/form/$user->id") ?>
                <?php echo form_hidden('id', $user->id) ?>
                <?php echo form_hidden('user_id', $user->user_id) ?>
                    <div class="row">
                        
                        <div class="form-group col-lg-12">
                            <label for="use_fee" class="col-sm-3 col-form-label">USE THIS FORM ?</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <?php echo form_radio('use_percent_fee', '1', false); ?><?php echo "YES" ?>
                                </label>
                                <label class="radio-inline">
                                    <?php echo form_radio('use_percent_fee', '0', true); ?><?php echo "NO" ?>
                                </label> 
                            </div>
                        </div>

                        <hr>

                        <div class="form-group col-lg-6">
                            <label>Percentage of Maker Fee</label>
                            <input type="text" value="<?php echo $user->spot_maker_percent_of_fee ?>" class="form-control" name="percent_of_maker_fee" placeholder="Enter Value">
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Percentage of Taker Fee</label>
                            <input type="text" value="<?php echo $user->spot_taker_percent_of_fee ?>" class="form-control" name="percent_of_taker_fee" placeholder="Enter Value">
                        </div>

                    </div> 
                    <div>
                        <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary"><?php echo display("cancel") ?></a>
                        <button type="submit" class="btn btn-success"><?php echo $user->id?"Update Maker and Taker Fee Percentage":"Register First" ?></button>
                    </div>

                <?php echo form_close() ?>


            </div>






            <div class="panel-heading">
                <div class="panel-title">
                    <h2>Add as chat admin</h2>
                </div>
            </div>

            <div class="panel-body">
                <?php echo form_open_multipart("backend/user/user/form/$user->id") ?>
                <?php echo form_hidden('id', $user->id) ?>
                <?php echo form_hidden('user_id', $user->user_id) ?>
                    <div class="row">
                        
                        <div class="form-group col-lg-12">
                            <label for="status" class="col-sm-3 col-form-label">USE THIS FORM ?</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <?php echo form_radio('use_chat_admin', '1', false); ?><?php echo "YES" ?>
                                </label>
                                <label class="radio-inline">
                                    <?php echo form_radio('use_chat_admin', '0', true); ?><?php echo "NO" ?>
                                </label> 
                            </div>
                        </div>

                        <hr>

                        <div class="form-group col-lg-6">
                            <label for="status" class="col-sm-3 col-form-label">Is Chat Admin</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <?php echo form_radio('is_chat_admin', '1', (($user->is_chat_admin==1)?true:false)); ?><?php echo "YES" ?>
                                </label>
                                <label class="radio-inline">
                                    <?php echo form_radio('is_chat_admin', '0', (($user->is_chat_admin=="0")?true:false)); ?><?php echo "NO" ?>
                                </label> 
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label>Chat Admin ID</label>
                            <small>to generate id visit : <a href="<?php echo base_url("backend/user/user/generateChatAdminID") ?>"><?php echo base_url("backend/user/user/generateChatAdminID") ?></a></small>
                            <input type="text" value="<?php echo $user->chat_admin_id ?>" class="form-control" name="chat_admin_id" placeholder="Enter ID">
                        </div>

                    </div> 
                    <div>
                        <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary"><?php echo display("cancel") ?></a>
                        <button type="submit" class="btn btn-success"><?php echo $user->id?"Set as Chat Admin":"Register First" ?></button>
                    </div>

                <?php echo form_close() ?>


            </div>



            <?php } ?>
            <?php //---END--- only dislay the below if we are editing a user and not creating ?>

        </div>
    </div>
</div>

 