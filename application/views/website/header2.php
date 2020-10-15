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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

    <?php //Favicon set in backend 
    ?>
    <link rel="shortcut icon" href="<?php echo base_url($settings->favicon); ?>">

    <?php //On site imports used on server 
    ?>
    <link href="<?php echo base_url('assets/website/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/css/custom_style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/css/metisMenu.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/website/fontawesome/css/fontawesome-all.min.css') ?>" rel="stylesheet">

    <!-- Title already set from caller -->
    <title><?php echo @$title ?></title>

    <!-- Set font -->
    <style type="text/css">
        @font-face {
            font-family: ubuntu;
            src: url(<?php echo base_url("assets/fonts/Ubuntu-Regular.ttf") ?>);
        }

        body {
            font-family: ubuntu;
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

<body id="">
    <!-- For SlimScroll has its ending tag after footer -->
    <!-- <div id="body"> -->




    <?php //sidebar nav 
    ?>


    <?php //End of sidebar nav 
    ?>

    <?php //This ovaerlays all content on the screen, it helps execute click on screen to close sidenav 
    ?>
    <div class="overlay"></div>