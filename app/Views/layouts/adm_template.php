<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?= $title; ?></title>

    <!-- FAVICON TEGAL -->
    <link rel="shortcut icon" href="/assets/img/ikon-tegal.ico" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="/assets/bs-4/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/bs-4/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/bs-4/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/bs-4/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/bs-4/css/theme.css" rel="stylesheet" media="all">

    <!-- FONT AWESOME ONLINE -->
    <script src="https://kit.fontawesome.com/addf044e73.js" crossorigin="anonymous"></script>

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="/assets/img/brand-tegal.png" width="50" alt="Tegal" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="<?= preg_match('/Dashboard/', $title) ? 'active' : ''; ?>">
                                <a href="/dashboard">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="<?= preg_match('/Pariwisata/', $title) ? 'active' : ''; ?>">
                                <a href="/pariwisata">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Pariwisata
                                </a>
                            </li>
                            <li class="<?= preg_match('/Penginapan/', $title) ? 'active' : ''; ?>">
                                <a href="/penginapan-tegal">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Penginapan
                                </a>
                            </li>
                            <li class="<?= preg_match('/Kuliner/', $title) ? 'active' : ''; ?>">
                                <a href="/kuliner-tegal">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Kuliner
                                </a>
                            </li>
                            <li class="<?= preg_match('/Jasa/', $title) ? 'active' : ''; ?>">
                                <a href="/layanan">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>Jasa
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="/assets/img/<?= $admin['gambar']; ?>" alt="<?= $admin['nama']; ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?= $admin['nama']; ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="/assets/img/<?= $admin['gambar']; ?>" alt="<?= $admin['nama']; ?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?= $admin['nama']; ?></a>
                                            </h5>
                                            <span class="email"><?= $admin['email']; ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="/logout">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="/assets/img/brand-tegal.png" width="50" alt="Tegal" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Pariwisata</a>
                        </li>
                        <li>
                            <a href="/penginapan-tegal">
                                <i class="fas fa-table"></i>Penginapan</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/kuliner-tegal">
                                <i class="fas fa-copy"></i>Kuliner</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/layanan">
                                <i class="fas fa-desktop"></i>Jasa</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="/assets/img/anwar.jpeg" alt="Khaeril Anwar" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">Khaeril Anwar</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="/assets/img/anwar.jpeg" alt="Khaeril Anwar" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">Khaeril Anwar</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <?php $this->renderSection('content'); ?>

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2022 Kelompok 3 Universitas Bina Sarana Informatika</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assets/bs-4/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/bs-4/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/bs-4/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/bs-4/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/bs-4/vendor/wow/wow.min.js"></script>
    <script src="/assets/bs-4/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/bs-4/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/bs-4/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/bs-4/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/bs-4/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/bs-4/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/bs-4/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/bs-4/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/bs-4/js/main.js"></script>

</body>

</html>
<!-- end document-->