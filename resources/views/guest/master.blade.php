<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OnCourse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" href="{{ asset('guest-template') }}/assets/img/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('guest-template') }}/assets/css/style.css">

</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('guest-template') }}/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img
                                            src="{{ asset('guest-template') }}/assets/img/logo/logo.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <!-- Navbar -->
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="{{ route('home') }}">Beranda</a></li>
                                                <li><a href="{{ route('course') }}">Kursus</a></li>
                                                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                                <li><a href="{{ route('contact') }}">Kontak</a></li>
                                                <li class="button-header margin-left "><a href="{{ route('login') }}"
                                                        class="btn">Login</a></li>
                                                <li class="button-header"><a href="{{ route('register') }}"
                                                        class="btn btn3">Register</a></li>
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html"><img
                                                src="{{ asset('guest-template') }}/assets/img/logo/logo2_footer.png"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Proses otomatis dimulai begitu pakaian Anda dimasukkan ke dalam mesin.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Solusi kami</h4>
                                    <ul>
                                        <li><a href="#">Desain & Kreatif</a></li>
                                        <li><a href="#">Telekomunikasi</a></li>
                                        <li><a href="#">Restoran</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Arsitektur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Dukungan</h4>
                                    <ul>
                                        <li><a href="#">Desain & Kreatif</a></li>
                                        <li><a href="#">Telekomunikasi</a></li>
                                        <li><a href="#">Restoran</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Arsitektur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Perusahaan</h4>
                                    <ul>
                                        <li><a href="#">Desain & Kreatif</a></li>
                                        <li><a href="#">Telekomunikasi</a></li>
                                        <li><a href="#">Restoran</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Arsitektur</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('guest-template') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('guest-template') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('guest-template') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('guest-template') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('guest-template') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/animated.headline.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="{{ asset('guest-template') }}/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('guest-template') }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="{{ asset('guest-template') }}/assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('guest-template') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="{{ asset('guest-template') }}/assets/js/contact.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.form.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/mail-script.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('guest-template') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('guest-template') }}/assets/js/main.js"></script>

</body>

</html>
