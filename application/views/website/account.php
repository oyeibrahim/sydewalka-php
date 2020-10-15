<?php if ($theme_mode == "DARK") { ?>
    <style>
        .p_border {
            border: 2px solid #8E84B7;
            border-radius: 0px;
        }

        .e_sub_nav {
            background-color: #2D2E31;
        }

        .e_sub_nav .active {
            background-color: #191C20;
            border-style: solid;
            border-width: 1px 1px 0px 1px;
            border-color: #DEE2E6;
            color: #8E84B7;
        }

        .e_sub_nav_content {
            background-color: #191C20;
            border-style: solid;
            border-width: 0px 1px 1px 1px;
            border-color: #DEE2E6;
        }

        .e_sub_nav_head {
            color: whitesmoke;
            text-decoration: none;
            font-weight: bold;
        }

        .e_sub_nav_head:hover {
            color: #8E84B7;
            text-decoration: none;
        }

        .e_t_head {
            background-color: #1D2635;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
            color: whitesmoke;
        }

        .e_normal_t_head {
            background-color: #1D2635;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
            color: whitesmoke;
        }

        .profile_card {
            background-color: #2D2E31 !important;
            color: whitesmoke;
        }

        .t_b_style {
            background-color: #2D2E31 !important;
            color: whitesmoke;
        }

        .t_b_style tr:hover {
            /* background-color: #2D2E31 !important; */
            color: whitesmoke !important;
        }

        .t_cont {
            background-color: #1D2635 !important;
        }

        .status_hard {
            color: black;
        }

        td {
            border-top: 1px solid #585757 !important;
        }
    </style>
<?php } else { ?>
    <style>
        .p_border {
            border: 2px solid #8E84B7;
            border-radius: 0px;
        }

        .e_sub_nav {
            background-color: white;
        }

        .e_sub_nav .active {
            background-color: #F7F7F7;
            border-style: solid;
            border-width: 1px 1px 0px 1px;
            border-color: #DEE2E6;
            color: #8E84B7;
        }

        .e_sub_nav_content {
            background-color: #F7F7F7;
            border-style: solid;
            border-width: 0px 1px 1px 1px;
            border-color: #DEE2E6;
        }

        .e_sub_nav_head {
            color: #333333;
            text-decoration: none;
            font-weight: bold;
        }

        .e_sub_nav_head:hover {
            color: #8E84B7;
            text-decoration: none;
        }

        .e_t_head {
            background-color: #F3F5FB;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
        }

        .e_normal_t_head {
            background-color: #F3F5FB;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
        }
    </style>
<?php } ?>


<div class="div_main" id="div_main">

    <div class="container py-lg-3 div_cont" id="div_cont">


        <?php //Alert Messages 
        ?>
        <div class="col-md-4">

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


        <!----------------------- NAV Start ----------------------->
        <nav class="e_sub_nav">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                <a class="nav-item active px-3 px-lg-5 py-2 e_sub_nav_head" id="account" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">
                    Account
                </a>

                <a class="nav-item px-3 px-lg-5 py-2 e_sub_nav_head" id="settings" data-toggle="tab" href="#nav-settings" role="tab" aria-controls="nav-settings" aria-selected="false">
                    Settings
                </a>

                <a class="nav-item px-3 px-lg-5 py-2 e_sub_nav_head" id="referral" data-toggle="tab" href="#nav-referral" role="tab" aria-controls="nav-referral" aria-selected="false">
                    Referral
                </a>

                <a class="nav-item px-3 px-lg-5 py-2 e_sub_nav_head" id="api" data-toggle="tab" href="#nav-api" role="tab" aria-controls="nav-api" aria-selected="false">
                    API
                </a>

            </div>
        </nav>


        <div class="tab-content e_sub_nav_content" id="nav-tabContent">
            <div class="tab-pane fade show active pt-5 pb-5 px-3" id="nav-account" role="tabpanel" aria-labelledby="account">


                <!------------- Account ------------->
                <div class="row m-0">
                    <div class="col-md-12 row m-0 p-2">
                        <!-- <div class="col"> -->
                        <img class="rounded" src="<?php echo $user_info->image == '' ? base_url("assets/website/img/img-user.png") : $user_info->image ?>" alt="<?php echo $user_info->first_name; ?>">
                        <!-- </div> -->
                        <div class="p-3">
                            <?php if ($user_info->verified == 1) { ?>
                                <p class="font-weight-bold" style="color:#8E84B7; letter-spacing: 1px">VERIFIED&emsp;<i class="fas fa-check e_green"></i></p>
                            <?php } else { ?>
                                <p class="font-weight-bold text-muted">UNVERIFIED <i class="fas fa-exclamation-circle"></i></p>
                            <?php } ?>

                        </div>
                    </div>
                    <!-- <div class="col-md-6 p-2">
                    </div> -->
                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                User ID
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <!-- ----------------/////////////////////////////////////////////////////////// -->
                                <?php echo $user_info->user_id; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                Name
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <?php echo $user_info->last_name . " " . $user_info->first_name; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                Email
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <?php echo $user_info->email; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                Registration Date
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <?php $date = date_create($user_info->created);
                                echo date_format($date, "jS F Y"); ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                Registration IP
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <?php echo $user_info->ip; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 p-2">
                        <div class="p-0 p_border shadow profile_card" style="background-color: white;">
                            <p class="p-0 m-0 pl-2 py-1 border-bottom text-muted font-weight-bold" style="font-size: 14px;">
                                Referred By
                            </p>
                            <p class="m-0 py-3 text-center font-weight-bold" style="letter-spacing: 1px">
                                <?php echo ($user_info->referral_id) ? $user_info->referral_id : "-NONE-"; ?>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="mt-5 pt-2">
                    <h5>Recent Activities</h5>
                    <table class="table table-responsive-md table-striped" style="font-size: small;">
                        <thead class="e_t_head">
                            <tr>
                                <th scope="col">Access Time</th>
                                <th scope="col">Type</th>
                                <th scope="col">User Agent</th>
                                <th scope="col">IP</th>
                            </tr>
                        </thead>
                        <tbody class="t_b_style">
                            <?php foreach ($user_log as $key => $value) { ?>
                                <tr>
                                    <td style="font-weight: 600;">
                                        <?php $date = date_create($value->access_time);
                                        echo date_format($date, "jS F Y"); ?>
                                    </td>
                                    <td><?php echo $value->log_type; ?></td>
                                    <td>
                                        <?php $user_agent = json_decode($value->user_agent, true);
                                        echo " Browser: " . $user_agent['browser'] . " <br>Platform: " . $user_agent['platform'] ?>
                                    </td>
                                    <td><?php echo $value->ip; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!------------- end Account ------------->


            </div>


            <div class="tab-pane fade pt-5 pb-5 px-3" id="nav-settings" role="tabpanel" aria-labelledby="settings">

                <!------------- Settings ------------->
                <div class="t_cont" style="background-color: white; border:1px solid #8E84B7;">
                    <table class="table table-sm table-hover table-responsive-lg" style='white-space:nowrap; table-layout: fixed ;width: 100% ;'>
                        <thead class="e_normal_t_head">
                            <tr>
                                <th scope="col" class="py-3">&emsp;Level</th>
                                <th scope="col" class="py-3">Status</th>
                                <th scope="col" class="py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t_b_style" style="width: 33.33% ;">
                            <tr>
                                <td class="py-4">&emsp;Email</td>
                                <td class="py-4">
                                    <?php echo ($user_info->status == 1) ? "<span style='color:#8E84B7'>VERIFIED&emsp;<i class='fas fa-check'></i></span>" : "UNVERIFIED&emsp; <i class='fas fa-exclamation-circle'></i>" ?>
                                </td>
                                <td class="py-4"></td>
                            </tr>
                            <tr>
                                <td class="py-4">&emsp;KYC</td>
                                <td class="py-4">
                                    <?php echo ($user_info->verified == 0) ? "UNVERIFIED&emsp; <i class='fas fa-exclamation-circle'></i>" : (($user_info->verified == 1) ? "<span style='color:#8E84B7'>VERIFIED&emsp;<i class='fas fa-check'></i></span>" : (($user_info->verified == 2) ? "REJECTED&emsp; <i class='fas fa-exclamation-circle'></i>" : "<span style='color:#3f51b5'>UNDER REVIEW</span>")); ?>
                                </td>
                                <td class="py-4">
                                    <?php echo ($user_info->verified == 0) ? "<a class='btn btn-sm submit_btn' href='" . base_url('kyc-verification') . "'>Click to Verify Account</a>" : (($user_info->verified == 1) ? "<span style='color:#8E84B7'>VERIFIED&emsp;<i class='fas fa-check'></i></span>" : (($user_info->verified == 2) ? "<a class='btn btn-sm submit_btn' href='" . base_url('kyc-verification') . "'>Retry process</a>" : "")); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4">&emsp;Google Auth</td>
                                <td class="py-4">
                                    <?php echo ($user_info->googleauth == '') ? "DISABLED&emsp; <i class='fas fa-exclamation-circle'></i>" : "<span style='color:#8E84B7'>ENABLED&emsp;<i class='fas fa-check'></i></span>" ?>
                                </td>
                                <td class="py-4">
                                    <a class="btn btn-sm submit_btn" href="<?php echo base_url("googleauth") ?>"><?php echo ($user_info->googleauth == '') ? 'Click to Enable' : 'Click to Disable' ?></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4">&emsp;Password</td>
                                <td class="py-4">
                                    <span style='color:#8E84B7'>STRONG&emsp;<i class='fas fa-check'></i></span>
                                </td>
                                <td class="py-4">
                                    <a class="btn btn-sm submit_btn" href="<?php echo base_url("change-password") ?>">Change Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4">&emsp;Profile</td>
                                <td class="py-4">
                                    <span style='color:#8E84B7'>MINIMUM&emsp;<i class='fas fa-check'></i></span>
                                </td>
                                <td class="py-4">
                                    <a class="btn btn-sm submit_btn" href="<?php echo base_url("edit-profile") ?>">Edit</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!------------- end Settings ------------->
            </div>


            <div class="tab-pane fade pt-5 pb-5 px-3" id="nav-referral" role="tabpanel" aria-labelledby="referral">

                <!------------- Referral ------------->
                <div class="t_cont" style="background-color: white; border:1px solid #8E84B7;">
                    <table class="table table-striped table-responsive-lg" style='font-size:13px; white-space:nowrap; table-layout: fixed ;width: 100% ;'>
                        <thead class="e_normal_t_head">
                            <tr>
                                <th scope="col">User ID </th>
                                <th scope="col">KYC</th>
                                <th scope="col">1st Transcation</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="t_b_style" style="width: 33.33% ;">
                            <?php foreach ($user_ref as $key1 => $value1) { ?>
                                <tr>

                                    <td><?php echo $value1->user_id; ?></td>
                                    <td><?php if ($value1->verified == '1') {
                                            echo 'Verified';
                                        } else {
                                            echo 'Not Verified';
                                        } ?></td>
                                    <td><?php $gateway1 = $this->db->select('*')->from('dbt_deposit')->where('user_id', $value1->user_id)->get()->row();
                                        if (@$gateway1->user_id == '') {
                                            echo 'NA';
                                        } else {
                                            echo 'Completed';
                                        } ?></td>
                                    <td><?php if ($value1->status != '1') {
                                            echo 'Inactive';
                                        } else {
                                            echo  'Active';
                                        }  ?></td>

                                </tr>
                            <?php } ?>


                        </tbody>
                    </table>
                </div>

                <!------------- end Referral ------------->
            </div>


            <div class="tab-pane fade pt-5 pb-5 px-3" id="nav-api" role="tabpanel" aria-labelledby="api">

                <!------------- Referral ------------->

                <?php if (!$apis) { ?>
                    <a class="btn btn-sm submit_btn mb-3" href="<?php echo base_url("home/generateKey") ?>">Generate New Key</a>
                <?php } ?>

                <div class="t_cont" style="background-color: white; border:1px solid #8E84B7;">
                    <table class="datatable2 table table-hover table-responsive-lg" style="font-size:13px; white-space:nowrap;">
                        <thead class="e_normal_t_head">
                            <tr>
                                <th>Key</th>
                                <th>1 hour</th>
                                <th>24 hours</th>
                                <th>1 Week</th>
                                <th>1 Month</th>
                                <th>Status</th>
                                <th>Set Active/Inactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="t_b_style">
                            <?php foreach ($apis as $key => $api) { ?>

                                <tr>
                                    <td style="font-size: medium;"><?php echo $api->api_key ?></td>
                                    <td><?php echo $api->h1 ?></td>
                                    <td><?php echo $api->h24 ?></td>
                                    <td><?php echo $api->w1 ?></td>
                                    <td><?php echo $api->m1 ?></td>

                                    <?php
                                    $sta = "";
                                    $staCls = "";
                                    if ($api->status == 1) {
                                        $sta = "ACTIVE";
                                        $stabg = "#F0F6E5";
                                        $stacl = "#70A800";
                                    }
                                    if ($api->status == 0) {
                                        $sta = "INACTIVE";
                                        $stabg = "#F9E6DF";
                                        $stacl = "#EA0070";
                                    }

                                    ?>
                                    <td class="status_hard">
                                        <p class="d-inline m-0 px-2" style="border:2px solid <?php echo $stacl ?>; background-color: <?php echo $stabg ?>;"><?php echo $sta ?></p>
                                    </td>

                                    <td><a class="btn btn-sm sell_btn" style='font-size:12px' href="<?php echo base_url("home/change_api_key_status/" . $api->api_key . "/") ?><?php echo ($api->status == 1) ? 0 : 1 ?>">Change Status</a></td>
                                    <td><a class="btn btn-sm sell_btn" style='font-size:12px' href="<?php echo base_url("home/delete_api_key/" . $api->user_id . "/" . $api->id) ?>">Delete</a></td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>

                <!------------- end Referral ------------->
            </div>
        </div>
        <!----------------------- end NAV ----------------------->

        <!-- </div> -->


    </div>
</div>