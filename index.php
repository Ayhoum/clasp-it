<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Clasp It</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }
        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
         .redfont{
             color: red;
         }
        .greenfont{
            color: green;
        }

    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <img src="assets/img/basic/loading.svg" alt="">
    </div>
</div>

<div id="app" class="paper-loading">
<div class="header-top hide-for-small-down">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <ul class="top-nav">
                    <li><a href="#">Privacy Terms</a></li>
                    <li class="parent"><a href="#">Help</a>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Report an issue</a></li>
                        </ul>
                    </li>
                    <li class="parent"><a href="#">Download Mobile App</a>
                        <ul>
                            <li><a href="#">Android</a></li>
                            <li><a href="#">iOS</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-5">
                <ul class="top-nav text-right">
                    <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--top header-->
<div class="nav-sticky white no-b">
    <!-- Header -->
    <nav class="mainnav navbar navbar-default justify-content-between">
       <div class="container relative">
           <a class="offcanvas dl-trigger paper-nav-toggle" type="button" data-toggle="offcanvas"
                   aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <i></i>
           </a>
           <a class="navbar-brand" href="index.php">
               <img class="d-inline-block align-top" alt="" src="assets/img/basic/logo.png">
           </a>
           <div class="paper_menu">
               <div id="dl-menu" class="xv-menuwrapper responsive-menu">
    <ul class="dl-menu align-items-center">
        <li><a href="#">Home</a></li>
        <li class="parent megamenu"><a href="#">Features <span class="badge badge-danger">New</span></a>
            <ul class="lg-submenu">
                <li><a>Pages With ...</a></li>
                <li><a>Bootstrap Elements</a></li>
                <li><a>Paper Elements</a></li>
                <li><a>UI Elements <span class="badge badge-danger">Shortcodes</span></a></li>
            </ul>
        </li>
        <li class="parent megamenu"><a href="#"><i class="icon icon-shopping-bag2"></i>Shop</a>
            <ul class="lg-submenu">
                <li><a><i class="icon icon-shopping-bag2 s-24"></i>Shop Pages</a>
                    <ul class="lg-submenu">
                        <li><a href="home-shop.html">Shop Home <span class="badge badge-warning">unique</span></a>
                        </li>
                        <li><a href="shop.html">Shop Simple</a>
                        </li>
                        <li><a href="shop-single.html">Product Detail <span class="badge badge-danger">hot</span></a>
                        </li>
                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                        </li>
                        <li><a href="register.html">login/signup</a>
                        </li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                        </li>
                        <li><a href="password-recovery.html">Forgot Password</a>
                        </li>
                        <li><a href="cart.html">Cart <span class="badge">11 items</span></a>
                        </li>
                        <li><a href="checkout.html">Check out</a>
                        </li>
                    </ul>
                    <a href="/home10-shop.html" class="btn btn-success">
                        <i class="icon icon-shopping-bag2 s-24"></i> Shop Now</a>
                </li>
                <li>
                    <div>
                        <div class="text-center">
                            <p><strong> Best Sale Offer</strong> <span class="badge badge-danger">30% Off Today</span>
                            </p>
                        </div>
                        <figure>
                            <img src="assets/img/demo/ipad.png" alt="">
                        </figure>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="#modalLogin" data-toggle="modal" data-target="#modalLogin">
            Login
        </a>
        </li>
        <li><a href="#modalSignUp" class="btn btn-primary nav-btn" data-toggle="modal"
               data-target="#modalSignUp">Sign Up</a>
        </li>
    </ul>
</div>
<!-- Login modal -->
           </div>
       </div>
    </nav>
</div>
<main>
    <!-- slider -->
    <section>
        <div class="xv-slider-wrap text-white" style="background-image:url('assets/img/dummy/b1.jpg');">
            <div class="lightSlider"
                 data-item="1"
                 data-pager="false"
                 data-slide-margin="0"
                 data-gallery="false"
                 data-pause="8000"
                 data-pauseonhover="true"
                 data-auto="true"
                 data-loop="true">
                <div class="xv-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white ">
                                    <h1>Paper Social App</h1>
                                    <p>Sed eget orci eleifend enim mattis suscipit. Suspendisse potenti non ipsum.</p>
                                    <div
                                            class="p-t-40"><a href="#" class="btn btn-img">
                                        <img src="assets/img/basic/btn-appstore.png" alt=""> </a>
                                        <a
                                                href="#" class="btn btn-img">
                                            <img src="assets/img/basic/btn-googleplay.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-sm-down col-lg-6 fadeInLeft animated">
                                <img src="assets/img/demo/slider/iphone.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xv-slide">
                    <div class="container">
                        <div class="row">
                            <div class="hidden-sm-down col-lg-6 fadeInLeft animated">
                                <img src="assets/img/demo/slider/rocket.png" alt="">
                            </div>
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1>Paper Booster</h1>
                                    <p>When we designed MacBook Pro with Retina display, we started with a blank
                                        slate. That gave us the freedom to imagine something radical, something
                                        entirely different.</p>
                                    <div class="p-t-40"><a href="#" class="btn btn-primary btn-lg">Buy Now 19$</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xv-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 fadeInRight animated">
                                <div class="xv-slider-content clearfix color-white">
                                    <h1>Paper Pages</h1>
                                    <p>When we designed MacBook Pro with Retina display, we started with a blank
                                        slate. That gave us the freedom</p>
                                    <div class="p-t-40"><a href="#" class="btn btn-primary btn-lg">Buy Now 19$</a>
                                        <a href="#"
                                           class="btn btn-success btn-lg">View All Demos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden-sm-down col-lg-6 fadeInLeft animated">
                                <img src="assets/img/demo/slider/desktop.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider Wrap-->
    </section>
    <!-- service block -->
    <section class="p-t-b-40 service-blocks animatedParent animateOnce">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-block clearfix">
                        <div class="service-icon"><i class="icon icon-cloud-fog2"></i>
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Air transportation</a></h3>
                            <p>Dynamically leverage existing synergistic systems whereas future-proof
                                sources Synergistically formulate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-block">
                        <div class="service-icon"><i class="icon icon-rainbow2"></i>
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Paper Service Heading</a></h3>
                            <p>Dynamically leverage existing synergistic systems whereas future-proof
                                sources Synergistically formulate</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-block clearfix">
                        <div class="service-icon"><i class="icon icon-sailing-boat-water"></i>
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Trucking</a></h3>
                            <p>Uniquely supply collaborative schemas via fully researched metrics. Credibly
                                exploit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content block -->
    <section class="p-t-b-40 animatedParent animateOnce responsive">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="service-featured-thumbs">
                        <div class="service-thumb animated fadeInUpShort"><a href="#" class="img-link">
                            <img src="assets/img/demo/i1.png" alt="service">
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="service-featured-content p-t-b-40">
                        <h3 class="fadeInUpShort animated">Uniquaely productivate plug imperatives.</h3>
                        <br>
                        <p class="fadeInUpShort animated">Appropriately integrate proactive content before effective
                            models. Quickly
                            enable just in time scenarios after turnkey mindshare. Proactively pursue
                            best-of-breed e-markets and stand-alone markets. Globally harness resource
                            maximizing sources without backend communities.</p>
                        <br>
                        <p class="fadeInUpShort animated">Globally harness resource maximizing sources without backend
                            communities.</p>
                        <br> <a href="#" class="btn btn-primary btn-lg fadeInUpShort animated">View More information</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team -->
    <section class="p-t-b-40 ">
        <div class="container">
            <div class="lightSlider" data-item="4" data-item-lg="3" data-item-md="2"
                 data-item-sm="1">
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u1.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u2.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u4.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u5.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u1.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
                <div class="paper-block text-center">
                    <img class="p-b-20 rounded-circle" src="assets/img/dummy/u2.png" alt="">
                    <h5>Doe Joe</h5>
                    <p>Designer</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content block -->
    <section class="p-b-40 p-t-40 animatedParent animateOnce responsive">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="service-featured-content p-t-b-40">
                        <h3 class="fadeInUpShort animated">Uniquaely productivate plug imperatives.</h3>
                        <br>
                        <p class="fadeInUpShort animated">Appropriately integrate proactive content before effective
                            models. Quickly
                            enable just in time scenarios after turnkey mindshare. Proactively pursue
                            best-of-breed e-markets and stand-alone markets. Globally harness resource
                            maximizing sources without backend communities.</p>
                        <br>
                        <p class="fadeInUpShort animated">Globally harness resource maximizing sources without backend
                            communities.</p>
                        <br> <a href="#" class="btn btn-primary btn-lg fadeInUpShort animated">View More information</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="service-featured-thumbs">
                        <div class="service-thumb animated fadeInUpShort"><a href="#" class="img-link">
                            <img src="assets/img/demo/i2.png" alt="service">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials -->
    <section class="testimonial p-t-b-100 gradient text-white">
        <div class="container">
            <div class="col-lg-10 mx-md-auto">
                <div class="text-center">
                    <h3>Satisfied Customers</h3>
                </div>
                <ul id="lightSliderGallery" class="lightSlider" data-gallery="true" data-item="1"
                    data-loop="true" data-thumbitem="6" data-controls="false" data-position="middle">
                    <li data-thumb="assets/img/dummy/u1.png">
                        <div class="p-t-40 p-b-40 m-b-50 ">
                            <p class="text-white"><i class="icon icon-snowflake-o"></i> Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque
                                sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</p>
                            <a
                                    class="test-web" href="#">JOhn Doe - <span>website.com</span>
                            </a>
                        </div>
                    </li>
                    <li data-thumb="assets/img/dummy/u2.png">
                        <div class="p-t-40 p-b-40 m-b-50 ">
                            <p class="text-white"><i class="icon icon-thumbs-o-up"></i> Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque
                                sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</p>
                            <a
                                    class="test-web" href="#">JOhn Doe - <span>website.com</span>
                            </a>
                        </div>
                    </li>
                    <li data-thumb="assets/img/dummy/u5.png">
                        <div class="p-t-40 p-b-40 m-b-50 ">
                            <p class="text-white"><i class="icon icon-quote-left"></i> Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque
                                sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</p>
                            <a
                                    class="test-web" href="#">JOhn Doe - <span>website.com</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- pricing tables -->
    <section class="pricing">
        <div class="container">
            <header class="section-heading">
                <h3>Plan &amp; Pricings</h3>
                <p>Get your cost effective plan today with awesome fetures</p>
            </header>
            <div class="row">
                <div class="col-lg-3">
                    <div class="pricebox">
                        <h4 class="title">Basic - Package</h4>
                        <span class="price">10</span>
                        <span class="dollar">$</span>
                        <span class="slash">/</span>
                        <span
                                class="month">month</span>
                        <ul>
                            <li>1 Web Site Design</li>
                            <li>1 Logo Design</li>
                            <li>5 HTML Pages</li>
                            <li><b>10</b> Email Accounts</li>
                            <li><b>Unlimited</b> subdomains</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-lg">Select Plan</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pricebox pro text-white">
                        <h4 class="title">Pro - Package</h4>
                        <span class="price">20</span>
                        <span class="dollar">$</span>
                        <span class="slash">/</span>
                        <span
                                class="month">month</span>
                        <ul>
                            <li>1 Web Site Design</li>
                            <li><b>5GB</b> Disk Space</li>
                            <li><b>50GB</b> Bandwidth</li>
                            <li><b>10</b> Email Accounts</li>
                            <li><b>Unlimited</b> subdomains</li>
                        </ul>
                        <a href="#" class="btn btn-success btn-lg">Select Plan</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pricebox">
                        <h4 class="title">Multiuser - Package</h4>
                        <span class="price">40</span>
                        <span class="dollar">$</span>
                        <span class="slash">/</span>
                        <span
                                class="month">month</span>
                        <ul>
                            <li>1 Web Site Design</li>
                            <li>1 Logo Design</li>
                            <li>5 HTML Pages</li>
                            <li><b>5GB</b> Disk Space</li>
                            <li><b>Unlimited</b> subdomains</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-lg">Select Plan</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="pricebox extended">
                        <h4 class="title">Extended - Package</h4>
                        <span class="price">60</span>
                        <span class="dollar">$</span>
                        <span class="slash">/</span>
                        <span
                                class="month">month</span>
                        <ul>
                            <li>1 Web Site Design</li>
                            <li>1 Logo Design</li>
                            <li>5 HTML Pages</li>
                            <li><b>5GB</b> Disk Space</li>
                            <li><b>Unlimited</b> subdomains</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-lg">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Clients-->
    <section class="clients">
        <div class="container">
            <header class="section-heading">
                <h3>Trusted Clients</h3>
                <p>Our Clients love our application here are some clients</p>
            </header>
            <div class="clients-slider">
                <ul class="lightSlider" data-item="5" data-controls="false" data-auto="true"
                    data-item-lg="4" data-item-md="3" data-item-sm="2">
                    <li>
                        <img src="assets/img/dummy/c1.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/dummy/c2.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/dummy/c3.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/dummy/c4.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/dummy/c5.png" alt="">
                    </li>
                    <li>
                        <img src="assets/img/dummy/c1.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class=" col-lg-2 col-xl-3 col-12 responsive-phone"><a href="#" class="brand">
                <img src="assets/img/basic/logo.png" alt="Knowledge">
                <span class="circle"></span>
            </a>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>Knowledgebase</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6  col-md-4 col-lg-2">
                <h6>About Us</h6>
                <ul class="footer-links">
                    <li><a href="#">Features</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Community</a>
                    </li>
                    <li><a href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-12 col-12 col-xl-3 responsive-phone">
                <h6>Connect via Social</h6>
                <ul class="social">
                    <li class="facebook"><a href="#"><i class="icon icon-facebook"></i></a>
                    </li>
                    <li class="twitter"><a href="#"><i class="icon icon-twitter"></i></a>
                    </li>
                    <li class="gplus"><a href="#"><i class="icon icon-google-plus"></i></a>
                    </li>
                </ul>
                <div class="copyrights">
                    <p>&#xA9; 2016 knowledge Copyrights</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Login modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog width-400" role="document">
        <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                            class="paper-nav-toggle active"><i></i></a>
            <div
                    class="modal-body no-p">
                <div class="text-center p-40 p-b-0">
                    <img src="assets/img/dummy/u4.png" alt="">
                    <h3>Welcome Back</h3>
                    <p class="p-t-b-20">Hey Clasper! welcome back sign in now there is lot of stuff waiting for you</p>
                </div>
                <div class="light p-40 b-t-b">
                    <form action="scripts/loginUser.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                            <input name="email" type="text" class="form-control form-control-lg"
                                   placeholder="Email Address">
                        </div>
                        <div class="form-group has-icon"><i class="icon-user-secret"></i>
                            <input name="pass" type="password" class="form-control form-control-lg"
                                   placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit_Login" value="Log In">
                        <small class="forget-pass">Have you forgot your username or password?</small>
                    </form>
                </div>
                <div class="p-40">
                    <a href="#" class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i> Login with Facebook</a>
                    <a href="#" class="btn btn-lg btn-block btn-social gplus"><i class="icon-google-plus"></i> Login with Google</a>
                    <a href="#" class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with Twitter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SignUp modal -->
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                            class="paper-nav-toggle active"><i></i></a>
            <div
                    class="modal-body no-p">
                <div class="row">
                    <div class="col-lg-5 grid">
                        <div class="p-40">
                            <h5 class="p-t-40">Sign Up Using Social Account</h5>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p>
                            <a href="#" class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i> Login with Facebook</a>
                            <a href="#" class="btn btn-lg btn-block btn-social gplus"><i class="icon-google-plus"></i> Login with Google</a>
                            <a href="#" class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with Twitter</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="light p-t-b-40">
                            <div class="p-40">
                                <?php
                                if(isset($_GET['new'])){
                                ?>
                                    <p style="font-size: 15px;color: #515d68;">It seems that you are not registered by us, so,</p>
                                <?php
                                }
                                ?>
                                <h5 class="p-b-20">Create New User Account</h5>
                                <form action="scripts/newUser.php" name="signUpForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                    <div class="form-group has-icon"><i class="icon-user-circle"></i>
                                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                        <input type="email" id="emailArea" class="form-control form-control-lg" name="email" placeholder="Email Address" onchange="checkAvailability();" required>
                                    </div>
                                    <p class="text-center" id="checkEmailError" class=""></p>
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input id="pass1" type="password" class="form-control form-control-lg" name="password1" placeholder="Password" required>
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-repeat"></i>
                                        <input id="pass2" type="password" class="form-control form-control-lg" name="password2" placeholder="Confirm Password" required>
                                    </div>
                                    <p class="text-center" id="errorPass"></p>
                                    <input type="submit" id="regBut" class="btn btn-primary btn-lg btn-block" name="submit_Signup" value="Sign Up Now">
                                    <p class="forget-pass">A verification email wil be sent to you</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Confirm Note -->
    <div class="modal fade" id="modalCon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog width-400" role="document">
            <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                class="paper-nav-toggle active"><i></i></a>
                <div
                        class="modal-body no-p">
                    <div class="text-center p-40 p-b-0">
                        <img src="assets/img/dummy/mail.png" alt="">
                        <h3 class="p-t-b-20">Welcome to our family!</h3>
                        <p>Please check your email to confirm your account.</p>
                        <p>Then, You Can Start!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDone" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog width-400" role="document">
            <div class="modal-content no-r "><a href="#" onclick="$('#modalLogin').modal();" data-dismiss="modal" aria-label="Close"
                                                class="paper-nav-toggle active"><i></i></a>
                <div
                        class="modal-body no-p">
                    <div class="text-center p-40 p-b-0">
                        <img src="assets/img/dummy/done.png" alt="">
                        <h3 class="p-t-b-20">Perfect!</h3>
                        <p>You can now login to your account 😄</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalUncon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog width-400" role="document">
            <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                class="paper-nav-toggle active"><i></i></a>
                <div
                        class="modal-body no-p">
                    <div class="text-center p-40 p-b-0">
                        <img src="assets/img/dummy/uncon.png" alt="">
                        <h3 class="p-t-b-20">Unfortunately!</h3>
                        <p>You have to confirm your account first!</p>
                        <p>Check your email 😉</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Page page_wrrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/app.js"></script>
<?php
if(isset($_GET['reg'])){
    echo "<script>$('#modalCon').modal();</script>";
}
if(isset($_GET['new'])){
    echo "<script>$('#modalSignUp').modal();</script>";
}
if(isset($_GET['con'])){
    echo "<script>$('#modalDone').modal();</script>";
}
if(isset($_GET['uncon'])){
    echo "<script>$('#modalUncon').modal();</script>";
}
?>
<script>

    function validateForm(){
        var c=document.forms["signUpForm"]["password1"].value;
        var d=document.forms["signUpForm"]["password2"].value;
            if(c != d){
                $("#errorPass").append("Passwords do not match");
                $("#errorPass").css("color","red");
                return false;
            }
    }
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    function checkAvailability(){
        var email = $("#emailArea").val();
        if(validateEmail(email)){
            $.post('scripts/handle_email.php?email='+email,function(response){

                if(response > 0){
                    $('#checkEmailError').html("This email is already registered!");
                    $('#checkEmailError').removeClass('greenfont');
                    $('#checkEmailError').addClass('redfont');
                    $("#regBut").prop("disabled",true);
                }else{
                    $('#checkEmailError').html("This email is available!");
                    $('#checkEmailError').removeClass('redfont');
                    $('#checkEmailError').addClass('greenfont');
                    $("#regBut").prop("disabled",false);
                }
            });
        }else{
            $('#checkEmailError').html("Enter a valid Email Address!");
            $('#checkEmailError').removeClass('greenfont');
            $('#checkEmailError').addClass('redfont');
            $("#regBut").prop("disabled",true);

        }
    }

    $(document).ready(function () {
        $("#emailArea").keyup(checkAvailability);
    });

</script>
</body>
</html>