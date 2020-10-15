<?php //if ($theme_mode == "DARK") { 
?>
<style>
    .e_normal_t_head {
        background-color: #1D2635;
        /* #B7B8B7 */
        font-size: 13px;
        font-weight: 100;
        color: whitesmoke;
    }

    .div_main {
        background-color: whitesmoke;
    }

    hr {
        background-color: #bfc4d3;
    }

    .e_border {
        border: 1px solid #bfc4d3;
    }

    .e_nav {
        background-color: #1D2635;
        /* font-weight: 600; */
    }

    .p_b_style {
        background-color: #1D2635;
        color: rgb(170, 170, 170);
    }
</style>
<?php //} else { 
?>
<style type="text/css">
    /* .e_normal_t_head {
            background-color: #F3F5FB;
            font-size: 13px;
            font-weight: 100;
        }

        .e_border {
            border: 1px solid #bfc4d3;
        }

        .e_nav {
            background-color: #F3F5FB;
        } */
</style>
<?php //} 
?>


<?php
$s_links = $this->db->query("SELECT * FROM web_social_link")->result();
foreach ($s_links as $key => $value) {
    if ($value->name == "Facebook") {
        $facebook = $value->link;
    }
    if ($value->name == "Twitter") {
        $twitter = $value->link;
    }
    if ($value->name == "LinkedIn") {
        $linkedin = $value->link;
    }
    if ($value->name == "Youtube") {
        $youtube = $value->link;
    }
    if ($value->name == "Telegram") {
        $telegram = $value->link;
    }
    if ($value->name == "Announcement") {
        $announcement = $value->link;
    }
}
?>


<div class="div_main" id="div_main">

    <div class="container py-lg-3 px-0 div_cont" id="div_cont">


        <div class="col-lg-12 p-0 div_helper1" id="div_helper1">

            <p class="m-0 mt-3 mx-3 mb-1 font-weight-bold">Under Maintenance !!! &emsp; <i class="fas fa-cog fa-lg fa-spin"></i></p>

            <hr class="mt-0">

            <div class="p-5 p_b_style text-center" style="font-size: 15px;">

                <div class="p-0 p-lg-5 p_b_style text-center" style="font-size: 15px;">

                    <h3>H E L L O</h3>
                    <h5>
                        The site is currently under maintenance. Please check back later. Also join us on
                        our social media platforms to know when the site will be available.
                    </h5>
                    <br>
                    <a href="<?php echo $twitter ?>">Twitter</a>
                    &emsp;
                    <a href="<?php echo $telegram ?>">Telegram</a>
                    &emsp;
                    <a href="<?php echo $facebook ?>">Facebook</a>
                    &emsp;
                    <a href="<?php echo $announcement ?>">Announcement</a>
                    &emsp;
                    <a href="<?php echo $youtube ?>">Youtube</a>

                </div>

            </div>



            <hr>

        </div>
    </div>
</div>