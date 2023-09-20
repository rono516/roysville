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

<body class="bg-light">



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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="navbar-btn btn btn-sm btn-danger lift ms-auto" href="{{ url('/contact') }}">
                    Book with us
                </a>

            </div>

        </div>
    </nav>

    <!-- TOGETHER -->
    <section>
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-between min-vh-100 py-8 py-md-11">
                <div class="col-12 col-md-6 col-lg-5">

                    <!-- Badge -->
                    <span class="badge rounded-pill bg-danger-soft mb-3">
                        <span class="h6 text-uppercase">African Cultural Festival Event 2022</span>
                    </span>

                    <!-- Heading -->
                    <h2>
                        Uniting Africa through culture <br>
                        <span class="text-danger">South Africa</span>.
                    </h2>

                    <!-- Text -->
                    <p class="fs-lg text-gray-700 mb-6">
                        This is a brief description about the event, theme and some of the activities that were covered
                        therein.
                    </p>

                    <!-- Stats -->
                    <div class="d-flex mb-8 mb-md-0">
                        <div class="pe-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="1000" data-aos
                                    data-aos-id="countup:in">0</span>
                            </h3>
                            <p class="text-gray-700 mb-0">
                                People attended
                            </p>
                        </div>
                        <div class="border-start border-gray-300"></div>
                        <div class="px-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="10" data-aos
                                    data-aos-id="countup:in">0</span>
                            </h3>
                            <p class="text-gray-700 mb-0">
                                Artists performed
                            </p>
                        </div>
                        <div class="border-start border-gray-300"></div>
                        <div class="ps-5">
                            <h3 class="mb-0">
                                <span data-countup='{"startVal": 0}' data-to="100" data-aos
                                    data-aos-id="countup:in">0</span>%
                            </h3>
                            <p class="text-gray-700 mb-0">
                                Event successs
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6">

                    <!-- Images -->
                    <div class="row">
                        <div class="col-6 mt-8 me-n5" data-aos="fade-up">

                            <img src="assets/img/bb1.jpg" alt="..." class="img-fluid mb-4 rounded">

                            <img src="assets/img/bb2.jpeg" alt="..." class="img-fluid rounded">

                        </div>
                        <div class="col-6" data-aos="fade-up" data-aos-delay="100">

                            <img src="assets/img/bb3.jpg" alt="..." class="img-fluid mb-4 rounded">

                            <img src="assets/img/bb4.jpeg" alt="..." class="img-fluid rounded">

                        </div>
                    </div> <!-- / .row -->

                </div>
            </div>
        </div>
    </section>

    <section class="py-8 py-md-11">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-6 img-skewed img-skewed-end">


                    <div class="row">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="200">

                            <!-- Video -->
                            <div class="ratio ratio-16x9">
                                {{-- <iframe class="rounded-lg bg-light shadow-lg"
                                    src="https://www.youtube.com/embed/GrJ9thNWo1k" autoplay loop muted>
                                    Sorry, your browser doesn't support embedded videos,
                                    but don't worry, you can <a
                                        href="https://www.youtube.com/embed/GrJ9thNWo1k">download it</a>
                                    and watch it with your favorite video player!
                                </iframe> --}}
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/GrJ9thNWo1k?si=Kk1VLmnULKesml2T"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-5">

                    <!-- Heading -->
                    <h2>
                        Burna Boy - African Cultural Festival South Africa
                    </h2>

                    <!-- Text -->
                    <p class="fs-lg text-gray-700">
                        Burna Boy - If I'm Lying [Live from Roundhouse]
                    </p>

                    <!-- Link -->
                    <a class="fw-bold text-decoration-none" href="https://youtu.be/GrJ9thNWo1k?si=JhHJGaS7XY_CQv0F">
                        View on youtube <i class="fe fe-arrow-right ms-3"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>




    <!-- CTA -->
    <section>
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center  py-8 py-md-11">
                <div class="col-12 col-md-9 col-lg-8 col-xl-7 text-center">

                    <!-- Heading -->
                    <h2 class="display-3">Wanna work with us?</h2>

                    <!-- Text -->
                    <p class="mb-5 fs-lg text-gray-800">
                        We work with partners to make such events a success, from partners, sponsors to governments and
                        are looking forward to
                        hearing from you.
                    </p>

                    <!-- Button -->
                    <a class="btn btn-danger rounded-pill" href="{{ url('/contact') }}">
                        Let us know <i class="fe fe-arrow-right ms-2"></i>
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
