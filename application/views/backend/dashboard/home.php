<style type="text/css">
    .count_panel{
            text-align: unset;
    }
    .count_panel .fa.fa-info-circle {
        position: absolute;
        right: 4px;
        top: 3px;
        opacity: 1;

    }
    .stats-title i {
        position: absolute;
        opacity: .05;
        right: 10px;
        bottom: 10px;
        font-size: 100px;
        color: #000;
    }
    .stats-title h4 {
        font-size: 24px;
        font-weight: normal;
    }
    .panel-one{
        background: #0D063B;
        color: #fff;
    }
    .panel-one i{
        color: #fff;
        opacity: .05;
    }
    .panel-two{
        background: #1B9A1B;
        color: #fff;
    }

    .panel-three{
        background: #C50B3E;
        color: #fff;
    }
    .panel-four{
        background: #86C20C;
        color: #fff;
    }
    .panel-five{
        background: #033641;
        color: #fff;
    }
    .panel-five i{
        color: #fff;
        opacity: .05;
    }
    .panel-six{
        background: #066C81;
        color: #fff;
    }
    .panel-seven{
        background: #EBBE0C;
        color: #fff;
    }
    .panel-eight{
        background: #1A9CB8;
        color: #fff;
    }
    .panel-nine{
        background: #19B16A;
        color: #fff;
    }

</style>


    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="count_panel panel-one">
                <div class="stats-title">
                    <h4><?php echo display('total_user')?></h4>
                    <i class="fa fa-users"></i>
                </div>
                <h1 class="currency_text "><?php echo (@$total_user?@$total_user:'0'); ?></h1>
                <i class="fa fa-info-circle" data-toggle="tooltip" data-original-title="Number of Resistered Users"></i>
            </div>
        </div>

        <!-- <div class="col-sm-6 col-md-4">
            <div class="count_panel panel-two">
                <div class="stats-title ">
                    <h4>Exchange Market</h4>
                    <i class="fa fa-bar-chart"></i>
                </div>
                <h1 class="currency_text"><?php echo (@$total_market?@$total_market:'0'); ?></h1>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="count_panel panel-three">
                <div class="stats-title ">
                    <h4>Real 24 Hours Trade</h4>
                    <i class="fa fa-exchange"></i>
                </div>
                <h1 class="currency_text"><?php echo (@$h24_trade?@$h24_trade:'0'); ?></h1>
                <i class="fa fa-info-circle" data-toggle="tooltip" data-original-title="Real Trades i.e the site Bot trades is not counted"></i>
            </div>
        </div> -->



        <!-- Flot Pie Chart -->
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Welcome Admin</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- <h5>
                        Welcome to the Admin panel.... Navbar contains all available Settings and Management
                    </h5>

                    <h5>
                        To get all amount currently on the site, use the Manage >> All Balances.
                        <br>
                        The Balances >> Balance List is just for users' individual balances
                    </h5> -->

                </div>
            </div>
        </div>
    </div>

