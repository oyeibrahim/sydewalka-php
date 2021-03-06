<?php if ($theme_mode == "DARK") { ?>
    <style>
        .e_normal_t_head {
            background-color: #1D2635;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
            color: whitesmoke;
        }

        .e_border {
            border: 1px solid #bfc4d3;
        }

        .p_border {
            border: 1px solid #bfc4d3;
            border-radius: 5px;
        }

        .e_nav {
            background-color: #1D2635;
            /* font-weight: 600; */
        }

        .action_button {
            padding: 2px 1px 2px 1px;
            border: 1px solid #8E84B7;
            border-radius: 0px;
            /* background-color: white; */
            background-color: #191C20;
            color: whitesmoke !important;
            font-weight: 500;
            font-size: 12px;
            cursor: pointer;
        }

        .action_button:hover {
            background-color: #F9E6DF;
            color: grey !important;
            text-decoration: none;
        }

        .post_list a {
            text-decoration: none;
            color: black;
        }

        .post_list a:hover {
            text-decoration: none;
        }

        .view_all a {
            text-decoration: none;
        }

        .view_all a:hover {
            text-decoration: none;
        }

        hr {
            background-color: #bfc4d3;
        }

        .post_list div {
            background-color: #25282C;
            color: whitesmoke;
        }

        .s_post_style {
            background-color: #191C20;
        }

        .p_b_style {
            color: rgb(170, 170, 170);
        }

        .e_search_input {
            border: 1px solid #8E84B7;
            border-radius: 5px;
            background-color: #25282C;
            color: whitesmoke;
        }

        .e_search_input:focus,
        .e_search_input:focus {
            border: 1px solid #8E84B7 !important;
            box-shadow: 0 0 3px #8E84B7 !important;
            -moz-box-shadow: 0 0 3px #8E84B7 !important;
            -webkit-box-shadow: 0 0 3px #8E84B7 !important;
        }

        .e_search_input:focus,
        .e_search_input:focus,
        .e_search_input:focus {
            outline-offset: 0px !important;
            outline: none !important;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .pc_only {
                display: none;
            }

            .mobile_only {
                display: block;
            }
        }

        /* PC */
        @media (min-width: 767px) {
            .pc_only {
                display: block;
            }

            .mobile_only {
                display: none;
            }
        }
    </style>
<?php } else { ?>
    <style type="text/css">
        .e_normal_t_head {
            background-color: #F3F5FB;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
        }

        .e_border {
            border: 1px solid #bfc4d3;
        }

        .p_border {
            border: 1px solid #bfc4d3;
            border-radius: 5px;
        }

        .e_nav {
            background-color: #F3F5FB;
            /* font-weight: 600; */
        }

        .action_button {
            padding: 2px 1px 2px 1px;
            border: 1px solid #8E84B7;
            border-radius: 0px;
            background-color: white;
            font-weight: 500;
            font-size: 12px;
            cursor: pointer;
        }

        .action_button:hover {
            background-color: #F9E6DF;
            text-decoration: none;
        }

        .post_list a {
            text-decoration: none;
            color: black;
        }

        .post_list a:hover {
            text-decoration: none;
        }

        .view_all a {
            text-decoration: none;
        }

        .view_all a:hover {
            text-decoration: none;
        }

        .c_breadcrumb a {
            text-decoration: none;
        }

        .c_breadcrumb a:hover {
            text-decoration: none;
        }

        .e_search_input {
            border: 1px solid #8E84B7;
            border-radius: 5px;
        }

        .e_search_input:focus,
        .e_search_input:focus {
            border: 1px solid #8E84B7 !important;
            box-shadow: 0 0 3px #8E84B7 !important;
            -moz-box-shadow: 0 0 3px #8E84B7 !important;
            -webkit-box-shadow: 0 0 3px #8E84B7 !important;
        }

        .e_search_input:focus,
        .e_search_input:focus,
        .e_search_input:focus {
            outline-offset: 0px !important;
            outline: none !important;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .pc_only {
                display: none;
            }

            .mobile_only {
                display: block;
            }
        }

        /* PC */
        @media (min-width: 767px) {
            .pc_only {
                display: block;
            }

            .mobile_only {
                display: none;
            }
        }
    </style>
<?php } ?>




<div class="div_main" id="div_main">

    <div class="container py-lg-3 px-0 div_cont" id="div_cont">


        <div class="col-lg-12 p-0 div_helper1" id="div_helper1">

            <div class="mobile_only p-2">
                <form action="<?php echo base_url("posts") ?>" method="get">
                    <div class="form-row">
                        <input class="px-2 e_search_input" name="q" size="16" type="text" placeholder="Search..." />
                        &nbsp;
                        <button type="submit" class="btn btn-sm submit_btn">Search</button>
                    </div>
                </form>
            </div>

            <div class="row m-0 justify-content-between">
                <div class="p-1">
                    <p class="m-0 mt-3 mx-3 mb-1 c_breadcrumb">
                        <a href="<?php echo base_url("posts") ?>">Posts</a>
                        &nbsp;/&nbsp;
                        <a href="<?php echo base_url("posts/" . $cat) ?>"><?php echo $cat ?></a>
                        &nbsp;/&nbsp;
                        <a href="<?php echo base_url("post/" . $cat . "/" . $post->slug) ?>">post</a>
                    </p>
                </div>

                <div class="p-1 pc_only">
                    <form action="<?php echo base_url("posts") ?>" method="get">
                        <div class="form-row">
                            <input class="px-2 e_search_input" name="q" size="14" type="text" placeholder="Search..." />
                            &nbsp;
                            <button type="submit" class="btn btn-sm submit_btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="mt-0">

            <div class="row m-0">

                <div class="col-lg-8 p-2">

                    <div class="e_border p-2 py-4 s_post_style">
                        <h4 class="mb-4">
                            <?php echo $post->headline_en ?>
                        </h4>

                        <div class="row m-0 justify-content-between">
                            <p class="text-muted" style="font-size: 14px;">
                                <i class="far fa-clock"></i>
                                <?php $date = date_create($post->publish_date);
                                echo date_format($date, "jS, F Y"); ?>
                            </p>
                            <p class="text-muted" style="font-size: 14px;">
                                Last Update :
                                <?php $date = date_create($post->last_update);
                                echo date_format($date, "jS, F Y"); ?>
                            </p>
                        </div>

                        <?php if ($post->article_image) { ?>
                            <img class="col-12 img-fluid img-thumbnail" style="width:900px; max-height: 500px;" src="<?php echo base_url($post->article_image) ?>" alt="Post Image">
                        <?php } ?>

                        <hr class="mt-4">

                        <div class="p_b_style" style="font-size: 15px;">
                            <?php echo $post->article1_en ?>
                        </div>

                        <hr>

                    </div>


                </div>





                <div class="col-lg-4 p-2 px-lg-5">



                    <div class="col-12 p-0 mt-1 mb-3 e_border">

                        <div class="e_nav text-center p-1">
                            <p class="m-0 p-0" style="font-weight: bold;">ANNOUNCEMENT</p>
                        </div>

                        <div class="p-0 my-3">

                            <?php foreach ($announcements as $key => $value) { ?>

                                <div class="col-12 py-1 mb-3 post_list">
                                    <a href="<?php echo base_url("post/" . $value->cat_slug . "/" . $value->slug) ?>">
                                        <div class="p_border p-2">
                                            <p class="m-0 font-weight-bold small">
                                                <?php echo $value->headline_en ?>
                                            </p>

                                            <div class="text-right">
                                                <p class="d-inline px-2 text-muted action_button">Read Post</p>&emsp;
                                            </div>

                                        </div>
                                    </a>
                                </div>

                            <?php } ?>

                        </div>

                        <hr class="mb-0">

                        <div class="text-right pr-2 mb-3 view_all" style="font-size: small;">
                            <a href="<?php echo base_url("posts/announcement") ?>">View All Announcements ...</a>
                        </div>

                    </div>





                    <div class="col-12 p-0 mt-1 mb-3 e_border">

                        <div class="e_nav text-center p-1">
                            <p class="m-0 p-0" style="font-weight: bold;">NOTICES</p>
                        </div>



                        <div class="p-0 my-3">

                            <?php foreach ($notices as $key => $value) { ?>

                                <div class="col-12 py-1 mb-3 post_list">
                                    <a href="<?php echo base_url("post/" . $value->cat_slug . "/" . $value->slug) ?>">
                                        <div class="p_border p-2">
                                            <p class="m-0 font-weight-bold small">
                                                <?php echo $value->headline_en ?>
                                            </p>

                                            <div class="text-right">
                                                <p class="d-inline px-2 text-muted action_button">Read Post</p>&emsp;
                                            </div>

                                        </div>
                                    </a>
                                </div>

                            <?php } ?>

                        </div>


                        <hr class="mb-0">

                        <div class="text-right pr-2 mb-3 view_all" style="font-size: small;">
                            <a href="<?php echo base_url("posts/notice") ?>">View All Notices ...</a>
                        </div>

                    </div>






                    <div class="col-12 p-0 mt-1 mb-3 e_border">

                        <div class="e_nav text-center p-1">
                            <p class="m-0 p-0" style="font-weight: bold;">NEWS</p>
                        </div>



                        <div class="p-0 my-3">

                            <?php foreach ($news_posts as $key => $value) { ?>

                                <div class="col-12 py-1 mb-3 post_list">
                                    <a href="<?php echo base_url("post/" . $value->cat_slug . "/" . $value->slug) ?>">
                                        <div class="p_border p-2">
                                            <p class="m-0 font-weight-bold small">
                                                <?php echo $value->headline_en ?>
                                            </p>

                                            <div class="text-right">
                                                <p class="d-inline px-2 text-muted action_button">Read Post</p>&emsp;
                                            </div>

                                        </div>
                                    </a>
                                </div>

                            <?php } ?>

                        </div>


                        <hr class="mb-0">

                        <div class="text-right pr-2 view_all mb-3" style="font-size: small;">
                            <a href="<?php echo base_url("posts/news") ?>">View All News ...</a>
                        </div>

                    </div>






                    <div class="col-12 p-0 mt-1 mb-3 e_border">

                        <div class="e_nav text-center p-1">
                            <p class="m-0 p-0" style="font-weight: bold;">ARTICLES</p>
                        </div>



                        <div class="p-0 my-3">

                            <?php foreach ($articles as $key => $value) { ?>

                                <div class="col-12 py-1 mb-3 post_list">
                                    <a href="<?php echo base_url("post/" . $value->cat_slug . "/" . $value->slug) ?>">
                                        <div class="p_border p-2">
                                            <p class="m-0 font-weight-bold small">
                                                <?php echo $value->headline_en ?>
                                            </p>

                                            <div class="text-right">
                                                <p class="d-inline px-2 text-muted action_button">Read Post</p>&emsp;
                                            </div>

                                        </div>
                                    </a>
                                </div>

                            <?php } ?>

                        </div>



                        <hr class="mb-0">

                        <div class="text-right pr-2 mb-3 view_all" style="font-size: small;">
                            <a href="<?php echo base_url("posts/article") ?>">View All Articles ...</a>
                        </div>



                    </div>


                </div>





            </div>

            <hr>

        </div>
    </div>
</div>