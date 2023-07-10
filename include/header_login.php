<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php session_start(); echo $_SESSION['location'];?>assets/img/logo2.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/animated-headline.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php session_start(); echo $_SESSION['location'];?>assets/css/style.css">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php session_start(); echo $_SESSION['location'];?>assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php"><img src="<?php session_start(); echo $_SESSION['location'];?>assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="<?php session_start(); echo $_SESSION['location'];?>index.php">Strona główna</a></li>
                                                <li><a href="<?php session_start(); echo $_SESSION['location'];?>courses/courses.php">Kursy</a></li>
                                                <li><a href="<?php session_start(); echo $_SESSION['location'];?>courses/startGame.php">Nauka</a></li>
                                                <li><a href="<?php session_start(); echo $_SESSION['location'];?>user/account.php">Konto</a></li>
                                                <!-- Button -->
                                                <li class="button-header"><a href="<?php session_start(); echo $_SESSION['location'];?>lib/login/logout-bg.php" class="btn btn3">Wyloguj</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>