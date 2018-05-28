<?php
session_start();
require_once "../scripts/dbCon.php";
$id = $_SESSION['id'];
$query = "SELECT * FROM `Categories` WHERE Users_id = '{$id}'";
$run = mysqli_query($dbCon,$query);

$catNum = mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="icon" href="img/favicon.png">
    <title>
        Material Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/material-dashboard.css?v=2.0.0">

    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">apps</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="notifications.php">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="categories.php">
                            <i class="material-icons">dashboard</i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item active-pro">
                        <a class="nav-link" href="profile.php">
                            <i class="material-icons">person</i>
                            <p>My Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">person</i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">Add a new category <span style="text-shadow: 0 0 5px #fff;"><?php echo $_SESSION['name'];?></span></h4>
                                    <p class="card-category">You have so far <span style="text-shadow: 0 0 5px #fff;"><?php echo $catNum;?></span> categories</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Category Name</label>
                                                    <input type="text" name="catName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Category Logo</label>
                                                    <select name="catLogo" id="exampleFormControlSelect1" class="icons-fa form-control">
                                                        <option value="fa-500px ">500px </option>
                                                        <option value="fa-adjust ">adjust </option>
                                                        <option value="fa-adn ">adn </option>
                                                        <option value="fa-align-center ">align-center </option>
                                                        <option value="fa-align-justify ">align-justify </option>
                                                        <option value="fa-align-left ">align-left </option>
                                                        <option value="fa-align-right ">align-right </option>
                                                        <option value="fa-amazon ">amazon </option>
                                                        <option value="fa-ambulance ">ambulance </option>
                                                        <option value="fa-anchor ">anchor </option>
                                                        <option value="fa-android ">android </option>
                                                        <option value="fa-angellist ">angellist </option>
                                                        <option value="fa-angle-double-down ">angle-double-down </option>
                                                        <option value="fa-angle-double-left ">angle-double-left </option>
                                                        <option value="fa-angle-double-right ">angle-double-right </option>
                                                        <option value="fa-angle-double-up ">angle-double-up </option>
                                                        <option value="fa-angle-down ">angle-down </option>
                                                        <option value="fa-angle-left ">angle-left </option>
                                                        <option value="fa-angle-right ">angle-right </option>
                                                        <option value="fa-angle-up ">angle-up </option>
                                                        <option value="fa-apple ">apple </option>
                                                        <option value="fa-archive ">archive </option>
                                                        <option value="fa-area-chart ">area-chart </option>
                                                        <option value="fa-arrow-circle-down ">arrow-circle-down </option>
                                                        <option value="fa-arrow-circle-left ">arrow-circle-left </option>
                                                        <option value="fa-arrow-circle-o-down ">arrow-circle-o-down </option>
                                                        <option value="fa-arrow-circle-o-left ">arrow-circle-o-left </option>
                                                        <option value="fa-arrow-circle-o-right ">arrow-circle-o-right </option>
                                                        <option value="fa-arrow-circle-o-up ">arrow-circle-o-up </option>
                                                        <option value="fa-arrow-circle-right ">arrow-circle-right </option>
                                                        <option value="fa-arrow-circle-up ">arrow-circle-up </option>
                                                        <option value="fa-arrow-down ">arrow-down </option>
                                                        <option value="fa-arrow-left ">arrow-left </option>
                                                        <option value="fa-arrow-right ">arrow-right </option>
                                                        <option value="fa-arrow-up ">arrow-up </option>
                                                        <option value="fa-arrows ">arrows </option>
                                                        <option value="fa-arrows-alt ">arrows-alt </option>
                                                        <option value="fa-arrows-h ">arrows-h </option>
                                                        <option value="fa-arrows-v ">arrows-v </option>
                                                        <option value="fa-asterisk ">asterisk </option>
                                                        <option value="fa-at ">at </option>
                                                        <option value="fa-automobile (alias) ">automobile (alias) </option>
                                                        <option value="fa-backward ">backward </option>
                                                        <option value="fa-balance-scale ">balance-scale </option>
                                                        <option value="fa-ban ">ban </option>
                                                        <option value="fa-bank (alias) ">bank (alias) </option>
                                                        <option value="fa-bar-chart ">bar-chart </option>
                                                        <option value="fa-bar-chart-o (alias) ">bar-chart-o (alias) </option>
                                                        <option value="fa-barcode ">barcode </option>
                                                        <option value="fa-bars ">bars </option>
                                                        <option value="fa-battery-0 (alias) ">battery-0 (alias) </option>
                                                        <option value="fa-battery-1 (alias) ">battery-1 (alias) </option>
                                                        <option value="fa-battery-2 (alias) ">battery-2 (alias) </option>
                                                        <option value="fa-battery-3 (alias) ">battery-3 (alias) </option>
                                                        <option value="fa-battery-4 (alias) ">battery-4 (alias) </option>
                                                        <option value="fa-battery-empty ">battery-empty </option>
                                                        <option value="fa-battery-full ">battery-full </option>
                                                        <option value="fa-battery-half ">battery-half </option>
                                                        <option value="fa-battery-quarter ">battery-quarter </option>
                                                        <option value="fa-battery-three-quarters ">battery-three-quarters </option>
                                                        <option value="fa-bed ">bed </option>
                                                        <option value="fa-beer ">beer </option>
                                                        <option value="fa-behance ">behance </option>
                                                        <option value="fa-behance-square ">behance-square </option>
                                                        <option value="fa-bell ">bell </option>
                                                        <option value="fa-bell-o ">bell-o </option>
                                                        <option value="fa-bell-slash ">bell-slash </option>
                                                        <option value="fa-bell-slash-o ">bell-slash-o </option>
                                                        <option value="fa-bicycle ">bicycle </option>
                                                        <option value="fa-binoculars ">binoculars </option>
                                                        <option value="fa-birthday-cake ">birthday-cake </option>
                                                        <option value="fa-bitbucket ">bitbucket </option>
                                                        <option value="fa-bitbucket-square ">bitbucket-square </option>
                                                        <option value="fa-bitcoin (alias) ">bitcoin (alias) </option>
                                                        <option value="fa-black-tie ">black-tie </option>
                                                        <option value="fa-bluetooth ">bluetooth </option>
                                                        <option value="fa-bluetooth-b ">bluetooth-b </option>
                                                        <option value="fa-bold ">bold </option>
                                                        <option value="fa-bolt ">bolt </option>
                                                        <option value="fa-bomb ">bomb </option>
                                                        <option value="fa-book ">book </option>
                                                        <option value="fa-bookmark ">bookmark </option>
                                                        <option value="fa-bookmark-o ">bookmark-o </option>
                                                        <option value="fa-briefcase ">briefcase </option>
                                                        <option value="fa-btc ">btc </option>
                                                        <option value="fa-bug ">bug </option>
                                                        <option value="fa-building ">building </option>
                                                        <option value="fa-building-o ">building-o </option>
                                                        <option value="fa-bullhorn ">bullhorn </option>
                                                        <option value="fa-bullseye ">bullseye </option>
                                                        <option value="fa-bus ">bus </option>
                                                        <option value="fa-buysellads ">buysellads </option>
                                                        <option value="fa-cab (alias) ">cab (alias) </option>
                                                        <option value="fa-calculator ">calculator </option>
                                                        <option value="fa-calendar ">calendar </option>
                                                        <option value="fa-calendar-check-o ">calendar-check-o </option>
                                                        <option value="fa-calendar-minus-o ">calendar-minus-o </option>
                                                        <option value="fa-calendar-o ">calendar-o </option>
                                                        <option value="fa-calendar-plus-o ">calendar-plus-o </option>
                                                        <option value="fa-calendar-times-o ">calendar-times-o </option>
                                                        <option value="fa-camera ">camera </option>
                                                        <option value="fa-camera-retro ">camera-retro </option>
                                                        <option value="fa-car ">car </option>
                                                        <option value="fa-caret-down ">caret-down </option>
                                                        <option value="fa-caret-left ">caret-left </option>
                                                        <option value="fa-caret-right ">caret-right </option>
                                                        <option value="fa-caret-square-o-down ">caret-square-o-down </option>
                                                        <option value="fa-caret-square-o-left ">caret-square-o-left </option>
                                                        <option value="fa-caret-square-o-right ">caret-square-o-right </option>
                                                        <option value="fa-caret-square-o-up ">caret-square-o-up </option>
                                                        <option value="fa-caret-up ">caret-up </option>
                                                        <option value="fa-cart-arrow-down ">cart-arrow-down </option>
                                                        <option value="fa-cart-plus ">cart-plus </option>
                                                        <option value="fa-cc ">cc </option>
                                                        <option value="fa-cc-amex ">cc-amex </option>
                                                        <option value="fa-cc-diners-club ">cc-diners-club </option>
                                                        <option value="fa-cc-discover ">cc-discover </option>
                                                        <option value="fa-cc-jcb ">cc-jcb </option>
                                                        <option value="fa-cc-mastercard ">cc-mastercard </option>
                                                        <option value="fa-cc-paypal ">cc-paypal </option>
                                                        <option value="fa-cc-stripe ">cc-stripe </option>
                                                        <option value="fa-cc-visa ">cc-visa </option>
                                                        <option value="fa-certificate ">certificate </option>
                                                        <option value="fa-chain (alias) ">chain (alias) </option>
                                                        <option value="fa-chain-broken ">chain-broken </option>
                                                        <option value="fa-check ">check </option>
                                                        <option value="fa-check-circle ">check-circle </option>
                                                        <option value="fa-check-circle-o ">check-circle-o </option>
                                                        <option value="fa-check-square ">check-square </option>
                                                        <option value="fa-check-square-o ">check-square-o </option>
                                                        <option value="fa-chevron-circle-down ">chevron-circle-down </option>
                                                        <option value="fa-chevron-circle-left ">chevron-circle-left </option>
                                                        <option value="fa-chevron-circle-right ">chevron-circle-right </option>
                                                        <option value="fa-chevron-circle-up ">chevron-circle-up </option>
                                                        <option value="fa-chevron-down ">chevron-down </option>
                                                        <option value="fa-chevron-left ">chevron-left </option>
                                                        <option value="fa-chevron-right ">chevron-right </option>
                                                        <option value="fa-chevron-up ">chevron-up </option>
                                                        <option value="fa-child ">child </option>
                                                        <option value="fa-chrome ">chrome </option>
                                                        <option value="fa-circle ">circle </option>
                                                        <option value="fa-circle-o ">circle-o </option>
                                                        <option value="fa-circle-o-notch ">circle-o-notch </option>
                                                        <option value="fa-circle-thin ">circle-thin </option>
                                                        <option value="fa-clipboard ">clipboard </option>
                                                        <option value="fa-clock-o ">clock-o </option>
                                                        <option value="fa-clone ">clone </option>
                                                        <option value="fa-close (alias) ">close (alias) </option>
                                                        <option value="fa-cloud ">cloud </option>
                                                        <option value="fa-cloud-download ">cloud-download </option>
                                                        <option value="fa-cloud-upload ">cloud-upload </option>
                                                        <option value="fa-cny (alias) ">cny (alias) </option>
                                                        <option value="fa-code ">code </option>
                                                        <option value="fa-code-fork ">code-fork </option>
                                                        <option value="fa-codepen ">codepen </option>
                                                        <option value="fa-codiepie ">codiepie </option>
                                                        <option value="fa-coffee ">coffee </option>
                                                        <option value="fa-cog ">cog </option>
                                                        <option value="fa-cogs ">cogs </option>
                                                        <option value="fa-columns ">columns </option>
                                                        <option value="fa-comment ">comment </option>
                                                        <option value="fa-comment-o ">comment-o </option>
                                                        <option value="fa-commenting ">commenting </option>
                                                        <option value="fa-commenting-o ">commenting-o </option>
                                                        <option value="fa-comments ">comments </option>
                                                        <option value="fa-comments-o ">comments-o </option>
                                                        <option value="fa-compass ">compass </option>
                                                        <option value="fa-compress ">compress </option>
                                                        <option value="fa-connectdevelop ">connectdevelop </option>
                                                        <option value="fa-contao ">contao </option>
                                                        <option value="fa-copy (alias) ">copy (alias) </option>
                                                        <option value="fa-copyright ">copyright </option>
                                                        <option value="fa-creative-commons ">creative-commons </option>
                                                        <option value="fa-credit-card ">credit-card </option>
                                                        <option value="fa-credit-card-alt ">credit-card-alt </option>
                                                        <option value="fa-crop ">crop </option>
                                                        <option value="fa-crosshairs ">crosshairs </option>
                                                        <option value="fa-css3 ">css3 </option>
                                                        <option value="fa-cube ">cube </option>
                                                        <option value="fa-cubes ">cubes </option>
                                                        <option value="fa-cut (alias) ">cut (alias) </option>
                                                        <option value="fa-cutlery ">cutlery </option>
                                                        <option value="fa-dashboard (alias) ">dashboard (alias) </option>
                                                        <option value="fa-dashcube ">dashcube </option>
                                                        <option value="fa-database ">database </option>
                                                        <option value="fa-dedent (alias) ">dedent (alias) </option>
                                                        <option value="fa-delicious ">delicious </option>
                                                        <option value="fa-desktop ">desktop </option>
                                                        <option value="fa-deviantart ">deviantart </option>
                                                        <option value="fa-diamond ">diamond </option>
                                                        <option value="fa-digg ">digg </option>
                                                        <option value="fa-dollar (alias) ">dollar (alias) </option>
                                                        <option value="fa-dot-circle-o ">dot-circle-o </option>
                                                        <option value="fa-download ">download </option>
                                                        <option value="fa-dribbble ">dribbble </option>
                                                        <option value="fa-dropbox ">dropbox </option>
                                                        <option value="fa-drupal ">drupal </option>
                                                        <option value="fa-edge ">edge </option>
                                                        <option value="fa-edit (alias) ">edit (alias) </option>
                                                        <option value="fa-eject ">eject </option>
                                                        <option value="fa-ellipsis-h ">ellipsis-h </option>
                                                        <option value="fa-ellipsis-v ">ellipsis-v </option>
                                                        <option value="fa-empire ">empire </option>
                                                        <option value="fa-envelope ">envelope </option>
                                                        <option value="fa-envelope-o ">envelope-o </option>
                                                        <option value="fa-envelope-square ">envelope-square </option>
                                                        <option value="fa-eraser ">eraser </option>
                                                        <option value="fa-eur ">eur </option>
                                                        <option value="fa-euro (alias) ">euro (alias) </option>
                                                        <option value="fa-exchange ">exchange </option>
                                                        <option value="fa-exclamation ">exclamation </option>
                                                        <option value="fa-exclamation-circle ">exclamation-circle </option>
                                                        <option value="fa-exclamation-triangle ">exclamation-triangle </option>
                                                        <option value="fa-expand ">expand </option>
                                                        <option value="fa-expeditedssl ">expeditedssl </option>
                                                        <option value="fa-external-link ">external-link </option>
                                                        <option value="fa-external-link-square ">external-link-square </option>
                                                        <option value="fa-eye ">eye </option>
                                                        <option value="fa-eye-slash ">eye-slash </option>
                                                        <option value="fa-eyedropper ">eyedropper </option>
                                                        <option value="fa-facebook ">facebook </option>
                                                        <option value="fa-facebook-f (alias) ">facebook-f (alias) </option>
                                                        <option value="fa-facebook-official ">facebook-official </option>
                                                        <option value="fa-facebook-square ">facebook-square </option>
                                                        <option value="fa-fast-backward ">fast-backward </option>
                                                        <option value="fa-fast-forward ">fast-forward </option>
                                                        <option value="fa-fax ">fax </option>
                                                        <option value="fa-feed (alias) ">feed (alias) </option>
                                                        <option value="fa-female ">female </option>
                                                        <option value="fa-fighter-jet ">fighter-jet </option>
                                                        <option value="fa-file ">file </option>
                                                        <option value="fa-file-archive-o ">file-archive-o </option>
                                                        <option value="fa-file-audio-o ">file-audio-o </option>
                                                        <option value="fa-file-code-o ">file-code-o </option>
                                                        <option value="fa-file-excel-o ">file-excel-o </option>
                                                        <option value="fa-file-image-o ">file-image-o </option>
                                                        <option value="fa-file-movie-o (alias) ">file-movie-o (alias) </option>
                                                        <option value="fa-file-o ">file-o </option>
                                                        <option value="fa-file-pdf-o ">file-pdf-o </option>
                                                        <option value="fa-file-photo-o (alias) ">file-photo-o (alias) </option>
                                                        <option value="fa-file-picture-o (alias) ">file-picture-o (alias) </option>
                                                        <option value="fa-file-powerpoint-o ">file-powerpoint-o </option>
                                                        <option value="fa-file-sound-o (alias) ">file-sound-o (alias) </option>
                                                        <option value="fa-file-text ">file-text </option>
                                                        <option value="fa-file-text-o ">file-text-o </option>
                                                        <option value="fa-file-video-o ">file-video-o </option>
                                                        <option value="fa-file-word-o ">file-word-o </option>
                                                        <option value="fa-file-zip-o (alias) ">file-zip-o (alias) </option>
                                                        <option value="fa-files-o ">files-o </option>
                                                        <option value="fa-film ">film </option>
                                                        <option value="fa-filter ">filter </option>
                                                        <option value="fa-fire ">fire </option>
                                                        <option value="fa-fire-extinguisher ">fire-extinguisher </option>
                                                        <option value="fa-firefox ">firefox </option>
                                                        <option value="fa-flag ">flag </option>
                                                        <option value="fa-flag-checkered ">flag-checkered </option>
                                                        <option value="fa-flag-o ">flag-o </option>
                                                        <option value="fa-flash (alias) ">flash (alias) </option>
                                                        <option value="fa-flask ">flask </option>
                                                        <option value="fa-flickr ">flickr </option>
                                                        <option value="fa-floppy-o ">floppy-o </option>
                                                        <option value="fa-folder ">folder </option>
                                                        <option value="fa-folder-o ">folder-o </option>
                                                        <option value="fa-folder-open ">folder-open </option>
                                                        <option value="fa-folder-open-o ">folder-open-o </option>
                                                        <option value="fa-font ">font </option>
                                                        <option value="fa-fonticons ">fonticons </option>
                                                        <option value="fa-fort-awesome ">fort-awesome </option>
                                                        <option value="fa-forumbee ">forumbee </option>
                                                        <option value="fa-forward ">forward </option>
                                                        <option value="fa-foursquare ">foursquare </option>
                                                        <option value="fa-frown-o ">frown-o </option>
                                                        <option value="fa-futbol-o ">futbol-o </option>
                                                        <option value="fa-gamepad ">gamepad </option>
                                                        <option value="fa-gavel ">gavel </option>
                                                        <option value="fa-gbp ">gbp </option>
                                                        <option value="fa-ge (alias) ">ge (alias) </option>
                                                        <option value="fa-gear (alias) ">gear (alias) </option>
                                                        <option value="fa-gears (alias) ">gears (alias) </option>
                                                        <option value="fa-genderless ">genderless </option>
                                                        <option value="fa-get-pocket ">get-pocket </option>
                                                        <option value="fa-gg ">gg </option>
                                                        <option value="fa-gg-circle ">gg-circle </option>
                                                        <option value="fa-gift ">gift </option>
                                                        <option value="fa-git ">git </option>
                                                        <option value="fa-git-square ">git-square </option>
                                                        <option value="fa-github ">github </option>
                                                        <option value="fa-github-alt ">github-alt </option>
                                                        <option value="fa-github-square ">github-square </option>
                                                        <option value="fa-gittip (alias) ">gittip (alias) </option>
                                                        <option value="fa-glass ">glass </option>
                                                        <option value="fa-globe ">globe </option>
                                                        <option value="fa-google ">google </option>
                                                        <option value="fa-google-plus ">google-plus </option>
                                                        <option value="fa-google-plus-square ">google-plus-square </option>
                                                        <option value="fa-google-wallet ">google-wallet </option>
                                                        <option value="fa-graduation-cap ">graduation-cap </option>
                                                        <option value="fa-gratipay ">gratipay </option>
                                                        <option value="fa-group (alias) ">group (alias) </option>
                                                        <option value="fa-h-square ">h-square </option>
                                                        <option value="fa-hacker-news ">hacker-news </option>
                                                        <option value="fa-hand-grab-o (alias) ">hand-grab-o (alias) </option>
                                                        <option value="fa-hand-lizard-o ">hand-lizard-o </option>
                                                        <option value="fa-hand-o-down ">hand-o-down </option>
                                                        <option value="fa-hand-o-left ">hand-o-left </option>
                                                        <option value="fa-hand-o-right ">hand-o-right </option>
                                                        <option value="fa-hand-o-up ">hand-o-up </option>
                                                        <option value="fa-hand-paper-o ">hand-paper-o </option>
                                                        <option value="fa-hand-peace-o ">hand-peace-o </option>
                                                        <option value="fa-hand-pointer-o ">hand-pointer-o </option>
                                                        <option value="fa-hand-rock-o ">hand-rock-o </option>
                                                        <option value="fa-hand-scissors-o ">hand-scissors-o </option>
                                                        <option value="fa-hand-spock-o ">hand-spock-o </option>
                                                        <option value="fa-hand-stop-o (alias) ">hand-stop-o (alias) </option>
                                                        <option value="fa-hashtag ">hashtag </option>
                                                        <option value="fa-hdd-o ">hdd-o </option>
                                                        <option value="fa-header ">header </option>
                                                        <option value="fa-headphones ">headphones </option>
                                                        <option value="fa-heart ">heart </option>
                                                        <option value="fa-heart-o ">heart-o </option>
                                                        <option value="fa-heartbeat ">heartbeat </option>
                                                        <option value="fa-history ">history </option>
                                                        <option value="fa-home ">home </option>
                                                        <option value="fa-hospital-o ">hospital-o </option>
                                                        <option value="fa-hotel (alias) ">hotel (alias) </option>
                                                        <option value="fa-hourglass ">hourglass </option>
                                                        <option value="fa-hourglass-1 (alias) ">hourglass-1 (alias) </option>
                                                        <option value="fa-hourglass-2 (alias) ">hourglass-2 (alias) </option>
                                                        <option value="fa-hourglass-3 (alias) ">hourglass-3 (alias) </option>
                                                        <option value="fa-hourglass-end ">hourglass-end </option>
                                                        <option value="fa-hourglass-half ">hourglass-half </option>
                                                        <option value="fa-hourglass-o ">hourglass-o </option>
                                                        <option value="fa-hourglass-start ">hourglass-start </option>
                                                        <option value="fa-houzz ">houzz </option>
                                                        <option value="fa-html5 ">html5 </option>
                                                        <option value="fa-i-cursor ">i-cursor </option>
                                                        <option value="fa-ils ">ils </option>
                                                        <option value="fa-image (alias) ">image (alias) </option>
                                                        <option value="fa-inbox ">inbox </option>
                                                        <option value="fa-indent ">indent </option>
                                                        <option value="fa-industry ">industry </option>
                                                        <option value="fa-info ">info </option>
                                                        <option value="fa-info-circle ">info-circle </option>
                                                        <option value="fa-inr ">inr </option>
                                                        <option value="fa-instagram ">instagram </option>
                                                        <option value="fa-institution (alias) ">institution (alias) </option>
                                                        <option value="fa-internet-explorer ">internet-explorer </option>
                                                        <option value="fa-intersex (alias) ">intersex (alias) </option>
                                                        <option value="fa-ioxhost ">ioxhost </option>
                                                        <option value="fa-italic ">italic </option>
                                                        <option value="fa-joomla ">joomla </option>
                                                        <option value="fa-jpy ">jpy </option>
                                                        <option value="fa-jsfiddle ">jsfiddle </option>
                                                        <option value="fa-key ">key </option>
                                                        <option value="fa-keyboard-o ">keyboard-o </option>
                                                        <option value="fa-krw ">krw </option>
                                                        <option value="fa-language ">language </option>
                                                        <option value="fa-laptop ">laptop </option>
                                                        <option value="fa-lastfm ">lastfm </option>
                                                        <option value="fa-lastfm-square ">lastfm-square </option>
                                                        <option value="fa-leaf ">leaf </option>
                                                        <option value="fa-leanpub ">leanpub </option>
                                                        <option value="fa-legal (alias) ">legal (alias) </option>
                                                        <option value="fa-lemon-o ">lemon-o </option>
                                                        <option value="fa-level-down ">level-down </option>
                                                        <option value="fa-level-up ">level-up </option>
                                                        <option value="fa-life-bouy (alias) ">life-bouy (alias) </option>
                                                        <option value="fa-life-buoy (alias) ">life-buoy (alias) </option>
                                                        <option value="fa-life-ring ">life-ring </option>
                                                        <option value="fa-life-saver (alias) ">life-saver (alias) </option>
                                                        <option value="fa-lightbulb-o ">lightbulb-o </option>
                                                        <option value="fa-line-chart ">line-chart </option>
                                                        <option value="fa-link ">link </option>
                                                        <option value="fa-linkedin ">linkedin </option>
                                                        <option value="fa-linkedin-square ">linkedin-square </option>
                                                        <option value="fa-linux ">linux </option>
                                                        <option value="fa-list ">list </option>
                                                        <option value="fa-list-alt ">list-alt </option>
                                                        <option value="fa-list-ol ">list-ol </option>
                                                        <option value="fa-list-ul ">list-ul </option>
                                                        <option value="fa-location-arrow ">location-arrow </option>
                                                        <option value="fa-lock ">lock </option>
                                                        <option value="fa-long-arrow-down ">long-arrow-down </option>
                                                        <option value="fa-long-arrow-left ">long-arrow-left </option>
                                                        <option value="fa-long-arrow-right ">long-arrow-right </option>
                                                        <option value="fa-long-arrow-up ">long-arrow-up </option>
                                                        <option value="fa-magic ">magic </option>
                                                        <option value="fa-magnet ">magnet </option>
                                                        <option value="fa-mail-forward (alias) ">mail-forward (alias) </option>
                                                        <option value="fa-mail-reply (alias) ">mail-reply (alias) </option>
                                                        <option value="fa-mail-reply-all (alias) ">mail-reply-all (alias) </option>
                                                        <option value="fa-male ">male </option>
                                                        <option value="fa-map ">map </option>
                                                        <option value="fa-map-marker ">map-marker </option>
                                                        <option value="fa-map-o ">map-o </option>
                                                        <option value="fa-map-pin ">map-pin </option>
                                                        <option value="fa-map-signs ">map-signs </option>
                                                        <option value="fa-mars ">mars </option>
                                                        <option value="fa-mars-double ">mars-double </option>
                                                        <option value="fa-mars-stroke ">mars-stroke </option>
                                                        <option value="fa-mars-stroke-h ">mars-stroke-h </option>
                                                        <option value="fa-mars-stroke-v ">mars-stroke-v </option>
                                                        <option value="fa-maxcdn ">maxcdn </option>
                                                        <option value="fa-meanpath ">meanpath </option>
                                                        <option value="fa-medium ">medium </option>
                                                        <option value="fa-medkit ">medkit </option>
                                                        <option value="fa-meh-o ">meh-o </option>
                                                        <option value="fa-mercury ">mercury </option>
                                                        <option value="fa-microphone ">microphone </option>
                                                        <option value="fa-microphone-slash ">microphone-slash </option>
                                                        <option value="fa-minus ">minus </option>
                                                        <option value="fa-minus-circle ">minus-circle </option>
                                                        <option value="fa-minus-square ">minus-square </option>
                                                        <option value="fa-minus-square-o ">minus-square-o </option>
                                                        <option value="fa-mixcloud ">mixcloud </option>
                                                        <option value="fa-mobile ">mobile </option>
                                                        <option value="fa-mobile-phone (alias) ">mobile-phone (alias) </option>
                                                        <option value="fa-modx ">modx </option>
                                                        <option value="fa-money ">money </option>
                                                        <option value="fa-moon-o ">moon-o </option>
                                                        <option value="fa-mortar-board (alias) ">mortar-board (alias) </option>
                                                        <option value="fa-motorcycle ">motorcycle </option>
                                                        <option value="fa-mouse-pointer ">mouse-pointer </option>
                                                        <option value="fa-music ">music </option>
                                                        <option value="fa-navicon (alias) ">navicon (alias) </option>
                                                        <option value="fa-neuter ">neuter </option>
                                                        <option value="fa-newspaper-o ">newspaper-o </option>
                                                        <option value="fa-object-group ">object-group </option>
                                                        <option value="fa-object-ungroup ">object-ungroup </option>
                                                        <option value="fa-odnoklassniki ">odnoklassniki </option>
                                                        <option value="fa-odnoklassniki-square ">odnoklassniki-square </option>
                                                        <option value="fa-opencart ">opencart </option>
                                                        <option value="fa-openid ">openid </option>
                                                        <option value="fa-opera ">opera </option>
                                                        <option value="fa-optin-monster ">optin-monster </option>
                                                        <option value="fa-outdent ">outdent </option>
                                                        <option value="fa-pagelines ">pagelines </option>
                                                        <option value="fa-paint-brush ">paint-brush </option>
                                                        <option value="fa-paper-plane ">paper-plane </option>
                                                        <option value="fa-paper-plane-o ">paper-plane-o </option>
                                                        <option value="fa-paperclip ">paperclip </option>
                                                        <option value="fa-paragraph ">paragraph </option>
                                                        <option value="fa-paste (alias) ">paste (alias) </option>
                                                        <option value="fa-pause ">pause </option>
                                                        <option value="fa-pause-circle ">pause-circle </option>
                                                        <option value="fa-pause-circle-o ">pause-circle-o </option>
                                                        <option value="fa-paw ">paw </option>
                                                        <option value="fa-paypal ">paypal </option>
                                                        <option value="fa-pencil ">pencil </option>
                                                        <option value="fa-pencil-square ">pencil-square </option>
                                                        <option value="fa-pencil-square-o ">pencil-square-o </option>
                                                        <option value="fa-percent ">percent </option>
                                                        <option value="fa-phone ">phone </option>
                                                        <option value="fa-phone-square ">phone-square </option>
                                                        <option value="fa-photo (alias) ">photo (alias) </option>
                                                        <option value="fa-picture-o ">picture-o </option>
                                                        <option value="fa-pie-chart ">pie-chart </option>
                                                        <option value="fa-pied-piper ">pied-piper </option>
                                                        <option value="fa-pied-piper-alt ">pied-piper-alt </option>
                                                        <option value="fa-pinterest ">pinterest </option>
                                                        <option value="fa-pinterest-p ">pinterest-p </option>
                                                        <option value="fa-pinterest-square ">pinterest-square </option>
                                                        <option value="fa-plane ">plane </option>
                                                        <option value="fa-play ">play </option>
                                                        <option value="fa-play-circle ">play-circle </option>
                                                        <option value="fa-play-circle-o ">play-circle-o </option>
                                                        <option value="fa-plug ">plug </option>
                                                        <option value="fa-plus ">plus </option>
                                                        <option value="fa-plus-circle ">plus-circle </option>
                                                        <option value="fa-plus-square ">plus-square </option>
                                                        <option value="fa-plus-square-o ">plus-square-o </option>
                                                        <option value="fa-power-off ">power-off </option>
                                                        <option value="fa-print ">print </option>
                                                        <option value="fa-product-hunt ">product-hunt </option>
                                                        <option value="fa-puzzle-piece ">puzzle-piece </option>
                                                        <option value="fa-qq ">qq </option>
                                                        <option value="fa-qrcode ">qrcode </option>
                                                        <option value="fa-question ">question </option>
                                                        <option value="fa-question-circle ">question-circle </option>
                                                        <option value="fa-quote-left ">quote-left </option>
                                                        <option value="fa-quote-right ">quote-right </option>
                                                        <option value="fa-ra (alias) ">ra (alias) </option>
                                                        <option value="fa-random ">random </option>
                                                        <option value="fa-rebel ">rebel </option>
                                                        <option value="fa-recycle ">recycle </option>
                                                        <option value="fa-reddit ">reddit </option>
                                                        <option value="fa-reddit-alien ">reddit-alien </option>
                                                        <option value="fa-reddit-square ">reddit-square </option>
                                                        <option value="fa-refresh ">refresh </option>
                                                        <option value="fa-registered ">registered </option>
                                                        <option value="fa-remove (alias) ">remove (alias) </option>
                                                        <option value="fa-renren ">renren </option>
                                                        <option value="fa-reorder (alias) ">reorder (alias) </option>
                                                        <option value="fa-repeat ">repeat </option>
                                                        <option value="fa-reply ">reply </option>
                                                        <option value="fa-reply-all ">reply-all </option>
                                                        <option value="fa-retweet ">retweet </option>
                                                        <option value="fa-rmb (alias) ">rmb (alias) </option>
                                                        <option value="fa-road ">road </option>
                                                        <option value="fa-rocket ">rocket </option>
                                                        <option value="fa-rotate-left (alias) ">rotate-left (alias) </option>
                                                        <option value="fa-rotate-right (alias) ">rotate-right (alias) </option>
                                                        <option value="fa-rouble (alias) ">rouble (alias) </option>
                                                        <option value="fa-rss ">rss </option>
                                                        <option value="fa-rss-square ">rss-square </option>
                                                        <option value="fa-rub ">rub </option>
                                                        <option value="fa-ruble (alias) ">ruble (alias) </option>
                                                        <option value="fa-rupee (alias) ">rupee (alias) </option>
                                                        <option value="fa-safari ">safari </option>
                                                        <option value="fa-save (alias) ">save (alias) </option>
                                                        <option value="fa-scissors ">scissors </option>
                                                        <option value="fa-scribd ">scribd </option>
                                                        <option value="fa-search ">search </option>
                                                        <option value="fa-search-minus ">search-minus </option>
                                                        <option value="fa-search-plus ">search-plus </option>
                                                        <option value="fa-sellsy ">sellsy </option>
                                                        <option value="fa-send (alias) ">send (alias) </option>
                                                        <option value="fa-send-o (alias) ">send-o (alias) </option>
                                                        <option value="fa-server ">server </option>
                                                        <option value="fa-share ">share </option>
                                                        <option value="fa-share-alt ">share-alt </option>
                                                        <option value="fa-share-alt-square ">share-alt-square </option>
                                                        <option value="fa-share-square ">share-square </option>
                                                        <option value="fa-share-square-o ">share-square-o </option>
                                                        <option value="fa-shekel (alias) ">shekel (alias) </option>
                                                        <option value="fa-sheqel (alias) ">sheqel (alias) </option>
                                                        <option value="fa-shield ">shield </option>
                                                        <option value="fa-ship ">ship </option>
                                                        <option value="fa-shirtsinbulk ">shirtsinbulk </option>
                                                        <option value="fa-shopping-bag ">shopping-bag </option>
                                                        <option value="fa-shopping-basket ">shopping-basket </option>
                                                        <option value="fa-shopping-cart ">shopping-cart </option>
                                                        <option value="fa-sign-in ">sign-in </option>
                                                        <option value="fa-sign-out ">sign-out </option>
                                                        <option value="fa-signal ">signal </option>
                                                        <option value="fa-simplybuilt ">simplybuilt </option>
                                                        <option value="fa-sitemap ">sitemap </option>
                                                        <option value="fa-skyatlas ">skyatlas </option>
                                                        <option value="fa-skype ">skype </option>
                                                        <option value="fa-slack ">slack </option>
                                                        <option value="fa-sliders ">sliders </option>
                                                        <option value="fa-slideshare ">slideshare </option>
                                                        <option value="fa-smile-o ">smile-o </option>
                                                        <option value="fa-soccer-ball-o (alias) ">soccer-ball-o (alias) </option>
                                                        <option value="fa-sort ">sort </option>
                                                        <option value="fa-sort-alpha-asc ">sort-alpha-asc </option>
                                                        <option value="fa-sort-alpha-desc ">sort-alpha-desc </option>
                                                        <option value="fa-sort-amount-asc ">sort-amount-asc </option>
                                                        <option value="fa-sort-amount-desc ">sort-amount-desc </option>
                                                        <option value="fa-sort-asc ">sort-asc </option>
                                                        <option value="fa-sort-desc ">sort-desc </option>
                                                        <option value="fa-sort-down (alias) ">sort-down (alias) </option>
                                                        <option value="fa-sort-numeric-asc ">sort-numeric-asc </option>
                                                        <option value="fa-sort-numeric-desc ">sort-numeric-desc </option>
                                                        <option value="fa-sort-up (alias) ">sort-up (alias) </option>
                                                        <option value="fa-soundcloud ">soundcloud </option>
                                                        <option value="fa-space-shuttle ">space-shuttle </option>
                                                        <option value="fa-spinner ">spinner </option>
                                                        <option value="fa-spoon ">spoon </option>
                                                        <option value="fa-spotify ">spotify </option>
                                                        <option value="fa-square ">square </option>
                                                        <option value="fa-square-o ">square-o </option>
                                                        <option value="fa-stack-exchange ">stack-exchange </option>
                                                        <option value="fa-stack-overflow ">stack-overflow </option>
                                                        <option value="fa-star ">star </option>
                                                        <option value="fa-star-half ">star-half </option>
                                                        <option value="fa-star-half-empty (alias) ">star-half-empty (alias) </option>
                                                        <option value="fa-star-half-full (alias) ">star-half-full (alias) </option>
                                                        <option value="fa-star-half-o ">star-half-o </option>
                                                        <option value="fa-star-o ">star-o </option>
                                                        <option value="fa-steam ">steam </option>
                                                        <option value="fa-steam-square ">steam-square </option>
                                                        <option value="fa-step-backward ">step-backward </option>
                                                        <option value="fa-step-forward ">step-forward </option>
                                                        <option value="fa-stethoscope ">stethoscope </option>
                                                        <option value="fa-sticky-note ">sticky-note </option>
                                                        <option value="fa-sticky-note-o ">sticky-note-o </option>
                                                        <option value="fa-stop ">stop </option>
                                                        <option value="fa-stop-circle ">stop-circle </option>
                                                        <option value="fa-stop-circle-o ">stop-circle-o </option>
                                                        <option value="fa-street-view ">street-view </option>
                                                        <option value="fa-strikethrough ">strikethrough </option>
                                                        <option value="fa-stumbleupon ">stumbleupon </option>
                                                        <option value="fa-stumbleupon-circle ">stumbleupon-circle </option>
                                                        <option value="fa-subscript ">subscript </option>
                                                        <option value="fa-subway ">subway </option>
                                                        <option value="fa-suitcase ">suitcase </option>
                                                        <option value="fa-sun-o ">sun-o </option>
                                                        <option value="fa-superscript ">superscript </option>
                                                        <option value="fa-support (alias) ">support (alias) </option>
                                                        <option value="fa-table ">table </option>
                                                        <option value="fa-tablet ">tablet </option>
                                                        <option value="fa-tachometer ">tachometer </option>
                                                        <option value="fa-tag ">tag </option>
                                                        <option value="fa-tags ">tags </option>
                                                        <option value="fa-tasks ">tasks </option>
                                                        <option value="fa-taxi ">taxi </option>
                                                        <option value="fa-television ">television </option>
                                                        <option value="fa-tencent-weibo ">tencent-weibo </option>
                                                        <option value="fa-terminal ">terminal </option>
                                                        <option value="fa-text-height ">text-height </option>
                                                        <option value="fa-text-width ">text-width </option>
                                                        <option value="fa-th ">th </option>
                                                        <option value="fa-th-large ">th-large </option>
                                                        <option value="fa-th-list ">th-list </option>
                                                        <option value="fa-thumb-tack ">thumb-tack </option>
                                                        <option value="fa-thumbs-down ">thumbs-down </option>
                                                        <option value="fa-thumbs-o-down ">thumbs-o-down </option>
                                                        <option value="fa-thumbs-o-up ">thumbs-o-up </option>
                                                        <option value="fa-thumbs-up ">thumbs-up </option>
                                                        <option value="fa-ticket ">ticket </option>
                                                        <option value="fa-times ">times </option>
                                                        <option value="fa-times-circle ">times-circle </option>
                                                        <option value="fa-times-circle-o ">times-circle-o </option>
                                                        <option value="fa-tint ">tint </option>
                                                        <option value="fa-toggle-down (alias) ">toggle-down (alias) </option>
                                                        <option value="fa-toggle-left (alias) ">toggle-left (alias) </option>
                                                        <option value="fa-toggle-off ">toggle-off </option>
                                                        <option value="fa-toggle-on ">toggle-on </option>
                                                        <option value="fa-toggle-right (alias) ">toggle-right (alias) </option>
                                                        <option value="fa-toggle-up (alias) ">toggle-up (alias) </option>
                                                        <option value="fa-trademark ">trademark </option>
                                                        <option value="fa-train ">train </option>
                                                        <option value="fa-transgender ">transgender </option>
                                                        <option value="fa-transgender-alt ">transgender-alt </option>
                                                        <option value="fa-trash ">trash </option>
                                                        <option value="fa-trash-o ">trash-o </option>
                                                        <option value="fa-tree ">tree </option>
                                                        <option value="fa-trello ">trello </option>
                                                        <option value="fa-tripadvisor ">tripadvisor </option>
                                                        <option value="fa-trophy ">trophy </option>
                                                        <option value="fa-truck ">truck </option>
                                                        <option value="fa-try ">try </option>
                                                        <option value="fa-tty ">tty </option>
                                                        <option value="fa-tumblr ">tumblr </option>
                                                        <option value="fa-tumblr-square ">tumblr-square </option>
                                                        <option value="fa-turkish-lira (alias) ">turkish-lira (alias) </option>
                                                        <option value="fa-tv (alias) ">tv (alias) </option>
                                                        <option value="fa-twitch ">twitch </option>
                                                        <option value="fa-twitter ">twitter </option>
                                                        <option value="fa-twitter-square ">twitter-square </option>
                                                        <option value="fa-umbrella ">umbrella </option>
                                                        <option value="fa-underline ">underline </option>
                                                        <option value="fa-undo ">undo </option>
                                                        <option value="fa-university ">university </option>
                                                        <option value="fa-unlink (alias) ">unlink (alias) </option>
                                                        <option value="fa-unlock ">unlock </option>
                                                        <option value="fa-unlock-alt ">unlock-alt </option>
                                                        <option value="fa-unsorted (alias) ">unsorted (alias) </option>
                                                        <option value="fa-upload ">upload </option>
                                                        <option value="fa-usb ">usb </option>
                                                        <option value="fa-usd ">usd </option>
                                                        <option value="fa-user ">user </option>
                                                        <option value="fa-user-md ">user-md </option>
                                                        <option value="fa-user-plus ">user-plus </option>
                                                        <option value="fa-user-secret ">user-secret </option>
                                                        <option value="fa-user-times ">user-times </option>
                                                        <option value="fa-users ">users </option>
                                                        <option value="fa-venus ">venus </option>
                                                        <option value="fa-venus-double ">venus-double </option>
                                                        <option value="fa-venus-mars ">venus-mars </option>
                                                        <option value="fa-viacoin ">viacoin </option>
                                                        <option value="fa-video-camera ">video-camera </option>
                                                        <option value="fa-vimeo ">vimeo </option>
                                                        <option value="fa-vimeo-square ">vimeo-square </option>
                                                        <option value="fa-vine ">vine </option>
                                                        <option value="fa-vk ">vk </option>
                                                        <option value="fa-volume-down ">volume-down </option>
                                                        <option value="fa-volume-off ">volume-off </option>
                                                        <option value="fa-volume-up ">volume-up </option>
                                                        <option value="fa-warning (alias) ">warning (alias) </option>
                                                        <option value="fa-wechat (alias) ">wechat (alias) </option>
                                                        <option value="fa-weibo ">weibo </option>
                                                        <option value="fa-weixin ">weixin </option>
                                                        <option value="fa-whatsapp ">whatsapp </option>
                                                        <option value="fa-wheelchair ">wheelchair </option>
                                                        <option value="fa-wifi ">wifi </option>
                                                        <option value="fa-wikipedia-w ">wikipedia-w </option>
                                                        <option value="fa-windows ">windows </option>
                                                        <option value="fa-won (alias) ">won (alias) </option>
                                                        <option value="fa-wordpress ">wordpress </option>
                                                        <option value="fa-wrench ">wrench </option>
                                                        <option value="fa-xing ">xing </option>
                                                        <option value="fa-xing-square ">xing-square </option>
                                                        <option value="fa-y-combinator ">y-combinator </option>
                                                        <option value="fa-y-combinator-square (alias) ">y-combinator-square (alias) </option>
                                                        <option value="fa-yahoo ">yahoo </option>
                                                        <option value="fa-yc (alias) ">yc (alias) </option>
                                                        <option value="fa-yc-square (alias) ">yc-square (alias) </option>
                                                        <option value="fa-yelp ">yelp </option>
                                                        <option value="fa-yen (alias) ">yen (alias) </option>
                                                        <option value="fa-youtube ">youtube </option>
                                                        <option value="fa-youtube-play ">youtube-play </option>
                                                        <option value="fa-youtube-square ">youtube-square </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Category Name</label>
                                                    <input type="text" name="catName" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group" style="font-size: 45px;">
                                                    <label class="bmd-label-floating">Logo Preview</label>
                                                    <div id="view-fa"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">Used Space</p>
                                    <h3 class="card-title">49/50
                                        <small>GB</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Get More Space...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">Revenue</p>
                                    <h3 class="card-title">$34,245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">Fixed Issues</p>
                                    <h3 class="card-title">75</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Github
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <p class="card-category">Followers</p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-tabs card-header-primary">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Tasks:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                                        <i class="material-icons">bug_report</i> Bugs
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                                        <i class="material-icons">code</i> Website
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                                        <i class="material-icons">cloud</i> Server
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-warning">
                                    <h4 class="card-title">Employees Stats</h4>
                                    <p class="card-category">New employees on 15th September, 2016</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>

<script src="js/core/popper.min.js"></script>
<script src="js/bootstrap-material-design.js"></script>
<script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });


</script>
<script>
    $(document).ready(function(){
        /* Detect any change of option*/
        $(".icons-fa").change(function(){
            var icono = $(this).val();
            $("#view-fa").html('<i class="fa '+icono+'"></i>');
        });

        /* simulate an change on select */
        $(".icons-fa").change();
    });
</script>
</html>
