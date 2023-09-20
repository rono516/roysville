<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/welcomepic.png') }}" type="image/x-icon" />
    {{-- <link rel="shortcut icon" href="{{ asset('assets/img/welcomepic.png') }}" type="image/x-icon" /> --}}

    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/libs.bundle.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.bundle.css') }}" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/84e6af0da9.js" crossorigin="anonymous"></script>

    <!-- Title -->
    <title>African Cultural Festival</title>
</head>

<body>



    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-togglable fixed-top">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-danger" href="{{ url('/') }}">
                {{-- <img src="{{ asset('assets/img/roysvillelogo.png') }}" class="navbar-brand-img" alt="..."> --}}
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
                        <a class="nav-link dropdown-toggle" id="navbarPages" href="{{ url('/gallery') }}">
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
    <section class="overlay overlay-dark overlay-40" data-jarallax data-speed=".8"
        style="background-image: url({{ asset('assets/img/welcomepic.png') }})">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                <div class="col-12 col-md-8 col-lg-6 mt-auto text-center">

                    <!-- Brand -->
                    <div class="img-fluid text-white mb-6">

                        <img src="{{ asset('assets/img/roysvillelogo.png') }}" alt="">
                    </div>

                    <!-- Heading -->
                    <p class="lead text-white">
                        Uniting Africa though culture, we are the biggest events organizers with a purpose and we want
                        you to be a part of the solution with us.
                    </p>

                </div>
                <div class="col-12 mt-auto text-center">

                    <!-- Button -->
                    <a class="btn btn-white btn-rounded-circle shadow" data-scroll='{"offset": 0}' href="#sectionTwo">
                        <i class="fe fe-arrow-down"></i>
                    </a>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>



    <!-- QUOTE -->
    <section id="sectionTwo">
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center min-vh-100 py-8 py-md-11">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Blockquote -->
                    <blockquote class="blockquote text-center">


                        <!-- Text -->
                        <p class="h2 mb-5 mb-md-7">
                            “The African Cultural Festival 2022 event in South Africa had a huge impact in the
                            society and amongst the invited guests and we look forward to organizing the same in the
                            future.”
                        </p>

                        <!-- Footer -->
                        <footer class="blockquote-footer mb-0">
                            <div class="avatar me-3">
                                <img src="assets/img/avatars/avatar-1.jpg" class="avatar-img rounded-circle"
                                    alt="...">
                            </div> <span class="h6 text-uppercase">Roy Kabelo Simo</span>
                        </footer>

                    </blockquote>

                </div>
            </div>
        </div>
    </section>

    {{-- test quote --}}
    <!-- TESTIMONIALS -->
    {{-- <section class="pt-8 pt-md-11">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2>
                        Remember, our employees are our biggest fans.
                    </h2>

                    <!-- Text -->
                    <p class="fs-lg text-muted mb-7 mb-md-9">
                        No matter your job title or department, if you're a member of our team you are our top priority.
                        We can deeply about everyone who works with us.
                    </p>

                </div>
            </div><!-- / .row -->
            <div class="card card-row shadow-light-lg">
                <div class="row gx-0">
                    <a class="col-12 col-md-6 bg-cover card-img-start"
                        style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

                        <!-- Image (placeholder) -->
                        <img src="assets/img/photos/photo-1.jpg" alt="..."
                            class="img-fluid d-md-none invisible">

                        <!-- Shape -->
                        <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                            <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor" />
                            </svg>
                        </div>

                    </a>
                    <div class="col-12 col-md-6 order-md-1">

                        <!-- Body -->
                        <div class="card-body">
                            <blockquote class="blockquote mb-0 text-center">

                                <!-- Text -->
                                <p class="mb-5 mb-md-7">
                                    “Working at Landkit has been a dream. The team is amazing, the office is perfect,
                                    and I feel like I'm part of a family. I'll be here for a great many years.”
                                </p>

                                <!-- Footer -->
                                <footer class="blockquote-footer">
                                    <span class="h6 text-uppercase">William Callan</span>
                                </footer>

                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- / .container -->
    </section> --}}

    <!-- IMAGE -->
    <section class="min-vh-100" data-jarallax data-speed=".8" style="background-image: url(assets/img/burnaboy.jpeg)">
    </section>

    <!-- IMAGE -->
    <section class="min-vh-100" data-jarallax data-speed=".8" style="background-image: url(assets/img/burnaboy.jpg)">
    </section>

    <!-- IMAGE -->
    {{-- <section class="min-vh-100" data-jarallax data-speed=".8"
        style="background-image: url(assets/img/covers/cover-2.jpg)"></section> --}}

    <!-- CTA -->
    {{-- <section class="pt-7 pt-md-10 bg-light">
        <div class="container py-6 py-md-8 border-top border-bottom border-gray-300">
            <div class="row align-items-center">
                <div class="col-12 col-md">

                    <!-- Heading -->
                    <h3 class="mb-1 fw-bold">
                        Get our updates delivered
                    </h3>

                    <!-- Text -->
                    <p class="fs-lg text-muted mb-6 mb-md-0">
                        From us to your inbox weekly.
                    </p>

                </div>
                <div class="col-12 col-md-5">

                    <!-- Form -->
                    <form>
                        <div class="row">
                            <div class="col">

                                <!-- Input -->
                                <input type="email" class="form-control" placeholder="Enter your email">

                            </div>
                            <div class="col-auto ms-n5">

                                <!-- Button -->
                                <button class="btn btn-danger" type="submit">
                                    Subscribe
                                </button>

                            </div>
                        </div> <!-- / .row -->
                    </form>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section> --}}

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
