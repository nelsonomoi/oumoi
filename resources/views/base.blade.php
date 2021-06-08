<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Oumoi') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/toastr/toastr.css/toastr.min.css') }}">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-white">

<!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="#"><span>O</span>umoi</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#about-us">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Speciality</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
{{--                    <li><a class="nav-link scrollto" href="#">CV</a></li>--}}
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header> <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="mt-2">Moving With You in Every Step of Your Growth</h1>
            <h2>This is where all technological magic happen &amp; more...</h2>

            <img src="assets/img/hero-image.jpg" alt="Hero Image" data-aos="zoom-out" data-aos-delay="100" width="630" height="80%">
{{--            <a href="#get-started" class="btn-get-started scrollto">Get Quote</a>--}}
            <div class="btns">
                <a href="#"><i class="fa fa-apple fa-3x"></i> Mobile Apps</a>
                <a href="#"><i class="fa fa-play fa-3x"></i> API Integration</a>
                <a href="#"><i class="fa fa-windows fa-3x"></i> Web Apps</a>
                <a href="#"><i class="fa fa-windows fa-3x"></i> AI/ML</a>
                <a href="#"><i class="fa fa-windows fa-3x"></i> IT Consultations</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">
                        <a class="navbar-brand" href="#">Oumoi</a>
                        <p>Be at the epicenter of helping african nations in realizing its full potential in penetration and usage of technology in providing timely and quality services.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Featured</a></li>
{{--                            <li><a href="#">Privacy Policy</a></li>--}}
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Speciality</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Mobile Apps</a></li>
                            <li><a href="#">APIs Integration</a></li>
                            <li><a href="#">Web App/Systems</a></li>
                            <li><a href="#">AI/ML</a></li>
                            <li><a href="#">IT Consultations</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
{{--                            <li><a href="#">faq</a></li>--}}
                            <li><a href="#">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
{{--    <script src="assets/vendor/php-email-form/validate.js"></script>--}}
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script  src="{{ asset('assets/toastr/toastr.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}",{"closeButton": true,"positionClass": "toast-top-full-width",})
        @endif

        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif

        @if(Session::has('error'))
            toastr.error("{{Session::get('error')}}")
        @endif

        @if(Session::has('warning'))

            toastr.warning("{{Session::get('warning')}}")
        @endif


        $(document).ready(function () {

        })

    </script>

   @stack('scripts')
</body>
</html>
