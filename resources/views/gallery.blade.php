<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/welcomepic.png') }}" type="image/x-icon" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Title -->
    <title>African Cultural Festival</title>
</head>

<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-danger" href="{{ url('/') }}">
                {{-- <img src="./assets/img/brand.svg" class="navbar-brand-img" alt="..."> --}}
                African Cultural Festival
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarAccount" href="{{ url('/about') }}"
                            aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarLandings" href="{{ url('/past_events') }}"
                            aria-haspopup="true" aria-expanded="false">
                            Past Events
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarPages" href="{{ url('/gallery') }}"
                            aria-haspopup="true" aria-expanded="false">
                            Gallery
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDocumentation" href="{{ url('/contact') }}"
                            aria-haspopup="true" aria-expanded="false">
                            Contact Us
                        </a>
                    </li>
                </ul>

                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-danger lift ms-auto" href="{{ url('/contact') }}"
                    target="_blank">
                    Book with us
                </a>

            </div>

        </div>
    </nav>

    <!-- WELCOME -->
    <section data-jarallax data-speed=".8"
        class="pt-12 pt-md-14 pb-12 pb-md-15 overlay overlay-black overlay-60 bg-cover jarallax"
        style="margin-top: -87px; background-image: url({{ asset('assets/img/welcomepic.png') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 text-center">

                    <!-- Headin -->
                    <h1 class="display-2 fw-bold text-white">
                        Picture Speak.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-white-75 mb-4">
                        Here is a review of African Cultural Festival events in pictures covering arts, culture and
                        music
                        accross Africa and beyond.
                    </p>

                    <!-- Badges -->


                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

 

    <!-- CONTENT -->
    <section class="py-8 py-md-11 mt-n10 mt-md-n14">
        <div class="container">
            <div class="row" id="portfolio" data-isotope='{"layoutMode": "masonry"}'>
                <div class="col-12 col-md-4 resources">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb5.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    {{-- <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
                                    </svg> --}}
                                    <img src="{{ asset('assets/img/bb5.jpg') }}" alt="" srcset="">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 product">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb6.jpeg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb6.jpeg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 resources">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb7.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb7.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 ux">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb8.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb8.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 ux">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb9.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb9.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 product">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb10.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb10.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 product">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb11.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb11.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 ux">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb12.jpeg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb12.jpeg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-12 col-md-4 ux">

                    <!-- Card -->
                    <a class="card shadow-light-lg mb-7" href="#!">

                        <!-- Image -->
                        <div class="card-zoom">
                            <img class="card-img" src="assets/img/bb13.jpg" alt="...">
                        </div>

                        <!-- Overlay -->
                        <div class="card-img-overlay card-img-overlay-hover">
                            <div class="card-body bg-white">

                                <!-- Shape -->
                                <div class="shape shape-bottom-100 shape-fluid-x text-white">
                                    <img class="card-img" src="assets/img/bb13.jpg" alt="...">
                                </div>

                                <!-- Preheading -->
                                <h6 class="text-uppercase mb-1 text-muted">Burna Boy</h6>

                                <!-- Heading -->
                                <h4 class="mb-0">African Cultural Festival 2022</h4>

                            </div>
                        </div>

                    </a>

                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="py-8 py-md-11 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">

                    <!-- Brand -->

                    <!-- Text -->
                    <p class="text-gray-700 mb-2">
                        African Cultural Festival
                    </p>
                    <p class="text-gray-700 mb-2">
                        A better way to unite Africa.
                    </p>
                </div>
                <div class="col-6 col-md-4 col-lg-2">

                    <!-- Heading -->
                    <h6 class="fw-bold text-uppercase text-gray-700">
                        Quick links
                    </h6>

                    <!-- List -->
                    <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                        <li class="mb-3">
                            <a href="{{ url('past_events') }}" class="text-reset">
                                Past events
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/gallery') }}" class="text-reset">
                                Gallery
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/about') }}" class="text-reset">
                                About
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ url('/contact') }}" class="text-reset">
                                Contact us
                            </a>
                        </li>

                    </ul>

                </div>

                <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">

                    <!-- Heading -->
                    <h6 class="fw-bold text-uppercase text-gray-700">
                        Connect
                    </h6>

                    <!-- List -->
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-3">
                            <a href="#!" class="text-decoration-none">
                                <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon"
                                    alt="...">
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#!" class="text-decoration-none">
                                <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon"
                                    alt="...">
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#!" class="text-decoration-none">
                                <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon"
                                    alt="...">
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#!" class="text-decoration-none">
                                <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon"
                                    alt="...">
                            </a>
                        </li>

                    </ul>




                </div>
                <div class="col-6 col-md-4 col-lg-2">

                    <!-- Heading -->
                    <h6 class="fw-bold text-uppercase text-gray-700">
                        Legal
                    </h6>

                    <!-- List -->
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-3">
                            <a href="#!" class="text-reset">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#!" class="text-reset">
                                FAQ
                            </a>
                        </li>

                    </ul>

                </div>
                <div class="col-6 col-md-4 col-lg-2">

                    <!-- Heading -->
                    <h6 class="fw-bold text-uppercase text-gray-700">
                        Products
                    </h6>

                    <!-- List -->
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-3">
                            <a href="#" class="text-reset">
                                Event management
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="text-reset">
                                Partneship sourcing
                            </a>
                        </li>

                    </ul>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

</body>

</html>
