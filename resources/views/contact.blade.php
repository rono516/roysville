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

<body class="pt-10 bg-light">



    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom">
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

    <!-- WELCOME -->
    <section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover"
        style="background-image: url(assets/img/covers/cover-5.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h1 class="display-2 fw-bold text-white">
                        We’re Here to Help.
                    </h1>

                    <!-- Text -->
                    <p class="lead text-white-75 mb-0">
                        We always want to hear from you! Let us know how we can best help you and we'll do our very
                        best.
                    </p>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
            </svg>
        </div>
    </div>

    <!-- INFO -->
    <section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Button -->
                    <a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-scroll>
                        <i class="fe fe-arrow-down"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12 col-md-4 text-center border-end border-gray-300">

                    <!-- Heading -->
                    <h6 class="text-uppercase text-gray-700 mb-1">
                        Message us on WhatsApp
                    </h6>

                    <!-- Link -->
                    <div class="mb-5 mb-md-0">
                        <a href="#!" class="h4 text-danger">
                            Start a chat!
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4 text-center border-end border-gray-300">

                    <!-- Heading -->
                    <h6 class="text-uppercase text-gray-700 mb-1">
                        Call anytime
                    </h6>

                    <!-- Link -->
                    <div class="mb-5 mb-md-0">
                        <a href="#!" class="h4 text-danger">
                            (555) 123-4567
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4 text-center">

                    <!-- Heading -->
                    <h6 class="text-uppercase text-gray-700 mb-1">
                        Email us
                    </h6>

                    <!-- Link -->
                    <a href="#!" class="h4 text-danger">
                        support@roysvillegroup.group
                    </a>

                </div>
            </div> <!-- / .row -->
        </div>
    </section>

    <!-- FORM -->
    <section class="pt-8 pt-md-11 pb-8 pb-md-14">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="fw-bold">
                        Let us hear from you directly!
                    </h2>


                </div>
            </div> <!-- / .row -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-10">

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-5">

                                    <!-- Label -->
                                    <label class="form-label" for="contactName">
                                        Full name
                                    </label>

                                    <!-- Input -->
                                    <input class="form-control" id="contactName" type="text"
                                        placeholder="Full name">

                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-5">

                                    <!-- Label -->
                                    <label class="form-label" for="contactEmail">
                                        Email
                                    </label>

                                    <!-- Input -->
                                    <input class="form-control" id="contactEmail" type="email"
                                        placeholder="hello@domain.com">

                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-7 mb-md-9">

                                    <!-- Label -->
                                    <label class="form-label" for="contactMessage">
                                        What can we help you with?
                                    </label>

                                    <!-- Input -->
                                    <textarea class="form-control" id="contactMessage" rows="5" placeholder="Tell us what we can help you with!"></textarea>

                                </div>
                            </div>
                        </div> <!-- / .row -->
                        <div class="row justify-content-center">
                            <div class="col-auto">

                                <!-- Submit -->
                                <button type="submit" class="btn btn-danger lift">
                                    Send message
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </form>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
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
