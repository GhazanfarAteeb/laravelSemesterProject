<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('selected_page') - Happy Snaps</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel//assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <style>
        h1 {
            color:#ef6603;
        }
        h2 {
            color:#ef6603;
        }
        h3 {
            color:#ef6603;
        }
        h4 {
            color:#ef6603;
        }
        h5 {
            color:#ef6603;
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

    <body>


        <header id="header" class="fixed-top d-flex align-items-center ">
            <div class="container d-flex align-items-center">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="index.html">Happy Snaps</a></h1>

                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/#about">About</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="/#portfolio">Portfolio</a></li>
                        <li><a href="/#pricing">Pricing</a></li>
                        <li><a href="/#team">Team</a></li>
                        <li><a href="/#contact">Contact</a></li>
                        <li class="drop-down"><a href="">Events</a>
                            <ul>
                                <li><a href="/Wedding">Wedding</a></li>
                                <li><a href="/Parties">Parties</a></li>
                                <li><a href="/SpecialEves">Special Eves</a></li>
                            </ul>
                        </li>
                        <li><a href="login">Login</a></li>

                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header>
        <main id="main">
            <section>
                @yield('Content')
            </section>
            <section class="contact">
                <div class="container">

                    <div class="section-title" data-aos="zoom-out">
                        <h2>Contact</h2>
                        <p>Contact Us</p>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-4" data-aos="fade-right">
                            <div class="info">
                                <div class="address">
                                    <i class="icofont-google-map"></i>
                                    <h4>Location:</h4>
                                    <p>AA Block, Sector D, Bahria Town, Lahore</p>
                                </div>

                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>ghazanfar.ateeb9125@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="icofont-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+92 310 9453603</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                            data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                            data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                        data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->
        </main>
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>Happy Snaps</h3>
                <p>All kinds of events are done professionally.</p>
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>Happy Snaps</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer><!-- End Footer -->
        <!-- Vendor JS Files -->
        <script src="/assets/vendor/jquery/jquery.min.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>
        <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/vendor/venobox/venobox.min.js"></script>
        <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>

        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>
    </body>
</html>
