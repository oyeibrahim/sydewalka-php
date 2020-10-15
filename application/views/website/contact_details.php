<?php if ($theme_mode == "DARK") { ?>
    <style>
        .e_normal_t_head {
            background-color: #1D2635;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
            color: whitesmoke;
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

        .e_nav {
            background-color: #F3F5FB;
            /* font-weight: 600; */
        }
    </style>
<?php } ?>




<div class="div_main" id="div_main">

    <div class="container py-lg-3 px-0 div_cont mt-5 pt-5" id="div_cont">


        <div class="col-lg-12 p-0 div_helper1" id="div_helper1">

        <a href="<?php echo base_url("home/jjjsssuuueee") ?>">Go to list</a>

            <p class="m-0 mt-3 mx-3 mb-1 font-weight-bold">Contact ID : <?php $contact->id ?></p>

            <hr class="mt-0">

            <div class="p-2 p_b_style" style="font-size: 15px;">

            <p>Name :</p>
            <p>
                <?php echo $contact->name ?>
                </p>
                <hr>
                <p>
Email:
                </p>
                <p>
                <?php echo $contact->email ?>
                </p>
                <hr>
                <p>
Subject:
                </p>
                <p>
                <?php echo $contact->subject ?>
                </p>
                <hr>
                <p>
Message:
                </p>
                <p>
                <?php echo $contact->message ?>
                </p>
                <hr>
                <p>
Status:
                </p>
                <p>
                <?php echo $contact->status ?>
                </p>
                <hr>
                <p>
Created:
                </p>
                <p>
                <?php echo $contact->created ?>
                </p>
                <hr>
                <p>
Updated:
                </p>
                <p>
                <?php echo $contact->updated ?>
                </p>

            </div>



            <hr>

        </div>
    </div>
</div>