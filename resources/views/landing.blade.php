<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>RecruitSkill | Home</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- New Stylesheets -->

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select/nice-select.css">

    <!-- End of New Stylesheets-->

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand logo" href="/">
                                <img src="./demo/brand/logo.png" class="header-brand-img" alt="recruitskill logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about">About </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#portfolio">Portfolio</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="#how-it-works">How it Works</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="user-btn" href="/candidate">For Candidates</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background-image: url(assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">An <span>Improved</span> <b>Recruitment</b> platform</h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">RecruitSkill is an <span>AI Powered Platform</span> that seeks to improve the standard recruitment process.</p>
                            <div class="header-singup wow col-lg-8 fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                                <!-- <input type="text" placeholder="username@yourdomain.com"> -->
                                <a href="{{ route('register') }}"><button class="main-btn">Get Started</button></a>
                                <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?time_continue=2&v=J9YzcEe29d0">
                                    <span></span>
                                </a>
                            </div>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center col-lg-7 mt-5 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="image">
                    <img src="assets/images/home.png" alt="Home Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">WELCOME</h6>
                        <h3 class="title"><span>Our AI Powered Platform will </span> take care of your recruitment goal with an even better result!</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <img src="assets/images/about.png" alt="about"> -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-4">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/rightfit.png" alt="Quality Hire">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-4">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/lesstime.png" alt="Digital resume">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-8">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <img src="assets/images/about.png" alt="about"> -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-8">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <!-- <img src="assets/images/about.png" alt="about"> -->
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-4">
                    <div class="about-image mt-20 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/sort.png" alt="Sort">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== OUR SERVICE PART STAR<img src="assets/images/about.png" alt="about">T ======-->

    <!-- <section id="services" class="our-services-area pt-115">
        <div class="container">
                        <div class="header-hero-content text-center">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><b>You are using</b> <span>Free</span> Lite Version</b></h1>
                            <p style="font-size: 20px;">Please, purchase full version to get all sections, pages and features</p></br>
                            <a href="http://rebrand.ly/consult-ud" rel="nofollow" class="main-btn">Purchase Now</a>
                        </div> header hero content
        </div>
    </section> -->


    <!--====== PRICING PART START ======-->

    <!-- <section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-9">
                    <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Pricing Plans</h6>
                        <h4 class="title">Providing Best Pricing <span>For Your Business.</span></h4>
                    </div> section title -->
                <!-- </div>
            </div> row -->
            <!-- <div class="row no-gutters justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-1 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="pricing-price">
                            <span class="price"><b>50</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">20% Off</span>
                            <h4 class="title">Basic</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> single pricing
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="pricing-price">
                            <span class="price"><b>69</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">Special</span>
                            <h4 class="title">Standard</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn" href="#">Sign Up Now !</a>
                        </div>
                    </div> --> <!-- single pricing -->
                <!-- </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing text-center pricing-color-3 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="pricing-price">
                            <span class="price"><b>99</b>/m.<span class="symbol">$</span></span>
                        </div>
                        <div class="pricing-title mt-20">
                            <span class="btn">New</span>
                            <h4 class="title">Premium</h4>
                        </div>
                        <div class="pricing-list pt-20">
                            <ul>
                                <li>Full Access</li>
                                <li>Unlimited Bandwidth</li>
                                <li>50 gb Space</li>
                                <li>1 Month Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn pt-70">
                            <a class="main-btn main-btn-2" href="#">Sign Up Now !</a>
                        </div>
                    </div> single pricing -->
                <!-- </div> -->
            <!-- </div> row -->
        <!-- </div> container -->
    <!-- </section> -->

    <!--====== PRICING PART ENDS ======-->


    <!--====== BRAND PART START ======-->

    <!-- <div id="brand" class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-wrapper pt-70 clearfix">
                        <div class="single-brand mt-50 text-md-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets/images/brand-1.png" alt="brand">
                        </div> single brand -->
                        <!-- <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="assets/images/brand-2.png" alt="brand">
                        </div> single brand -->
                        <!-- <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                            <img src="assets/images/brand-3.png" alt="brand">
                        </div> --> <!-- single brand -->
                        <!-- <div class="single-brand mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/brand-4.png" alt="brand">
                        </div> single brand -->
                        <!-- <div class="single-brand mt-50 text-md-right wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <img src="assets/images/brand-5.png" alt="brand">
                        </div> single brand -->
                    <!-- </div> brand wrapper -->
                <!-- </div> -->
            <!-- </div> row -->
        <!-- </div> container -->
    <!-- </div> -->

    <!--====== BRAND PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="how-it-works" class="blog-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">How It Works!</h6>
                        <!-- <h4 class="title">Letest <span>News.</span></h4> -->
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <a href="#"><img src="assets/images/howitworks.png" alt="how-it-works"></a>
                        </div>
                        <!-- <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-1.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Isabela Moreira</p>
                                </div>
                            </div>
                        </div> -->
                    </div> <!-- single blog -->
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-2.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-2.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Elon Musk</p>
                                </div>
                            </div>
                        </div>
                    </div> single blog -->
                <!-- </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-blog mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/news-3.jpg" alt="news"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">Nulla eget urna at tortor  turpi feugiat tristique in sit.</a></h4>
                            <div class="blog-author d-flex align-items-center">
                                <div class="author-image">
                                    <img src="assets/images/author-3.jpg" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h6 class="sub-title">Posted by</h6>
                                    <p class="text">Fiona</p>
                                </div>
                            </div>
                        </div>
                    </div> single blog -->
                <!-- </div> -->
            <!-- </div> row -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="sub-title">Our Contact</h6>
                        <h4 class="title">Get In <span>Touch.</span></h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@uideck.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+99 000 1111 555</p>
                                <p class="text">+88 999 5555 444</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"><i class="lni-envelope"></i> Leave <span>A Message.</span></h4>

                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Name</label>
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Email</label>
                                        <input type="email" name="email" placeholder="Email">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Your Message</label>
                                        <textarea name="message" placeholder="Enter your message..."></textarea>
                                    </div> <!-- contact-form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Send Now</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
        <div class="container">
            <!-- <div class="footer-widget pt-30 pb-70"> -->
                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1"> -->
                        <!-- <div class="footer-about pt-40">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, repudiandae! Totam, nemo sed? Provident.</p>
                        </div> footer about -->
                    <!-- </div>
                    <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">Services</h5>
                            </div>
                            <ul>
                                <li><a href="#">Business Consultancy</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Market Analysis</a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
                        </div> footer link -->
                    <!-- </div>
                    <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">About Us</h5>
                            </div>
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Why us</a></li>
                                <li><a href="#">Awards & Recognitions</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div> footer link -->
                    <!-- </div>
                    <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                        <div class="footer-contact pt-40">
                            <div class="footer-title">
                                <h5 class="title">Contact Info</h5>
                            </div>
                            <div class="contact pt-10">
                                <p class="text">21 King Street, Melbourne </br>
                                    Victoria, 1202 Australia.</p>
                                <p class="text">support@uideck.com</p>
                                <p class="text">+99 000 555 66 22</p>

                                <ul class="social mt-40">
                                    <li><a href="#"><i class="lni-facebook"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin"></i></a></li>
                                </ul>
                            </div> contact -->
                        <!-- </div> footer contact -->
                    <!-- </div> -->
                <!-- </div> row -->
            <!-- </div> footer widget -->
            <div class="footer-contact pt-10">
                <div class="contact pt-10 text-center">
                    <ul class="social mt-40">
                        <li><a href="#"><i class="lni-facebook"></i></a></li>
                        <li><a href="#"><i class="lni-twitter"></i></a></li>
                        <li><a href="#"><i class="lni-instagram"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p class="text">Copyright © 2019 Crafted by RecruitSkill. All Rights Reserved!</p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->

    <!-- row -->


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>


    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Headroom js ======-->
    <script src="assets/js/headroom.min.js"></script>

    <!--====== Jquery Nav js ======-->
    <script src="assets/js/jquery.nav.js"></script>

    <!--====== Scroll It js ======-->
    <script src="assets/js/scrollIt.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

     <!-- New Scripts -->

    <script src="assets/js/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/stellar.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/js/counter-up/jquery.counterup.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <!-- End of New Scripts -->

</body>

</html>
