<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="farm activities, itineraries, farm holidays, country holidays, bed and breakfast, hotel, country hotel" />
    <meta name="description">
    <meta name="author" content="Ansonika">
    <title><?= $title; ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href=<?php echo base_url("img/favicon.ico"); ?> type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href=<?php echo base_url("img/apple-touch-icon-57x57-precomposed.png"); ?>>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href=<?php echo base_url("img/apple-touch-icon-72x72-precomposed.png"); ?>>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href=<?php echo base_url("img/apple-touch-icon-114x114-precomposed.png"); ?>>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href=<?php echo base_url("img/apple-touch-icon-144x144-precomposed.png"); ?>>

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href=<?php echo base_url("css/bootstrap.min.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/animate.min.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/style.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/menu.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/responsive.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/fontello/css/icon_set_1.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/fontello/css/icon_set_2.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/fontello/css/fontello.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/magnific-popup.css"); ?> rel="stylesheet">

    <!-- REVOLUTION SLIDER CSS -->
    <link href=<?php echo base_url("rs-plugin/css/settings.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/extralayers.css"); ?> rel="stylesheet">
    <!-- SPECIFIC CSS -->
    <link href=<?php echo base_url("css/slider-pro.min.css"); ?> rel="stylesheet">
</head>

<body>
    <!-- <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>

    <div class="layer"></div> -->

    <header>

        <div id="top_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <!-- <div id="logo">
                            <a href="#"><img src="#" width="240" height="40" alt="CountryHolidays" data-retina="true"></a>
                        </div> -->
                        <br><br><br>
                    </div>
                    <nav class="col-md-8 col-sm-8 col-xs-8">
                        <a class="cmn-toggle-switch cmn-toggle-switch__rot  open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                        <div class="main-menu">
                            <!-- <div id="header_menu">
                                <img src="img/logo.png" width="240" height="40" alt="CountryHolidays" data-retina="true">
                            </div> -->
                            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <ul>
                                <li>
                                    <a href="<?= route_to('Home'); ?>" class="show-submenu">Halaman Utama</a>
                                    <!-- <ul>
                                        <li><a href=" index.html">With Revolution Slider</a> -->
                                </li>
                                <li>
                                    <a href="<?= route_to('listWisata'); ?>" class="show-submenu"> List Wisata </a>
                                </li>
                                <!-- <li><a href="about.html">About</a></li> -->
                                <!-- <li class="submenu">
                                    <a href="javascript:void(0);" class="show-submenu">Activities <i class="icon-down-open-mini"></i></a>
                                    <ul>
                                        <li><a href="all_activities.html">All activities</a></li>
                                        <li><a href="horses.html">Horses</a></li>
                                        <li><a href="local_food.html">Discover local food</a></li>
                                        <li><a href="cooking.html">Cooking local food</a></li>
                                        <li><a href="farm.html">Farm activities</a></li>
                                    </ul>-->
                                </li>
                                <!-- <li><a href="contacts.html">Contact us</a></li> -->
                                <li>
                                    <a href="<?= route_to('signIn'); ?>" class="show-submenu">Masuk</a>
                                </li>
                            </ul>
                        </div><!-- End main-menu -->

                    </nav>
                </div>
            </div>
        </div>
    </header><!-- End Header -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4 col-sm-3">
                    <h3>Contacts</h3>
                    <ul id="contact_details_footer">
                        <li>Route de Sablet 1023, Marseille<br>France 01923</li>
                        <li><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></li>
                        <li><a href="mailto:info@countryholidays.com">info@countryholidays.com</a></li>
                    </ul>
                </div> -->
                <!-- <div class="col-md-2 col-sm-2">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div> -->
                <!-- <div class="col-md-3 col-sm-3">
                    <h3>Change language</h3>
                    <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div> -->
                <!-- <div class="col-md-3 col-sm-3" id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
                    <div id="message-newsletter_2"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    </form>
                </div> -->
                <br><br>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="https://www.instagram.com/stzhraslma/"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/stzhraslma/"><i class="icon-twitter"></i></a></li>
                            <!-- <li><a href="#"><i class="icon-google"></i></a></li> -->
                            <li><a href="https://www.instagram.com/stzhraslma/"><i class="icon-instagram"></i></a></li>
                            <!-- <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->
    <script src=<?php echo base_url("js/jquery-1.11.2.min.js"); ?>></script>
    <script src=<?php echo base_url("js/common_scripts_min.js"); ?>></script>
    <script src=<?php echo base_url("js/functions.js"); ?>></script>
    <script src=<?php echo base_url("assets/validate.js"); ?>></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src=<?php echo base_url("rs-plugin/js/jquery.themepunch.tools.min.js"); ?>></script>
    <script src=<?php echo base_url("rs-plugin/js/jquery.themepunch.revolution.min.js"); ?>></script>
    <script src=<?php echo base_url("js/revolution_func.js"); ?>></script>




</body>

</html>