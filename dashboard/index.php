<?php
session_start();
require_once "../scripts/dbCon.php";
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    header("Location: ../index.php");
}
$queryPlan = "SELECT * FROM `ci_Users` WHERE id = '{$id}'";
$runPlan = mysqli_query($dbCon,$queryPlan);
while ($row = mysqli_fetch_assoc($runPlan)){
    $plan = $row['plan'];
}




$query = "SELECT * FROM `ci_Categories` WHERE ci_Users_id = '{$id}'";
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/material-dashboard.css?v=2.0.0">

    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
    <style>
        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 45px;
            user-select: none;
            -webkit-user-select: none;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 15px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding-top: 6px;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            display: block;
            padding-left: 15px;
            padding-right: 20px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding-top: 6px;
            text-align: center;
        }
        .select2-results__option[aria-selected] {
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-background-color="white">
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
                    <li class="nav-item active">
                        <a class="nav-link" style="background-color: orange;" href="index.php">
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
            <nav class="navbar navbar-expand-lg navbar-transparent bg-warning navbar-absolute fixed-top">
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
                                <div class="card-header card-header-warning text-center">
                                    <h4 class="card-title">Hi <span style="text-shadow: 0 0 5px #fff;"><?php echo $_SESSION['name'];?></span><br>Add a new category </h4>
                                    <p class="card-category">You have so far <span style="text-shadow: 0 0 0 #fff;"><?php echo $catNum;?></span> categories</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <form action="scripts/add_category.php" method="post" enctype="multipart/form-data" name="formCat">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <select name="catLogo" id="exampleFormControlSelect1" class="icons-fa form-control fa-select text-center" style="text-align: center;">
                                                        <option value="" disabled selected>Logo</option>
                                                        <option value="fa-500px "></option>
                                                        <option value="fa-adjust "></option>
                                                        <option value="fa-adn "></option>
                                                        <option value="fa-align-center "></option>
                                                        <option value="fa-align-justify "></option>
                                                        <option value="fa-align-left "></option>
                                                        <option value="fa-align-right "></option>
                                                        <option value="fa-amazon "></option>
                                                        <option value="fa-ambulance "></option>
                                                        <option value="fa-anchor "></option>
                                                        <option value="fa-android "></option>
                                                        <option value="fa-angellist "></option>
                                                        <option value="fa-angle-double-down "></option>
                                                        <option value="fa-angle-double-left "></option>
                                                        <option value="fa-angle-double-right "></option>
                                                        <option value="fa-angle-double-up "></option>
                                                        <option value="fa-angle-down "></option>
                                                        <option value="fa-angle-left "></option>
                                                        <option value="fa-angle-right "></option>
                                                        <option value="fa-angle-up "></option>
                                                        <option value="fa-apple "></option>
                                                        <option value="fa-archive "></option>
                                                        <option value="fa-area-chart "></option>
                                                        <option value="fa-arrow-circle-down "></option>
                                                        <option value="fa-arrow-circle-left "></option>
                                                        <option value="fa-arrow-circle-o-down "></option>
                                                        <option value="fa-arrow-circle-o-left "></option>
                                                        <option value="fa-arrow-circle-o-right "></option>
                                                        <option value="fa-arrow-circle-o-up "></option>
                                                        <option value="fa-arrow-circle-right "></option>
                                                        <option value="fa-arrow-circle-up "></option>
                                                        <option value="fa-arrow-down "></option>
                                                        <option value="fa-arrow-left "></option>
                                                        <option value="fa-arrow-right "></option>
                                                        <option value="fa-arrow-up "></option>
                                                        <option value="fa-arrows "></option>
                                                        <option value="fa-arrows-alt "></option>
                                                        <option value="fa-arrows-h "></option>
                                                        <option value="fa-arrows-v "></option>
                                                        <option value="fa-asterisk "></option>
                                                        <option value="fa-at "></option>
                                                        <option value="fa-automobile (alias) "></option>
                                                        <option value="fa-backward "></option>
                                                        <option value="fa-balance-scale "></option>
                                                        <option value="fa-ban "></option>
                                                        <option value="fa-bank (alias) "></option>
                                                        <option value="fa-bar-chart "></option>
                                                        <option value="fa-bar-chart-o (alias) "></option>
                                                        <option value="fa-barcode "></option>
                                                        <option value="fa-bars "></option>
                                                        <option value="fa-battery-0 (alias) "></option>
                                                        <option value="fa-battery-1 (alias) "></option>
                                                        <option value="fa-battery-2 (alias) "></option>
                                                        <option value="fa-battery-3 (alias) "></option>
                                                        <option value="fa-battery-4 (alias) "></option>
                                                        <option value="fa-battery-empty "></option>
                                                        <option value="fa-battery-full "></option>
                                                        <option value="fa-battery-half "></option>
                                                        <option value="fa-battery-quarter "></option>
                                                        <option value="fa-battery-three-quarters "></option>
                                                        <option value="fa-bed "></option>
                                                        <option value="fa-beer "></option>
                                                        <option value="fa-behance "></option>
                                                        <option value="fa-behance-square "></option>
                                                        <option value="fa-bell "></option>
                                                        <option value="fa-bell-o "></option>
                                                        <option value="fa-bell-slash "></option>
                                                        <option value="fa-bell-slash-o "></option>
                                                        <option value="fa-bicycle "></option>
                                                        <option value="fa-binoculars "></option>
                                                        <option value="fa-birthday-cake "></option>
                                                        <option value="fa-bitbucket "></option>
                                                        <option value="fa-bitbucket-square "></option>
                                                        <option value="fa-bitcoin (alias) "></option>
                                                        <option value="fa-black-tie "></option>
                                                        <option value="fa-bluetooth "></option>
                                                        <option value="fa-bluetooth-b "></option>
                                                        <option value="fa-bold "></option>
                                                        <option value="fa-bolt "></option>
                                                        <option value="fa-bomb "></option>
                                                        <option value="fa-book "></option>
                                                        <option value="fa-bookmark "></option>
                                                        <option value="fa-bookmark-o "></option>
                                                        <option value="fa-briefcase "></option>
                                                        <option value="fa-btc "></option>
                                                        <option value="fa-bug "></option>
                                                        <option value="fa-building "></option>
                                                        <option value="fa-building-o "></option>
                                                        <option value="fa-bullhorn "></option>
                                                        <option value="fa-bullseye "></option>
                                                        <option value="fa-bus "></option>
                                                        <option value="fa-buysellads "></option>
                                                        <option value="fa-cab (alias) "></option>
                                                        <option value="fa-calculator "></option>
                                                        <option value="fa-calendar "></option>
                                                        <option value="fa-calendar-check-o "></option>
                                                        <option value="fa-calendar-minus-o "></option>
                                                        <option value="fa-calendar-o "></option>
                                                        <option value="fa-calendar-plus-o "></option>
                                                        <option value="fa-calendar-times-o "></option>
                                                        <option value="fa-camera "></option>
                                                        <option value="fa-camera-retro "></option>
                                                        <option value="fa-car "></option>
                                                        <option value="fa-caret-down "></option>
                                                        <option value="fa-caret-left "></option>
                                                        <option value="fa-caret-right "></option>
                                                        <option value="fa-caret-square-o-down "></option>
                                                        <option value="fa-caret-square-o-left "></option>
                                                        <option value="fa-caret-square-o-right "></option>
                                                        <option value="fa-caret-square-o-up "></option>
                                                        <option value="fa-caret-up "></option>
                                                        <option value="fa-cart-arrow-down "></option>
                                                        <option value="fa-cart-plus "></option>
                                                        <option value="fa-cc "></option>
                                                        <option value="fa-cc-amex "></option>
                                                        <option value="fa-cc-diners-club "></option>
                                                        <option value="fa-cc-discover "></option>
                                                        <option value="fa-cc-jcb "></option>
                                                        <option value="fa-cc-mastercard "></option>
                                                        <option value="fa-cc-paypal "></option>
                                                        <option value="fa-cc-stripe "></option>
                                                        <option value="fa-cc-visa "></option>
                                                        <option value="fa-certificate "></option>
                                                        <option value="fa-chain (alias) "></option>
                                                        <option value="fa-chain-broken "></option>
                                                        <option value="fa-check "></option>
                                                        <option value="fa-check-circle "></option>
                                                        <option value="fa-check-circle-o "></option>
                                                        <option value="fa-check-square "></option>
                                                        <option value="fa-check-square-o "></option>
                                                        <option value="fa-chevron-circle-down "></option>
                                                        <option value="fa-chevron-circle-left "></option>
                                                        <option value="fa-chevron-circle-right "></option>
                                                        <option value="fa-chevron-circle-up "></option>
                                                        <option value="fa-chevron-down "></option>
                                                        <option value="fa-chevron-left "></option>
                                                        <option value="fa-chevron-right "></option>
                                                        <option value="fa-chevron-up "></option>
                                                        <option value="fa-child "></option>
                                                        <option value="fa-chrome "></option>
                                                        <option value="fa-circle "></option>
                                                        <option value="fa-circle-o "></option>
                                                        <option value="fa-circle-o-notch "></option>
                                                        <option value="fa-circle-thin "></option>
                                                        <option value="fa-clipboard "></option>
                                                        <option value="fa-clock-o "></option>
                                                        <option value="fa-clone "></option>
                                                        <option value="fa-close (alias) "></option>
                                                        <option value="fa-cloud "></option>
                                                        <option value="fa-cloud-download "></option>
                                                        <option value="fa-cloud-upload "></option>
                                                        <option value="fa-cny (alias) "></option>
                                                        <option value="fa-code "></option>
                                                        <option value="fa-code-fork "></option>
                                                        <option value="fa-codepen "></option>
                                                        <option value="fa-codiepie "></option>
                                                        <option value="fa-coffee "></option>
                                                        <option value="fa-cog "></option>
                                                        <option value="fa-cogs "></option>
                                                        <option value="fa-columns "></option>
                                                        <option value="fa-comment "></option>
                                                        <option value="fa-comment-o "></option>
                                                        <option value="fa-commenting "></option>
                                                        <option value="fa-commenting-o "></option>
                                                        <option value="fa-comments "></option>
                                                        <option value="fa-comments-o "></option>
                                                        <option value="fa-compass "></option>
                                                        <option value="fa-compress "></option>
                                                        <option value="fa-connectdevelop "></option>
                                                        <option value="fa-contao "></option>
                                                        <option value="fa-copy (alias) "></option>
                                                        <option value="fa-copyright "></option>
                                                        <option value="fa-creative-commons "></option>
                                                        <option value="fa-credit-card "></option>
                                                        <option value="fa-credit-card-alt "></option>
                                                        <option value="fa-crop "></option>
                                                        <option value="fa-crosshairs "></option>
                                                        <option value="fa-css3 "></option>
                                                        <option value="fa-cube "></option>
                                                        <option value="fa-cubes "></option>
                                                        <option value="fa-cut (alias) "></option>
                                                        <option value="fa-cutlery "></option>
                                                        <option value="fa-dashboard (alias) "></option>
                                                        <option value="fa-dashcube "></option>
                                                        <option value="fa-database "></option>
                                                        <option value="fa-dedent (alias) "></option>
                                                        <option value="fa-delicious "></option>
                                                        <option value="fa-desktop "></option>
                                                        <option value="fa-deviantart "></option>
                                                        <option value="fa-diamond "></option>
                                                        <option value="fa-digg "></option>
                                                        <option value="fa-dollar (alias) "></option>
                                                        <option value="fa-dot-circle-o "></option>
                                                        <option value="fa-download "></option>
                                                        <option value="fa-dribbble "></option>
                                                        <option value="fa-dropbox "></option>
                                                        <option value="fa-drupal "></option>
                                                        <option value="fa-edge "></option>
                                                        <option value="fa-edit (alias) "></option>
                                                        <option value="fa-eject "></option>
                                                        <option value="fa-ellipsis-h "></option>
                                                        <option value="fa-ellipsis-v "></option>
                                                        <option value="fa-empire "></option>
                                                        <option value="fa-envelope "></option>
                                                        <option value="fa-envelope-o "></option>
                                                        <option value="fa-envelope-square "></option>
                                                        <option value="fa-eraser "></option>
                                                        <option value="fa-eur "></option>
                                                        <option value="fa-euro (alias) "></option>
                                                        <option value="fa-exchange "></option>
                                                        <option value="fa-exclamation "></option>
                                                        <option value="fa-exclamation-circle "></option>
                                                        <option value="fa-exclamation-triangle "></option>
                                                        <option value="fa-expand "></option>
                                                        <option value="fa-expeditedssl "></option>
                                                        <option value="fa-external-link "></option>
                                                        <option value="fa-external-link-square "></option>
                                                        <option value="fa-eye "></option>
                                                        <option value="fa-eye-slash "></option>
                                                        <option value="fa-eyedropper "></option>
                                                        <option value="fa-facebook "></option>
                                                        <option value="fa-facebook-f (alias) "></option>
                                                        <option value="fa-facebook-official "></option>
                                                        <option value="fa-facebook-square "></option>
                                                        <option value="fa-fast-backward "></option>
                                                        <option value="fa-fast-forward "></option>
                                                        <option value="fa-fax "></option>
                                                        <option value="fa-feed (alias) "></option>
                                                        <option value="fa-female "></option>
                                                        <option value="fa-fighter-jet "></option>
                                                        <option value="fa-file "></option>
                                                        <option value="fa-file-archive-o "></option>
                                                        <option value="fa-file-audio-o "></option>
                                                        <option value="fa-file-code-o "></option>
                                                        <option value="fa-file-excel-o "></option>
                                                        <option value="fa-file-image-o "></option>
                                                        <option value="fa-file-movie-o (alias) "></option>
                                                        <option value="fa-file-o "></option>
                                                        <option value="fa-file-pdf-o "></option>
                                                        <option value="fa-file-photo-o (alias) "></option>
                                                        <option value="fa-file-picture-o (alias) "></option>
                                                        <option value="fa-file-powerpoint-o "></option>
                                                        <option value="fa-file-sound-o (alias) "></option>
                                                        <option value="fa-file-text "></option>
                                                        <option value="fa-file-text-o "></option>
                                                        <option value="fa-file-video-o "></option>
                                                        <option value="fa-file-word-o "></option>
                                                        <option value="fa-file-zip-o (alias) "></option>
                                                        <option value="fa-files-o "></option>
                                                        <option value="fa-film "></option>
                                                        <option value="fa-filter "></option>
                                                        <option value="fa-fire "></option>
                                                        <option value="fa-fire-extinguisher "></option>
                                                        <option value="fa-firefox "></option>
                                                        <option value="fa-flag "></option>
                                                        <option value="fa-flag-checkered "></option>
                                                        <option value="fa-flag-o "></option>
                                                        <option value="fa-flash (alias) "></option>
                                                        <option value="fa-flask "></option>
                                                        <option value="fa-flickr "></option>
                                                        <option value="fa-floppy-o "></option>
                                                        <option value="fa-folder "></option>
                                                        <option value="fa-folder-o "></option>
                                                        <option value="fa-folder-open "></option>
                                                        <option value="fa-folder-open-o "></option>
                                                        <option value="fa-font "></option>
                                                        <option value="fa-fonticons "></option>
                                                        <option value="fa-fort-awesome "></option>
                                                        <option value="fa-forumbee "></option>
                                                        <option value="fa-forward "></option>
                                                        <option value="fa-foursquare "></option>
                                                        <option value="fa-frown-o "></option>
                                                        <option value="fa-futbol-o "></option>
                                                        <option value="fa-gamepad "></option>
                                                        <option value="fa-gavel "></option>
                                                        <option value="fa-gbp "></option>
                                                        <option value="fa-ge (alias) "></option>
                                                        <option value="fa-gear (alias) "></option>
                                                        <option value="fa-gears (alias) "></option>
                                                        <option value="fa-genderless "></option>
                                                        <option value="fa-get-pocket "></option>
                                                        <option value="fa-gg "></option>
                                                        <option value="fa-gg-circle "></option>
                                                        <option value="fa-gift "></option>
                                                        <option value="fa-git "></option>
                                                        <option value="fa-git-square "></option>
                                                        <option value="fa-github "></option>
                                                        <option value="fa-github-alt "></option>
                                                        <option value="fa-github-square "></option>
                                                        <option value="fa-gittip (alias) "></option>
                                                        <option value="fa-glass "></option>
                                                        <option value="fa-globe "></option>
                                                        <option value="fa-google "></option>
                                                        <option value="fa-google-plus "></option>
                                                        <option value="fa-google-plus-square "></option>
                                                        <option value="fa-google-wallet "></option>
                                                        <option value="fa-graduation-cap "></option>
                                                        <option value="fa-gratipay "></option>
                                                        <option value="fa-group (alias) "></option>
                                                        <option value="fa-h-square "></option>
                                                        <option value="fa-hacker-news "></option>
                                                        <option value="fa-hand-grab-o (alias) "></option>
                                                        <option value="fa-hand-lizard-o "></option>
                                                        <option value="fa-hand-o-down "></option>
                                                        <option value="fa-hand-o-left "></option>
                                                        <option value="fa-hand-o-right "></option>
                                                        <option value="fa-hand-o-up "></option>
                                                        <option value="fa-hand-paper-o "></option>
                                                        <option value="fa-hand-peace-o "></option>
                                                        <option value="fa-hand-pointer-o "></option>
                                                        <option value="fa-hand-rock-o "></option>
                                                        <option value="fa-hand-scissors-o "></option>
                                                        <option value="fa-hand-spock-o "></option>
                                                        <option value="fa-hand-stop-o (alias) "></option>
                                                        <option value="fa-hashtag "></option>
                                                        <option value="fa-hdd-o "></option>
                                                        <option value="fa-header "></option>
                                                        <option value="fa-headphones "></option>
                                                        <option value="fa-heart "></option>
                                                        <option value="fa-heart-o "></option>
                                                        <option value="fa-heartbeat "></option>
                                                        <option value="fa-history "></option>
                                                        <option value="fa-home "></option>
                                                        <option value="fa-hospital-o "></option>
                                                        <option value="fa-hotel (alias) "></option>
                                                        <option value="fa-hourglass "></option>
                                                        <option value="fa-hourglass-1 (alias) "></option>
                                                        <option value="fa-hourglass-2 (alias) "></option>
                                                        <option value="fa-hourglass-3 (alias) "></option>
                                                        <option value="fa-hourglass-end "></option>
                                                        <option value="fa-hourglass-half "></option>
                                                        <option value="fa-hourglass-o "></option>
                                                        <option value="fa-hourglass-start "></option>
                                                        <option value="fa-houzz "></option>
                                                        <option value="fa-html5 "></option>
                                                        <option value="fa-i-cursor "></option>
                                                        <option value="fa-ils "></option>
                                                        <option value="fa-image (alias) "></option>
                                                        <option value="fa-inbox "></option>
                                                        <option value="fa-indent "></option>
                                                        <option value="fa-industry "></option>
                                                        <option value="fa-info "></option>
                                                        <option value="fa-info-circle "></option>
                                                        <option value="fa-inr "></option>
                                                        <option value="fa-instagram "></option>
                                                        <option value="fa-institution (alias) "></option>
                                                        <option value="fa-internet-explorer "></option>
                                                        <option value="fa-intersex (alias) "></option>
                                                        <option value="fa-ioxhost "></option>
                                                        <option value="fa-italic "></option>
                                                        <option value="fa-joomla "></option>
                                                        <option value="fa-jpy "></option>
                                                        <option value="fa-jsfiddle "></option>
                                                        <option value="fa-key "></option>
                                                        <option value="fa-keyboard-o "></option>
                                                        <option value="fa-krw "></option>
                                                        <option value="fa-language "></option>
                                                        <option value="fa-laptop "></option>
                                                        <option value="fa-lastfm "></option>
                                                        <option value="fa-lastfm-square "></option>
                                                        <option value="fa-leaf "></option>
                                                        <option value="fa-leanpub "></option>
                                                        <option value="fa-legal (alias) "></option>
                                                        <option value="fa-lemon-o "></option>
                                                        <option value="fa-level-down "></option>
                                                        <option value="fa-level-up "></option>
                                                        <option value="fa-life-bouy (alias) "></option>
                                                        <option value="fa-life-buoy (alias) "></option>
                                                        <option value="fa-life-ring "></option>
                                                        <option value="fa-life-saver (alias) "></option>
                                                        <option value="fa-lightbulb-o "></option>
                                                        <option value="fa-line-chart "></option>
                                                        <option value="fa-link "></option>
                                                        <option value="fa-linkedin "></option>
                                                        <option value="fa-linkedin-square "></option>
                                                        <option value="fa-linux "></option>
                                                        <option value="fa-list "></option>
                                                        <option value="fa-list-alt "></option>
                                                        <option value="fa-list-ol "></option>
                                                        <option value="fa-list-ul "></option>
                                                        <option value="fa-location-arrow "></option>
                                                        <option value="fa-lock "></option>
                                                        <option value="fa-long-arrow-down "></option>
                                                        <option value="fa-long-arrow-left "></option>
                                                        <option value="fa-long-arrow-right "></option>
                                                        <option value="fa-long-arrow-up "></option>
                                                        <option value="fa-magic "></option>
                                                        <option value="fa-magnet "></option>
                                                        <option value="fa-mail-forward (alias) "></option>
                                                        <option value="fa-mail-reply (alias) "></option>
                                                        <option value="fa-mail-reply-all (alias) "></option>
                                                        <option value="fa-male "></option>
                                                        <option value="fa-map "></option>
                                                        <option value="fa-map-marker "></option>
                                                        <option value="fa-map-o "></option>
                                                        <option value="fa-map-pin "></option>
                                                        <option value="fa-map-signs "></option>
                                                        <option value="fa-mars "></option>
                                                        <option value="fa-mars-double "></option>
                                                        <option value="fa-mars-stroke "></option>
                                                        <option value="fa-mars-stroke-h "></option>
                                                        <option value="fa-mars-stroke-v "></option>
                                                        <option value="fa-maxcdn "></option>
                                                        <option value="fa-meanpath "></option>
                                                        <option value="fa-medium "></option>
                                                        <option value="fa-medkit "></option>
                                                        <option value="fa-meh-o "></option>
                                                        <option value="fa-mercury "></option>
                                                        <option value="fa-microphone "></option>
                                                        <option value="fa-microphone-slash "></option>
                                                        <option value="fa-minus "></option>
                                                        <option value="fa-minus-circle "></option>
                                                        <option value="fa-minus-square "></option>
                                                        <option value="fa-minus-square-o "></option>
                                                        <option value="fa-mixcloud "></option>
                                                        <option value="fa-mobile "></option>
                                                        <option value="fa-mobile-phone (alias) "></option>
                                                        <option value="fa-modx "></option>
                                                        <option value="fa-money "></option>
                                                        <option value="fa-moon-o "></option>
                                                        <option value="fa-mortar-board (alias) "></option>
                                                        <option value="fa-motorcycle "></option>
                                                        <option value="fa-mouse-pointer "></option>
                                                        <option value="fa-music "></option>
                                                        <option value="fa-navicon (alias) "></option>
                                                        <option value="fa-neuter "></option>
                                                        <option value="fa-newspaper-o "></option>
                                                        <option value="fa-object-group "></option>
                                                        <option value="fa-object-ungroup "></option>
                                                        <option value="fa-odnoklassniki "></option>
                                                        <option value="fa-odnoklassniki-square "></option>
                                                        <option value="fa-opencart "></option>
                                                        <option value="fa-openid "></option>
                                                        <option value="fa-opera "></option>
                                                        <option value="fa-optin-monster "></option>
                                                        <option value="fa-outdent "></option>
                                                        <option value="fa-pagelines "></option>
                                                        <option value="fa-paint-brush "></option>
                                                        <option value="fa-paper-plane "></option>
                                                        <option value="fa-paper-plane-o "></option>
                                                        <option value="fa-paperclip "></option>
                                                        <option value="fa-paragraph "></option>
                                                        <option value="fa-paste (alias) "></option>
                                                        <option value="fa-pause "></option>
                                                        <option value="fa-pause-circle "></option>
                                                        <option value="fa-pause-circle-o "></option>
                                                        <option value="fa-paw "></option>
                                                        <option value="fa-paypal "></option>
                                                        <option value="fa-pencil "></option>
                                                        <option value="fa-pencil-square "></option>
                                                        <option value="fa-pencil-square-o "></option>
                                                        <option value="fa-percent "></option>
                                                        <option value="fa-phone "></option>
                                                        <option value="fa-phone-square "></option>
                                                        <option value="fa-photo (alias) "></option>
                                                        <option value="fa-picture-o "></option>
                                                        <option value="fa-pie-chart "></option>
                                                        <option value="fa-pied-piper "></option>
                                                        <option value="fa-pied-piper-alt "></option>
                                                        <option value="fa-pinterest "></option>
                                                        <option value="fa-pinterest-p "></option>
                                                        <option value="fa-pinterest-square "></option>
                                                        <option value="fa-plane "></option>
                                                        <option value="fa-play "></option>
                                                        <option value="fa-play-circle "></option>
                                                        <option value="fa-play-circle-o "></option>
                                                        <option value="fa-plug "></option>
                                                        <option value="fa-plus "></option>
                                                        <option value="fa-plus-circle "></option>
                                                        <option value="fa-plus-square "></option>
                                                        <option value="fa-plus-square-o "></option>
                                                        <option value="fa-power-off "></option>
                                                        <option value="fa-print "></option>
                                                        <option value="fa-product-hunt "></option>
                                                        <option value="fa-puzzle-piece "></option>
                                                        <option value="fa-qq "></option>
                                                        <option value="fa-qrcode "></option>
                                                        <option value="fa-question "></option>
                                                        <option value="fa-question-circle "></option>
                                                        <option value="fa-quote-left "></option>
                                                        <option value="fa-quote-right "></option>
                                                        <option value="fa-ra (alias) "></option>
                                                        <option value="fa-random "></option>
                                                        <option value="fa-rebel "></option>
                                                        <option value="fa-recycle "></option>
                                                        <option value="fa-reddit "></option>
                                                        <option value="fa-reddit-alien "></option>
                                                        <option value="fa-reddit-square "></option>
                                                        <option value="fa-refresh "></option>
                                                        <option value="fa-registered "></option>
                                                        <option value="fa-remove (alias) "></option>
                                                        <option value="fa-renren "></option>
                                                        <option value="fa-reorder (alias) "></option>
                                                        <option value="fa-repeat "></option>
                                                        <option value="fa-reply "></option>
                                                        <option value="fa-reply-all "></option>
                                                        <option value="fa-retweet "></option>
                                                        <option value="fa-rmb (alias) "></option>
                                                        <option value="fa-road "></option>
                                                        <option value="fa-rocket "></option>
                                                        <option value="fa-rotate-left (alias) "></option>
                                                        <option value="fa-rotate-right (alias) "></option>
                                                        <option value="fa-rouble (alias) "></option>
                                                        <option value="fa-rss "></option>
                                                        <option value="fa-rss-square "></option>
                                                        <option value="fa-rub "></option>
                                                        <option value="fa-ruble (alias) "></option>
                                                        <option value="fa-rupee (alias) "></option>
                                                        <option value="fa-safari "></option>
                                                        <option value="fa-save (alias) "></option>
                                                        <option value="fa-scissors "></option>
                                                        <option value="fa-scribd "></option>
                                                        <option value="fa-search "></option>
                                                        <option value="fa-search-minus "></option>
                                                        <option value="fa-search-plus "></option>
                                                        <option value="fa-sellsy "></option>
                                                        <option value="fa-send (alias) "></option>
                                                        <option value="fa-send-o (alias) "></option>
                                                        <option value="fa-server "></option>
                                                        <option value="fa-share "></option>
                                                        <option value="fa-share-alt "></option>
                                                        <option value="fa-share-alt-square "></option>
                                                        <option value="fa-share-square "></option>
                                                        <option value="fa-share-square-o "></option>
                                                        <option value="fa-shekel (alias) "></option>
                                                        <option value="fa-sheqel (alias) "></option>
                                                        <option value="fa-shield "></option>
                                                        <option value="fa-ship "></option>
                                                        <option value="fa-shirtsinbulk "></option>
                                                        <option value="fa-shopping-bag "></option>
                                                        <option value="fa-shopping-basket "></option>
                                                        <option value="fa-shopping-cart "></option>
                                                        <option value="fa-sign-in "></option>
                                                        <option value="fa-sign-out "></option>
                                                        <option value="fa-signal "></option>
                                                        <option value="fa-simplybuilt "></option>
                                                        <option value="fa-sitemap "></option>
                                                        <option value="fa-skyatlas "></option>
                                                        <option value="fa-skype "></option>
                                                        <option value="fa-slack "></option>
                                                        <option value="fa-sliders "></option>
                                                        <option value="fa-slideshare "></option>
                                                        <option value="fa-smile-o "></option>
                                                        <option value="fa-soccer-ball-o (alias) "></option>
                                                        <option value="fa-sort "></option>
                                                        <option value="fa-sort-alpha-asc "></option>
                                                        <option value="fa-sort-alpha-desc "></option>
                                                        <option value="fa-sort-amount-asc "></option>
                                                        <option value="fa-sort-amount-desc "></option>
                                                        <option value="fa-sort-asc "></option>
                                                        <option value="fa-sort-desc "></option>
                                                        <option value="fa-sort-down (alias) "></option>
                                                        <option value="fa-sort-numeric-asc "></option>
                                                        <option value="fa-sort-numeric-desc "></option>
                                                        <option value="fa-sort-up (alias) "></option>
                                                        <option value="fa-soundcloud "></option>
                                                        <option value="fa-space-shuttle "></option>
                                                        <option value="fa-spinner "></option>
                                                        <option value="fa-spoon "></option>
                                                        <option value="fa-spotify "></option>
                                                        <option value="fa-square "></option>
                                                        <option value="fa-square-o "></option>
                                                        <option value="fa-stack-exchange "></option>
                                                        <option value="fa-stack-overflow "></option>
                                                        <option value="fa-star "></option>
                                                        <option value="fa-star-half "></option>
                                                        <option value="fa-star-half-empty (alias) "></option>
                                                        <option value="fa-star-half-full (alias) "></option>
                                                        <option value="fa-star-half-o "></option>
                                                        <option value="fa-star-o "></option>
                                                        <option value="fa-steam "></option>
                                                        <option value="fa-steam-square "></option>
                                                        <option value="fa-step-backward "></option>
                                                        <option value="fa-step-forward "></option>
                                                        <option value="fa-stethoscope "></option>
                                                        <option value="fa-sticky-note "></option>
                                                        <option value="fa-sticky-note-o "></option>
                                                        <option value="fa-stop "></option>
                                                        <option value="fa-stop-circle "></option>
                                                        <option value="fa-stop-circle-o "></option>
                                                        <option value="fa-street-view "></option>
                                                        <option value="fa-strikethrough "></option>
                                                        <option value="fa-stumbleupon "></option>
                                                        <option value="fa-stumbleupon-circle "></option>
                                                        <option value="fa-subscript "></option>
                                                        <option value="fa-subway "></option>
                                                        <option value="fa-suitcase "></option>
                                                        <option value="fa-sun-o "></option>
                                                        <option value="fa-superscript "></option>
                                                        <option value="fa-support (alias) "></option>
                                                        <option value="fa-table "></option>
                                                        <option value="fa-tablet "></option>
                                                        <option value="fa-tachometer "></option>
                                                        <option value="fa-tag "></option>
                                                        <option value="fa-tags "></option>
                                                        <option value="fa-tasks "></option>
                                                        <option value="fa-taxi "></option>
                                                        <option value="fa-television "></option>
                                                        <option value="fa-tencent-weibo "></option>
                                                        <option value="fa-terminal "></option>
                                                        <option value="fa-text-height "></option>
                                                        <option value="fa-text-width "></option>
                                                        <option value="fa-th "></option>
                                                        <option value="fa-th-large "></option>
                                                        <option value="fa-th-list "></option>
                                                        <option value="fa-thumb-tack "></option>
                                                        <option value="fa-thumbs-down "></option>
                                                        <option value="fa-thumbs-o-down "></option>
                                                        <option value="fa-thumbs-o-up "></option>
                                                        <option value="fa-thumbs-up "></option>
                                                        <option value="fa-ticket "></option>
                                                        <option value="fa-times "></option>
                                                        <option value="fa-times-circle "></option>
                                                        <option value="fa-times-circle-o "></option>
                                                        <option value="fa-tint "></option>
                                                        <option value="fa-toggle-down (alias) "></option>
                                                        <option value="fa-toggle-left (alias) "></option>
                                                        <option value="fa-toggle-off "></option>
                                                        <option value="fa-toggle-on "></option>
                                                        <option value="fa-toggle-right (alias) "></option>
                                                        <option value="fa-toggle-up (alias) "></option>
                                                        <option value="fa-trademark "></option>
                                                        <option value="fa-train "></option>
                                                        <option value="fa-transgender "></option>
                                                        <option value="fa-transgender-alt "></option>
                                                        <option value="fa-trash "></option>
                                                        <option value="fa-trash-o "></option>
                                                        <option value="fa-tree "></option>
                                                        <option value="fa-trello "></option>
                                                        <option value="fa-tripadvisor "></option>
                                                        <option value="fa-trophy "></option>
                                                        <option value="fa-truck "></option>
                                                        <option value="fa-try "></option>
                                                        <option value="fa-tty "></option>
                                                        <option value="fa-tumblr "></option>
                                                        <option value="fa-tumblr-square "></option>
                                                        <option value="fa-turkish-lira (alias) "></option>
                                                        <option value="fa-tv (alias) "></option>
                                                        <option value="fa-twitch "></option>
                                                        <option value="fa-twitter "></option>
                                                        <option value="fa-twitter-square "></option>
                                                        <option value="fa-umbrella "></option>
                                                        <option value="fa-underline "></option>
                                                        <option value="fa-undo "></option>
                                                        <option value="fa-university "></option>
                                                        <option value="fa-unlink (alias) "></option>
                                                        <option value="fa-unlock "></option>
                                                        <option value="fa-unlock-alt "></option>
                                                        <option value="fa-unsorted (alias) "></option>
                                                        <option value="fa-upload "></option>
                                                        <option value="fa-usb "></option>
                                                        <option value="fa-usd "></option>
                                                        <option value="fa-user "></option>
                                                        <option value="fa-user-md "></option>
                                                        <option value="fa-user-plus "></option>
                                                        <option value="fa-user-secret "></option>
                                                        <option value="fa-user-times "></option>
                                                        <option value="fa-users "></option>
                                                        <option value="fa-venus "></option>
                                                        <option value="fa-venus-double "></option>
                                                        <option value="fa-venus-mars "></option>
                                                        <option value="fa-viacoin "></option>
                                                        <option value="fa-video-camera "></option>
                                                        <option value="fa-vimeo "></option>
                                                        <option value="fa-vimeo-square "></option>
                                                        <option value="fa-vine "></option>
                                                        <option value="fa-vk "></option>
                                                        <option value="fa-volume-down "></option>
                                                        <option value="fa-volume-off "></option>
                                                        <option value="fa-volume-up "></option>
                                                        <option value="fa-warning (alias) "></option>
                                                        <option value="fa-wechat (alias) "></option>
                                                        <option value="fa-weibo "></option>
                                                        <option value="fa-weixin "></option>
                                                        <option value="fa-whatsapp "></option>
                                                        <option value="fa-wheelchair "></option>
                                                        <option value="fa-wifi "></option>
                                                        <option value="fa-wikipedia-w "></option>
                                                        <option value="fa-windows "></option>
                                                        <option value="fa-won (alias) "></option>
                                                        <option value="fa-wordpress "></option>
                                                        <option value="fa-wrench "></option>
                                                        <option value="fa-xing "></option>
                                                        <option value="fa-xing-square "></option>
                                                        <option value="fa-y-combinator "></option>
                                                        <option value="fa-y-combinator-square (alias) "></option>
                                                        <option value="fa-yahoo "></option>
                                                        <option value="fa-yc (alias) "></option>
                                                        <option value="fa-yc-square (alias) "></option>
                                                        <option value="fa-yelp "></option>
                                                        <option value="fa-yen (alias) "></option>
                                                        <option value="fa-youtube "></option>
                                                        <option value="fa-youtube-play "></option>
                                                        <option value="fa-youtube-square "></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" for="catName">Category Name</label>
                                                    <input type="text" name="catName" id="catName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating" for="catColor">Category Color</label>
                                                    <input name="catColor" class="jscolor form-control" value="fb8c00" style="text-align: center;">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select name="privacy" id="privacy" class="privacy form-control fa-select">
                                                        <option value="0" data-icon="fa-users"> Public</option>
                                                        <option value="1" data-icon="fa-heart"> Followers</option>
                                                        <option value="2" data-icon="fa-lock"> Private</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit"  name="create_cat" class="btn btn-warning pull-right">Create Category</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">


                    <?php
                    $query = "SELECT * FROM `ci_Categories` WHERE `ci_Users_id` = '{$id}' LIMIT 4";
                    $run = mysqli_query($dbCon,$query);
                    $num = 0;
                    if(mysqli_num_rows($run) > 0){
                        while ($row = mysqli_fetch_assoc($run)){
                            $catId = $row['id'];
                            $name = $row['name'];
                            $logo = $row['logo'];
                            $color = $row['color'];
                            $visibility = $row['visibility'];

                            if($visibility == 0){
                                $visibility= 'fa-users';
                            }else if($visibility == 1){
                                $visibility= 'fa-heart';
                            }else{
                                $visibility='fa-lock';
                            }

                            $queryLinks = "SELECT * FROM `ci_Links` WHERE `ci_Categories_id` = '{$catId}'";
                            $runLinks = mysqli_query($dbCon,$queryLinks);

                            if (mysqli_num_rows($runLinks)>0){
                                $linkNum = mysqli_num_rows($runLinks);
                                $num = $num + $linkNum;
                            }else{
                                $linkNum = 0;
                            }
                            ?>



                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-icon">
                                        <div class="card-icon" style="background: #<?php echo $color;?>">
                                            <i class="fa <?php echo $logo;?>"></i>
                                        </div>
                                        <p class="card-category"><i style="font-size: 16px;width: 25px;" class="fa <?php echo $visibility;?>"></i> <?php echo $name;?></p>
                                        <h3 class="card-title"><?php echo $linkNum; ?>
                                            <small>Links</small>
                                        </h3>
                                    </div>
                                    <div class="card-footer text-center center-block">
                                        <button class="btn btn-primary" style="float: left"><i class="fa fa-folder-open"></i></button>

                                        <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                    }else{
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <p class="card-category text-center" style="color:red;font-size: 20px;padding: 20px;">You don't have any categories yet! 😱</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>


                        <?php


                        if($plan == 0){
                            if($num > 40){
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-danger card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">whatshot</i>
                                            </div>
                                            <p class="card-category text-center" style="color:red;font-size: 20px">You links list is almost full!</p>
                                            <h3 class="card-title"><?php echo $num ?>/50
                                                <small>Links</small>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons text-danger">warning</i> Get more clasps 😏
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }else if($plan == 1){
                            if($num > 65){
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-danger card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">whatshot</i>
                                            </div>
                                            <p class="card-category text-center" style="color:red;font-size: 20px">You links list is almost full!</p>
                                            <h3 class="card-title"><?php echo $num ?>/75
                                                <small>Links</small>
                                            </h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons text-danger">warning</i> Get more clasps 😏
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>



                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made to serve you by
                        <a href="http://www.el-semicolon.nl" target="_blank">El-Semicolon;</a> for an easier life.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.min.js"></script>
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

    $("#exampleFormControlSelect1 option").each(function()
    {
        var att = document.createAttribute("data-icon");
        att.value =$(this).val();
        this.setAttributeNode(att);
    });

    function iformat(icon) {
        var originalOption = icon.element;
        return $('<span><i style="font-size: 30px;" class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '</span>');
    }

    $('.icons-fa').select2({
        width: "100%",
        templateSelection: iformat,
        templateResult: iformat,
        allowHtml: true,
        minimumResultsForSearch: -1
    });

    $('.privacy').select2({
        width: "100%",
        templateSelection: iformat,
        templateResult: iformat,
        allowHtml: true,
        minimumResultsForSearch: -1
    });



</script>
</html>
