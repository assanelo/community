<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/accueil/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/accueil/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/accueil/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/accueil/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/accueil/img/ico/apple-touch-icon-57x57.png">

    <title>Contact</title>

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
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> email@domain.com</div>
                                </li>
                                <li>
                                    <div class="meta-item"><i class="fa fa-mobile"></i> +44 8780 648 605</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/accueil/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/accueil/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="accueil.php">Home </a>
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

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/accueil/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="welcome">
            <div class="section-inner nopaddingbottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">Sold old ten are quit lose deal his sent. You correct how sex several far distant believe journey parties. We shyness enquire uncivil affixed it carried to. </p>
                            <p>End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was. He families believed if no elegance interest surprise an. It abode wrong miles an so delay plate.</p>
                            <p class="mt30"><a href="#contact" class="btn btn-primary btn-theme page-scroll">Get In Touch</a></p>
                        </div>

                        <div class="col-md-6">
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform" class="main-contact-form wow">
                                <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                <input class="btn btn-primary mt30 btn-white pull-right" type="submit" name="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <script src="assets/accueil/js/jquery.js"></script>
    <script src="assets/accueil/js/bootstrap.min.js"></script>
    <script src="assets/accueil/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/accueil/js/init.js"></script>

</body>

</html>
