<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php $title; ?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href=<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("assets/plugins/perfectscroll/perfect-scrollbar.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("assets/plugins/pace/pace.css"); ?> rel="stylesheet">


    <!-- Theme Styles -->
    <link href=<?php echo base_url("assets/css/main.min.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("assets/css/horizontal-menu/horizontal-menu.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("assets/css/custom.css"); ?> rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href=<?php echo base_url("assets/images/icon.png"); ?> />
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo base_url("assets/images/icon.png"); ?> />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header>
        <div class="app horizontal-menu align-content-stretch d-flex flex-wrap">
            <div class="app-container">

                <div class="app-header">
                    <nav class="navbar navbar-light navbar-expand-lg container">
                        <div class="container-fluid">
                            <a class="navbar-brand" style="color: white;" href="<?= route_to('homeAdmin') ?>">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= route_to('listWisataAdmin') ?>">Data Wisata</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= route_to('tambahWisata') ?>">Tambah Data Wisata</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= route_to('editProfile') ?>">Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('/log-out') ?>">Keluar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <!-- Javascripts -->
        <script src=<?php echo base_url("assets/plugins/jquery/jquery-3.5.1.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/bootstrap/js/bootstrap.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/perfectscroll/perfect-scrollbar.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/pace/pace.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/highlight/highlight.pack.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/datatables/datatables.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/plugins/apexcharts/apexcharts.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/js/main.min.js"); ?>></script>
        <script src=<?php echo base_url("assets/js/custom.js"); ?>></script>
        <script src=<?php echo base_url("assets/js/pages/dashboard.js"); ?>></script>
        <script src=<?php echo base_url("assets/js/pages/datatables.js"); ?>></script>
    </footer>
</body>

</html>