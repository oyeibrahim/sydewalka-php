<?php
//get initial settings like favicon
$settings = $this->db->select("*")
    ->get('setting')
    ->row();

//deal with case where active keyword isn't set and set it to home
$active = (@$active) ? @$active : "home";

?>
<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Required meta tags -->


    <?php //CDN import commented in localhost 
    ?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

    <?php //Favicon set in backend 
    ?>
    <link rel="shortcut icon" href="<?php echo base_url($settings->favicon); ?>">

    <?php //On site imports used on server 
    ?>
    <link href="<?php echo base_url('assets/website/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/css/mdb.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/css/custom_style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/fontawesome/css/fontawesome-all.min.css') ?>" rel="stylesheet">



    <!-- Title already set from caller -->
    <title><?php echo @$title ?></title>

    <!-- Set font -->
    <style type="text/css">
        @font-face {
            font-family: ubuntu;
            src: url(<?php echo base_url("assets/fonts/Ubuntu-Regular.ttf") ?>);
        }

        /* body {
            font-family: ubuntu;
        } */

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331 !important;
            }
        }

        .view,
        body,
        html {
            height: 100%
        }

        .navbar {
            background-color: rgba(0, 0, 0, .2)
        }

        .page-footer,
        .top-nav-collapse {
            background-color: #1C2331
        }

        @media only screen and (max-width:768px) {
            .navbar {
                background-color: #1C2331
            }
        }

        .nav-item .active {
            /* background-color: #A9AAAC; */
            border: 2px solid #A9AAAC;
            /* border-radius: 5px; */
        }

        <?php if ($theme_mode == "DARK") { ?>

        /* DARK MODE */
        body {
            background-color: #2D2E31;
            color: whitesmoke;
        }

        .level_1 {
            background-color: #191C20;
            /* color: white; */
        }

        .level_2 {
            background-color: #111417;
            /* color: white; */
        }

        .level_3 {
            background-color: #1D2635;
            /* color: white; */
        }

        .level_4 {
            background-color: #2D2E31;
            /* color: white; */
        }




        <?php } ?>
    </style>
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="font-size: medium;">
        <div class="container mx-1 px-1">
            <a class="navbar-brand" href="<?php echo base_url() ?>">
                <img style="max-height: 40px; max-width: 80px;" src="<?php echo base_url($settings->favicon); ?>" alt="SydeWalKa Logo">
            </a>
            &emsp;
            &emsp;
            <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-bars fa-lg" style="color:whitesmoke;"></i>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: small;">
                &emsp;
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#exchange">EXCHANGE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#technologies">TECHNOLOGIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 py-1 mt-1" href="#contact">CONTACT</a>
                    </li>
                </ul>
                &emsp;
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="cursor: pointer; font-size:smaller;">
                        <a class="nav-link p-1 m-0 d-inline" id="theme_switch" style="background-color: #A9AAAC; border-radius:5px;">
                            <?php if ($this->session->userdata('theme_mode') == "DARK") { ?>
                                <i class="far fa-moon"></i>
                            <?php } else { ?>
                                <i class="far fa-sun"></i>
                            <?php } ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>