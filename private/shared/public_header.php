<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomeSearch</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="myHOME - real estate template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-4.1.2/bootstrap.min.css">
    <link href="assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/assets/vendor/OwlCarousel2-2.3.4/owl.theme.default.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/assets/vendor/OwlCarousel2-2.3.4/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="/public/assets/css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/assets/css/responsive.css'); ?>">

<!--    --><?php //echo url_for('/assets/css/responsive.css'); ?>
</head>
<body>

<div class="super_container">
    <div class="super_overlay"></div>

    <!-- Header -->

    <header class="header">

        <!-- Header Bar -->
        <div class="header_bar d-flex flex-row align-items-center justify-content-start">
            <div class="header_list">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <!-- Phone -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="assets/img/phone-call.svg" alt=""></div>
                        <span>+546 990221 123</span>
                    </li>
                    <!-- Address -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="assets/img/placeholder.svg" alt=""></div>
                        <span>Main Str, no 23, New York</span>
                    </li>
                    <!-- Email -->
                    <li class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="assets/img/envelope.svg" alt=""></div>
                        <span>hosting@contact.com</span>
                    </li>
                </ul>
            </div>
            <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
                <div class="social">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="log_reg d-flex flex-row align-items-center justify-content-start">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="#">Home<span>Search</span></a></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="listings.html">Listings</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="submit ml-auto"><a href="#">submit listing</a></div>
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>

    </header>

    <!-- Menu -->

    <div class="menu text-right">
        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="menu_log_reg">
            <div class="log_reg d-flex flex-row align-items-center justify-content-end">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <nav class="menu_nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="listings.html">Listings</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>