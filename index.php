<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Gaurav, Gaurav Chhapliyal, portfolio, profile">
    <title>Gaurav Chhapliyal</title>
    <link rel="icon" href="./img/portfolio/photo.jpeg" type="image/jpeg">


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">
    <script src="https://kit.fontawesome.com/8ffc2c8bda.js" crossorigin="anonymous"></script>
    <style>
        .services {
            height: 100%;
        }
    </style>
</head>

<body>
    <?php
if(isset($_GET["status"])){
if($_GET["status"]=="ok"){?>
    <div class="alert alert-success alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your Message is sent successfully
    </div>
    <?php
}else if($_GET["status"]=="no"){?>
    <div class="alert alert-danger alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Failure</strong> System encountered an issue while sending message. Please Try again later
    </div>
    <?php
}
}
?>
    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                    <!--<img src="./img/logo.png" alt="logo">-->
                    <h2 class="title-h2">Gaurav Chhapliyal</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">projects</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">Hey</h3>
                        <h1 class="title-text text-uppercase">I am Gaurav</h1>
                        <h4 class="title-text text-uppercase">Aspiring Software Developer</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="#contact"><button type="button"
                                        class="btn button primary-button mr-4 text-uppercase">Contact me</button></a>
                                <a href="uploads/Gaurav_Chhapliyal.pdf" target="_blank"><button type="button"
                                        class="btn button secondary-button text-uppercase">Get cv</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Let me</span>
                            <span>introduce</span>
                            <span>myself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                I am currently a third year undergraduate computer science engineering student at MAIT,
                                Delhi.
                                I am a learning enthusiast who is deeply passionate about programming and enjoys solving
                                problems.
                            </p>
                            <p class="para">
                                I have experience as a full stack web developer and have good knowledge of HTML, CSS,
                                BOOTSTRAP, jQuery, PHP and MySQl.
                                I also have a good command over C++ and JAVA and enjoy competitive programming.
                            </p>
                        </div>
                        <a href="uploads/Gaurav_Chhapliyal.pdf" target="_blank"><button type="button"
                                class="btn button primary-button text-uppercase">Download cv</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <!--<section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo1.png" alt="Brand-1 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo2.png" alt="Brand-2 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo3.png" alt="Brand-3 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo4.png" alt="Brand-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo5.png" alt="Brand-5 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo6.png" alt="Brand-6">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo7.png" alt="Brand-7 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo8.png" alt="Brand-8 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo9.png" alt="Brand-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                                <h2 class="p-3 years">Work</h2>
                                <h2>
                                    <span>Years</span>
                                    <span>Experience</span>
                                    <span>Working</span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">
                                <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                                <div class="call-now">
                                    <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                    <span class="font-roboto py-2">(+91)-800-555-4986</span>
                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area" id="skills">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Technical Skills</h1>
                        <p class="para">
                            I am a learning enthusiast, and am always looking forward to keep learning something
                            new.<br>
                            My Skillset include..
                        </p>
                    </div>
                </div>
                <div class="container-fluid services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/4.png" width="85px" height="63px" alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Web Developement</h5>
                                    <p class="card-text text-secondary">
                                        STACK: <br>HTML,CSS,Bootstrap<br>
                                        Javascript,jQuery<br>
                                        MySQl and PHP
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/prog].png" style="background: none;" width="85px"
                                        height="63px" alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Programming</h5>
                                    <p class="card-text text-secondary">
                                        Languages:<br>
                                        -C<br>
                                        -C++<br>
                                        -JAVA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./img/services/laravel.png" style="background: none;" width="85px"
                                        height="63px" alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">LARAVEL Development</h5>
                                    <p class="card-text text-secondary">
                                        I have experience of creating web application
                                        using LARAVEL framework
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4" style="padding: 0.9rem 0rem !important;">
                                    <img src="./img/services/gcp.png" style="background: none; " width="145px"
                                        height="80px" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto" style="padding-top: 0;">GCP</h5>
                                    <p class="card-text text-secondary">
                                        Completed Google Cloud training and have completed
                                        "Architecting with Google Compute Engine" specialisation on Coursera
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area" id="projects">
            <div class="container">
                <div class="project-title pb-5">
                    <center>
                        <h1 class="text-uppercase title-h1">My Projects</h1>
                        <h4 class="text-uppercase title-h4">Quality Work done by me</h4>
                    </center>
                </div>

                <div class="button-group">
                    <button type="button" class="active" id="btn1" data-filter="*">All</button>
                    <button type="button" data-filter=".web">Web Development</button>
                    <button type="button" data-filter=".latest">Latest</button>
                    <!--<button type="button" data-filter=".following">Following</button>-->
                    <button type="button" data-filter=".upcoming">Upcoming</button>
                </div>

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/portfolio.jpg">
                                    <img src="./img/portfolio/portfolio.jpg" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Portfolio Website <a href="https://github.com/CoderGaurav01/MyProfile"><i class="fab fa-github"></i></a>&nbsp;<a href="https://gauravchhapliyal.000webhostapp.com/"><i class="fa fa-eye"></i></a></h4>
                                <span class="text-secondary">Latest, Project</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/donate.jpg">
                                    <img src="./img/portfolio/donate.jpg" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Donation Website <a href="https://github.com/CoderGaurav01/Donation-website"><i class="fab fa-github"></i></a></h4>
                                <span class="text-secondary">Web, Project</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/ecommerce.jpg">
                                    <img src="./img/portfolio/ecommerce.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">E-Commerce Website <a href="https://github.com/CoderGaurav01/E-commerce_Website"><i class="fab fa-github"></i></a></h4>
                                <span class="text-secondary">Web, Project</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item web">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/findbook.jpg">
                                    <img src="./img/portfolio/findbook.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">FindMyBook <a href="https://github.com/CoderGaurav01/FindMyBook"><i class="fab fa-github"></i></a>&nbsp;<a href="https://findmyb00k.000webhostapp.com/"><i class="fa fa-eye"></i></a></h4>
                                <span class="text-secondary">Web, Mini-Project</span>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                    <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">OxyFind</h4>
                                <span class="text-secondary">Upcoming, Project</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                    <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Emblazon Website</h4>
                                <span class="text-secondary">Upcoming, Freelance</span>
                            </div>
                        </div>
                    </div>-->

                </div>
            </div>
        </section>

        <!--  ======================= End Project Area =============================  -->

        <!--  ======================== About Me Area ==============================  --

        <section class="about-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">Client Say about me</h1>
                            <p class="para">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                                recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--  ======================== End About Me Area ==============================  -->

        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area" id="contact">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">CONTACT ME</h4>
                        <p class="para">DROP A MAIL</p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center">
                    <form class="w-50" method="POST" action="mail.php">
                        <div class="row d-flex flex-row flex-wrap" style="margin: 1rem 0rem">
                            <div class="col input-textbox">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                    required style="width: 100%;">
                            </div>
                        </div>
                        <div class="row d-flex flex-row flex-wrap" style="margin: 1rem 0rem">
                            <div class="col input-textbox">
                                <input type="text" name="email" id="txtemail" class="form-control" placeholder="Email"
                                    required style="width: 100%;">
                            </div>
                        </div>
                        <div class="row d-flex flex-row flex-wrap" style="margin: 1rem 0rem">
                            <div class="col input-textbox">
                                <input type="text" name="subject" id="subject" class="form-control"
                                    placeholder="Subject" required style="width: 100%;">
                            </div>
                        </div>
                        <div class="row d-flex flex-row flex-wrap" style="margin: 1rem 0rem">
                            <div class="col input-textbox">
                                <textarea id="message" name="message" placeholder="Message....." class="form-control"
                                    rows="5" style="width: 100%;"></textarea>
                            </div>
                        </div>
                        <div class="row d-flex flex-row flex-wrap" style="margin: 1rem 0rem">
                            <div class="col">
                                <center>
                                    <div class="btn-submit">
                                        <button type="submit" class="btn btn-success">Send Mail</button>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--  ========================== End Subscribe me Area ============================  -->


    </main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area" style="background-color:rgba(247, 247, 247, 0.822);">
        <div class="container">
            <div class="">
                <div class="social text-center">
                    <h5 class="text-uppercase">Connect with me</h5>
                    <a href="https://www.linkedin.com/in/gaurav-chhapliyal-0a6155177/" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/CoderGaurav01" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.youtube.com/channel/UCJS77npFgY-ZVUG7QbCRNPQ" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://twitter.com/chhapliyal" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <!--<div class="copyrights text-center">
                    <p class="para">
                        Copyright ??2021 All rights reserved | 
                    </p>
                </div>-->
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>