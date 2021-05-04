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
                        <li class="drop-down"><a href="/#portfolio">Events</a>
                            <ul>
                                <li><a href="#">Wedding</a></li>
                                <li><a href="#">Parties</a></li>
                                <li><a href="#">Special Eves</a></li>
                            </ul>
                        </li>
                        <li><a href="login">Login</a></li>

                    </ul>
                </nav><!-- .nav-menu -->

            </div>
        </header>
        <main id="main">
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <!-- Title-->
                            <h1 class="mt-4">Post Title</h1>
                            <!-- Author-->
                            <p class="lead">
                                by
                                <a href="#!">Start Bootstrap</a>
                            </p>
                            <hr />
                            <!-- Date and time-->
                            <p>Posted on January 1, 2021 at 12:00 PM</p>
                            <hr />
                            <!-- Preview image-->
                            <img class="img-fluid rounded" src="https://via.placeholder.com/900x300" alt="..." />
                            <hr />
                            <!-- Post content-->
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati,
                                aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni
                                recusandae laborum minus inventore?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum
                                quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat.
                                Temporibus, voluptatibus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto
                                blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione
                                repellat perspiciatis. Enim, iure!</p>
                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                                <footer class="blockquote-footer">
                                    Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas
                                placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem
                                obcaecati?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo,
                                aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam
                                recusandae? Qui, necessitatibus, est!</p>
                            <hr />
                            <!-- Comments form-->

                            <!-- Single comment-->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                    ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                            <!-- Comment with nested comments-->
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                                <div class="media-body">
                                    <h5 class="mt-0">Commenter Name</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                                    ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    <div class="media mt-4">
                                        <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                                        <div class="media-body">
                                            <h5 class="mt-0">Commenter Name</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                            faucibus.
                                        </div>
                                    </div>
                                    <div class="media mt-4">
                                        <img class="d-flex mr-3 rounded-circle" src="https://via.placeholder.com/50x50" alt="..." />
                                        <div class="media-body">
                                            <h5 class="mt-0">Commenter Name</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                            faucibus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
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
