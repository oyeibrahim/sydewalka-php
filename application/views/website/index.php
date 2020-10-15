<?php if ($theme_mode == "DARK") { ?>
    <style>
        .e_normal_t_head {
            background-color: #1D2635;
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
            color: whitesmoke;
        }

        .view {
            background-color: #85d939;
            color: #ffffff;
            padding: 100px 25px;
            background:
                radial-gradient(rgba(50, 100, 50, 0.3),
                    rgba(100, 150, 100, 0.5),
                    rgba(150, 200, 150, 0.3)),
                /* url(https://source.unsplash.com/1600x1050/?agriculture); */
                url('<?php echo base_url("upload/contents/photo-1529797233791-cb08843aeac2.jpg") ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* .card-text{
            color: whitesmoke !important;
            background-color: #1D2635;
        } */
        .card {
            color: whitesmoke !important;
            background-color: #1D2635;
        }

        hr {
            background-color: #bfc4d3;
        }
    </style>
<?php } else { ?>
    <style type="text/css">
        .e_normal_t_head {
            /* background-color: #F3F5FB; */
            /* #B7B8B7 */
            font-size: 13px;
            font-weight: 100;
        }

        .view {
            background-color: #85d939;
            color: #ffffff;
            padding: 100px 25px;
            background:
                radial-gradient(rgba(50, 100, 50, 0.3),
                    rgba(100, 150, 100, 0.5),
                    rgba(150, 200, 150, 0.3)),
                /* url(https://source.unsplash.com/1600x1050/?agriculture); */
                url('<?php echo base_url("upload/contents/photo-1529797233791-cb08843aeac2.jpg") ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        @media (max-width:768px) {
            .front-jumbo {
                margin-top: 100px;
                /* padding-top: 50px; */
                font-size: small;
            }
        }
    </style>
<?php } ?>





<!-- Full Page Intro -->
<div class="view">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

        <!-- Content -->
        <div class="text-center white-text mx-5 wow fadeIn front-jumbo">

            <h3 class="badge badge-danger">LATEST</h3>
            <h1 class="mb-4">
                <strong>Cryptocurrency Exchange White label</strong>
            </h1>

            <p>
                <strong>
                    SydeWalKa's comprehensive and extensible cryptocurrency exchange with full modern
                    features integration is here
                </strong>
            </p>

            <div class="pt-4">
                <a class="btn btn-outline-white" href="<?php echo base_url("#contact") ?>" role="button">
                    Get Demo
                    <i class="fas fa-envelope ml-2"></i>
                </a>
                <a class="btn btn-outline-white" href="<?php echo base_url("#contact") ?>" role="button">
                    Send Request
                    <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
        </div>
        <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro -->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn" id="about">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Main heading -->
                    <h3 class="h3 mb-3">SydeWalKa Technological Solutions</h3>
                    <p>
                        At SydeWalKa, we specialise in software development, operation and maintenance.
                    </p>
                    <p>
                        With over 4 years of service to customers with ultimate satisfaction, we trustworthy
                        and reputable.
                    </p>
                    <!-- Main heading -->

                    <hr>

                    <p>
                        We use modern and advance technlogy to ensure durability, safety and extensibility of your software.
                        While making responsiveness, usability and excellent user expereince our watchword.
                    </p>

                    <p>
                        Located in Nigeria, we serve customers across the globe.
                    </p>

                    <!-- CTA -->
                    <a target="_blank" href="<?php echo base_url("#contact") ?>" class="btn btn-grey btn-md">
                        Contact Us
                        <i class="fas fa-envelope ml-2"></i>
                    </a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="<?php echo base_url("upload/contents/photo-1532522750741-628fde798c73.jpg") ?>" class="img-fluid z-depth-1-half" alt="">

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Main info-->

        <hr class="my-5">

        <!--Section: Main info-->
        <section class="mt-5 wow fadeIn" id="exchange">

            <h3 class="h3 text-center mb-5">Exchange White label</h3>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="<?php echo base_url("upload/contents/r334h2jhhm073mnbsskh363562.jpg") ?>" class="img-fluid z-depth-1-half" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!-- Main heading -->
                    <p>
                        SydeWalKa introduces a fully integrated cryptocurrency exchange with multiple features. An exchange
                        with all modern features for trading and user experience.
                    </p>
                    <p>
                        Fuly resonsive and ready-to-go with multiple trading features, P2P and B2B features and comprehensive
                        Spot trading features with an integration of not less than <strong>11 order types</strong> in the trading engine.
                    </p>
                    <!-- Main heading -->

                    <hr>

                    <p>
                        Fast, streamlined for multiple transactions support with thousands of transaction per seconds on the most basic server,
                        Fully responsive, The exchange is so lightweight and can support as many extension as possible, secure and running on a
                        modern and supported technology.
                    </p>

                    <!-- CTA -->
                    <a target="_blank" href="<?php echo base_url("#contact") ?>" class="btn btn-grey btn-md">
                        Request demo
                        <i class="fas fa-envelope ml-2"></i>
                    </a>
                    <a target="_blank" href="<?php echo base_url("#contact") ?>" class="btn btn-grey btn-md">
                        Send Request
                        <i class="fas fa-envelope ml-2"></i>
                    </a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Main info-->

        <hr class="my-5">

        <!--Section: Not enough-->
        <section id="features">

            <h2 class="my-5 h3 text-center">Features</h2>

            <!--First row-->
            <div class="row features-small mb-0 mt-3 wow fadeIn">

                <!--First column-->
                <div class="col-md-4">
                    <!--First row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Comprehensive trading</h6>
                            <p class="grey-text">
                                The trading engine integrates not less than 11 order types of different purposes.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Fast</h6>
                            <p class="grey-text">
                                The exchange has been optimised for efficient speed and speed consistency across different servers.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">P2P Services</h6>
                            <p class="grey-text">
                                P2P conversions and services is integerated on the exchange.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Third row-->

                    <!--Fourth row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Fully responsive</h6>
                            <p class="grey-text">
                                The exchange is fully responsive with the same level of PC and mobile experience. Whatever device
                                the user is using, the same functionality will be presented in a form specific to the device.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Fourth row-->
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4">
                    <img src="<?php echo base_url("upload/contents/pa028anag2820wkanu28y2km2.jpg") ?>" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
                    <img src="<?php echo base_url("upload/contents/r334hsjs38m073mnbsskh30282n162.jpg") ?>" alt="MDB Magazine Template displayed on iPhone" class="z-depth-0 img-fluid">
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 mt-2">
                    <!--First row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">API Integration</h6>
                            <p class="grey-text">
                                The exchange has a full API support, the API has been built to support easiness of marketwatch integration.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/First row-->

                    <!--Second row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Fully secure</h6>
                            <p class="grey-text">
                                The exchange was built with security in mind. We have employed all mordern security tools in building the exchange.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Second row-->

                    <!--Third row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Simple and Easy</h6>
                            <p class="grey-text">
                                The interface and operation has been built with novices in mind.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Third row-->

                    <!--Fourth row-->
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-check-circle fa-2x indigo-text"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="feature-title">Lightweight and Extensible</h6>
                            <p class="grey-text">
                                We employed modern coding techniques with in vogue tools in building this exchange, so it is so lightweight and that will
                                ensure speed and durability as well as extensibility.
                            </p>
                            <div style="height:15px"></div>
                        </div>
                    </div>
                    <!--/Fourth row-->
                </div>
                <!--/Third column-->

            </div>
            <!--/First row-->

            <div class="text-center">
                <a target="_blank" href="<?php echo base_url("#contact") ?>" class="btn btn-grey btn-md">
                    Request demo
                    <i class="fas fa-envelope ml-2"></i>
                </a>
                <a target="_blank" href="<?php echo base_url("#contact") ?>" class="btn btn-grey btn-md">
                    Send Request
                    <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>

        </section>
        <!--Section: Not enough-->

        <hr class="mb-5">

        <!--Section: More-->
        <section id="services">

            <h2 class="my-5 h3 text-center">SydeWalKa Services</h2>

            <!--First row-->
            <div class="row features-small mt-5 wow fadeIn">

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3">
                    <!--Grid row-->

                    <div class="card shadow">
                        <img class="card-img-top" src="<?php echo base_url("upload/contents/photo-1532522750741-628fde7728266b.png") ?>" style="height: 220px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web App</h5>
                            <p class="card-text">Responsive web development, design, hosting and maintenance.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3">
                    <!--Grid row-->

                    <div class="card shadow">
                        <img class="card-img-top" src="<?php echo base_url("upload/contents/pa028anag2820wkanu2yiw7akm2.png") ?>" style="height: 220px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App</h5>
                            <p class="card-text">Modern Android and IOS App both native and Progressive Web App.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3">
                    <!--Grid row-->

                    <div class="card shadow">
                        <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkanu2yiw7akm2.png") ?>" style="height: 220px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bot Creation</h5>
                            <p class="card-text">Automation bots like trading bot, chat bot, telegram bot optimised for excellent performance.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3">
                    <!--Grid row-->

                    <div class="card shadow">
                        <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkanu2yiw7ak3jk2jha.png") ?>" style="height: 220px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Smart Contract</h5>
                            <p class="card-text">Development of smart contract on the Ethereum blockchain, ERC20 tokens, DeFi and ICO.</p>
                        </div>
                    </div>
                    <!--/Grid row-->
                </div>
                <!--/Grid column-->



            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="card px-2">
                <div class="row features-small mt-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Blockchain</h5>
                                <p class="grey-text mt-2">
                                    We build Blockchain infrastructures.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Crypto Wallet</h5>
                                <p class="grey-text mt-2">
                                    Cryptocurrency wallet creation.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">API Integration</h5>
                                <p class="grey-text mt-2">
                                    We deal with all kind of API integration.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Many Others</h5>
                                <p class="grey-text mt-2">
                                    Contact us for any custom software.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
            </div>
            <!--/Second row-->

        </section>
        <!--Section: More-->

        <hr class="mb-5">

        <!--Section: More-->
        <section id="technologies">

            <h2 class="my-5 h3 text-center">Our Technologies</h2>

            <!--First row-->
            <div class="row features-small mt-5 wow fadeIn">

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>Java</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkanu2yiw7ak3jk2hsj.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>JavaScript</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkanu2yiw7ak3jk2hsjsh.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>PHP</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkajgaghjsspuwk.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>NodeJS</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/r33403392m2b2g282n162.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>Codeigniter</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/pa02shshsk2820wkanu2yiw7ak3jk2aiuwwm,.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>Spring Boot</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/r33403392m2b2g282n1ags65sb.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>React</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/r33403392m2b2g282n162akgu.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

                <!--Grid column-->
                <div class="col-xl-3 col-md-6 p-3 text-center">
                    <!-- <div class="text-center" style="border-radius: 100px; border: 4px solid grey;"> -->
                    <!--Grid row-->
                    <h3>Bootstrap</h3>
                    <img class="card-img-top" src="<?php echo base_url("upload/contents/r33403392m2b2g282n162akguaij.png") ?>" style="max-height: 100px; max-width:100px" alt="Card image cap">
                    <!--/Grid row-->
                    <!-- </div> -->
                </div>
                <!--/Grid column-->

            </div>
            <!--/First row-->

        </section>
        <!--Section: More-->

        <hr class="mb-5">


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2 class="text-center">Contact</h2>
                    <p class="text-center">
                        Contact us using the form below for any of your software need.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4 p-3 card">
                            <h3>Our Address</h3>
                            <p>Olorunda LG Area, Osogbo, Osun State, Nigeria</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mb-4 p-3 card">
                            <h3>Email Us</h3>
                            <p>info@sydewalka.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mb-4 p-3 card">
                            <h3>Call Us</h3>
                            <p>(+234)8137583512</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 p-1">
                        <div class="p-2 p-md-5 card">
                            <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0825285587725!2d4.554688314098792!3d7.781074309426289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDYnNTEuOSJOIDTCsDMzJzI0LjgiRQ!5e0!3m2!1sen!2sng!4v1601905843140!5m2!1sen!2sng" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.084762920108!2d4.551727314098788!3d7.780837309429462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103787e799339e05%3A0x592f8e2635e01ea1!2sOlorunda%20Local%20Government%20Secretariat!5e0!3m2!1sen!2sng!4v1601906200870!5m2!1sen!2sng" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 p-1">
                        <div class="p-2 p-md-5 card">
                            <h3>Contact Us</h3>
                            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter a subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="6" data-rule="required" data-msg="This field is required" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>

                            <div class="alert alert-success col-sm-12" id="successful_alert" style="display:none;">
                                Your message was sent successfully, we will reply you as soon as possible. Thanks.
                            </div>
                            <div class="alert alert-danger col-sm-12" id="form_error_alert" style="display:none;">
                                All fields are required.
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default pull-right" id="submit_message" type="submit">Send Message</button>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->



    </div>
</main>
<!--Main layout-->