<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/logo.png">
    <link rel="apple-touch-icon" href="assets/img/logo.png">

    <title>ESP - Chat</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/accueil/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/accueil/css/animate.css" rel="stylesheet">
    <link href="assets/accueil/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/accueil/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/accueil/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/accueil/css/pe-icons.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/accueil/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/accueil/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/accueil/img/logo_reverse.png" alt="logo"></a>-->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="login.php">Connexion</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s"></div>
                    <!--<div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Take a look our <span class="rotate">awesome home pages, sexy portfolio items, flexible blog examples</span></div>-->
                </div>
            </div>
        </header>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="widget mb50">
                    <div class="tagcloud">
                        <a href="admin_dashboard/login.php" class="tag-link btn btn-theme btn-xs">Administrateur</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/accueil/js/jquery.js"></script>
    <script src="assets/accueil/js/bootstrap.min.js"></script>
    <script src="assets/accueil/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/accueil/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/bg1.jpg",
            "assets/img/bg2.jpg",
            "assets/img/bg3.webp",
            "assets/img/bg2_admin.jpg"
        ], {
            duration: 10000,
            fade: 500
        });
    });
    </script>

</body>

</html>
