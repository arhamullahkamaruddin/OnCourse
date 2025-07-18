<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" href="{{ asset('guest-template') }}/assets/img/logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="guest-template/assets//css/bootstrap.min.css">
    <link rel="stylesheet" href="guest-template/assets//css/owl.carousel.min.css">
    <link rel="stylesheet" href="guest-template/assets//css/slicknav.css">
    <link rel="stylesheet" href="guest-template/assets//css/flaticon.css">
    <link rel="stylesheet" href="guest-template/assets//css/progressbar_barfiller.css">
    <link rel="stylesheet" href="guest-template/assets//css/gijgo.css">
    <link rel="stylesheet" href="guest-template/assets//css/animate.min.css">
    <link rel="stylesheet" href="guest-template/assets//css/animated-headline.css">
    <link rel="stylesheet" href="guest-template/assets//css/magnific-popup.css">
    <link rel="stylesheet" href="guest-template/assets//css/fontawesome-all.min.css">
    <link rel="stylesheet" href="guest-template/assets//css/themify-icons.css">
    <link rel="stylesheet" href="guest-template/assets//css/slick.css">
    <link rel="stylesheet" href="guest-template/assets//css/nice-select.css">
    <link rel="stylesheet" href="guest-template/assets//css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="guest-template/assets//img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <!-- Register -->

    <main class="login-body" data-vide-bg="guest-template/assets//img/login-bg.mp4">
        <!-- Login Admin -->
        <form class="form-default" action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="{{ route('home') }}"><img src="guest-template/assets//img/logo/loder.png"
                            alt=""></a>
                </div>
                <h2>Registrasi Disini</h2>

                <div class="form-input">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Nama Lengkap">
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="hidden" name="role" value="student">
                {{-- <div class="form-input">
                    <label for="role">Daftar Sebagai:</label>

                    <select name="role" id="role" class="form-select" required>
                        <option value="student">Siswa</option>
                        <option value="instructor">Instruktur</option>
                    </select>
                </div> --}}
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Registrasi">
                </div>
                <a href="{{ route('login') }}" class="registration">Login</a>
                <a href="{{ route('home') }}" class="registration">Kembali</a>
            </div>
        </form>
        <!-- /end login form -->
    </main>


    <script src="./guest-template/assets//js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./guest-template/assets//js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./guest-template/assets//js/popper.min.js"></script>
    <script src="./guest-template/assets//js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./guest-template/assets//js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./guest-template/assets//js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./guest-template/assets//js/owl.carousel.min.js"></script>
    <script src="./guest-template/assets//js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./guest-template/assets//js/wow.min.js"></script>
    <script src="./guest-template/assets//js/animated.headline.js"></script>
    <script src="./guest-template/assets//js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./guest-template/assets//js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./guest-template/assets//js/jquery.nice-select.min.js"></script>
    <script src="./guest-template/assets//js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./guest-template/assets//js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./guest-template/assets//js/jquery.counterup.min.js"></script>
    <script src="./guest-template/assets//js/waypoints.min.js"></script>
    <script src="./guest-template/assets//js/jquery.countdown.min.js"></script>
    <script src="./guest-template/assets//js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./guest-template/assets//js/contact.js"></script>
    <script src="./guest-template/assets//js/jquery.form.js"></script>
    <script src="./guest-template/assets//js/jquery.validate.min.js"></script>
    <script src="./guest-template/assets//js/mail-script.js"></script>
    <script src="./guest-template/assets//js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./guest-template/assets//js/plugins.js"></script>
    <script src="./guest-template/assets//js/main.js"></script>

</body>

</html>
