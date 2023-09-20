<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon" />
    
    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    
    <!-- Title -->
    <title>Landkit</title>
  </head>
  <body class="bg-light">

    <!-- MODALS -->
    <!-- Example -->
    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
    
            <!-- Close -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Image -->
            <div class="text-center">
              <img src="./assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-3" style="width: 200px;">
            </div>
    
            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalExampleTitle">
              Schedule a demo with us
            </h2>
    
            <!-- Text -->
            <p class="fs-lg text-center text-muted mb-6 mb-md-8">
              We can help you solve company communication.
            </p>
    
            <!-- Form -->
            <form>
              <div class="row">
                <div class="col-12 col-md-6">
    
                  <!-- First name -->
                  <div class="form-floating">
                    <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal" placeholder="First name">
                    <label for="registrationFirstNameModal">First name</label>
                  </div>
    
                </div>
                <div class="col-12 col-md-6">
    
                  <!-- Last name -->
                  <div class="form-floating">
                    <input type="text" class="form-control form-control-flush" id="registrationLastNameModal" placeholder="Last name">
                    <label for="registrationLastNameModal">Last name</label>
                  </div>
    
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
    
                  <!-- Email -->
                  <div class="form-floating">
                    <input type="email" class="form-control form-control-flush" id="registrationEmailModal" placeholder="Email">
                    <label for="registrationEmailModal">Email</label>
                  </div>
    
                </div>
                <div class="col-12 col-md-6">
    
                  <!-- Password -->
                  <div class="form-floating">
                    <input type="password" class="form-control form-control-flush" id="registrationPasswordModal" placeholder="Password">
                    <label for="registrationPasswordModal">Password</label>
                  </div>
    
                </div>
              </div>
              <div class="row">
                <div class="col-12">
    
                  <!-- Submit -->
                  <button class="btn w-100 btn-primary mt-3 lift">
                    Request a demo
                  </button>
    
                </div>
              </div>
            </form>
    
          </div>
        </div>
      </div>
    </div>
    
    <!-- Signup: Horizontal  -->
    <div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(./assets/img/photos/photo-8.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            </div>
    
              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalSignupHorizontalTitle">
                    Sign Up
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Simplify your workflow in minutes.
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">
    
                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSignupHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalSignupHorizontalPassword">
                        Create a password
                      </label>
                      <input type="password" class="form-control" id="modalSignupHorizontalPassword" placeholder="Create a password">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn w-100 btn-primary" type="submit">
                      Sign up
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Already have an account? <a href="./signin-illustration.html">Log in</a>.
                  </p>
    
                </div>
              </div>
    
            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- Signup: Vertical  -->
    <div class="modal fade" id="modalSignupVertical" tabindex="-1" role="dialog" aria-labelledby="modalSignupVerticalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card">
    
            <!-- Close -->
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Image -->
            <img src="./assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">
    
            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x text-white">
                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>          </div>
            </div>
    
            <!-- Body -->
            <div class="card-body">
    
              <!-- Heading -->
              <h2 class="mb-0 fw-bold text-center" id="modalSignupVerticalTitle">
                Sign Up
              </h2>
    
              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>
    
              <!-- Form -->
              <form class="mb-6">
    
                <!-- Email -->
                <div class="form-group">
                  <label class="visually-hidden" for="modalSignupVerticalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSignupVerticalEmail" placeholder="Your email">
                </div>
    
                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="visually-hidden" for="modalSignupVerticalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSignupVerticalPassword" placeholder="Create a password">
                </div>
    
                <!-- Submit -->
                <button class="btn w-100 btn-primary" type="submit">
                  Sign up
                </button>
    
              </form>
    
              <!-- Text -->
              <p class="mb-0 fs-sm text-center text-muted">
                Already have an account? <a href="./signin-illustration.html">Log in</a>.
              </p>
    
            </div>
    
          </div>
        </div>
      </div>
    </div>
    
    <!-- Signin: Horizontal  -->
    <div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row gx-0">
              <div class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(./assets/img/photos/photo-1.jpg);">
    
                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">
    
                <!-- Shape -->
                <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>            </div>
    
              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">
    
                  <!-- Close -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                  <!-- Heading -->
                  <h2 class="mb-0 fw-bold text-center" id="modalSigninHorizontalTitle">
                    Sign In
                  </h2>
    
                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Simplify your workflow in minutes.
                  </p>
    
                  <!-- Form -->
                  <form class="mb-6">
    
                    <!-- Email -->
                    <div class="form-group">
                      <label class="visually-hidden" for="modalSigninHorizontalEmail">
                        Your email
                      </label>
                      <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                    </div>
    
                    <!-- Password -->
                    <div class="form-group mb-5">
                      <label class="visually-hidden" for="modalSigninHorizontalPassword">
                        Enter your password
                      </label>
                      <input type="password" class="form-control" id="modalSigninHorizontalPassword" placeholder="Enter your password">
                    </div>
    
                    <!-- Submit -->
                    <button class="btn w-100 btn-primary" type="submit">
                      Sign in
                    </button>
    
                  </form>
    
                  <!-- Text -->
                  <p class="mb-0 fs-sm text-center text-muted">
                    Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
                  </p>
    
                </div>
              </div>
    
            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>
    
    <!-- Signin: Vertical  -->
    <div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card">
    
            <!-- Close -->
            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Image -->
            <img src="./assets/img/photos/photo-21.jpg" alt="..." class="card-img-top">
    
            <!-- Shape -->
            <div class="position-relative">
              <div class="shape shape-bottom shape-fluid-x text-white">
                <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>          </div>
            </div>
    
            <!-- Body -->
            <div class="card-body">
    
              <!-- Heading -->
              <h2 class="mb-0 fw-bold text-center" id="modalSigninVerticalTitle">
                Sign In
              </h2>
    
              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>
    
              <!-- Form -->
              <form class="mb-6">
    
                <!-- Email -->
                <div class="form-group">
                  <label class="visually-hidden" for="modalSigninVerticalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
                </div>
    
                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="visually-hidden" for="modalSigninVerticalPassword">
                    Enter your password
                  </label>
                  <input type="password" class="form-control" id="modalSigninVerticalPassword" placeholder="Enter your password">
                </div>
    
                <!-- Submit -->
                <button class="btn w-100 btn-primary" type="submit">
                  Sign in
                </button>
    
              </form>
    
              <!-- Text -->
              <p class="mb-0 fs-sm text-center text-muted">
                Don't have an account yet? <a href="./signin-illustration.html">Sign up</a>.
              </p>
    
            </div>
    
          </div>
        </div>
      </div>
    </div>
    
    <!-- Payment -->
    <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
    
            <!-- Close -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
            <!-- Heading -->
            <h2 class="fw-bold text-center mb-1" id="modalPaymentTitle">
              Add Payment
            </h2>
    
            <!-- Text -->
            <p class="fs-lg text-center text-muted mb-6 mb-md-8">
              Simplify your workflow in minutes.
            </p>
    
            <!-- Form -->
            <form>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentName">Name on card</label>
                <input class="form-control" id="modalPaymentName" type="text" placeholder="First Last">
              </div>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentNumbber">Card number</label>
                <input class="form-control" id="modalPaymentNumbber" type="number" placeholder="4242 4242 4242 4242">
              </div>
    
              <!-- Name -->
              <div class="form-group">
                <label class="form-label" for="modalPaymentDate">Exp. Date</label>
                <input class="form-control" id="modalPaymentDate" type="text" placeholder="03/2023">
              </div>
    
              <!-- Submit -->
              <button class="btn w-100 btn-primary mt-3 lift">
                Add Payment Method
              </button>
    
            </form>
    
          </div>
        </div>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
    
        <!-- Brand -->
        <a class="navbar-brand" href="./index.html">
          <img src="./assets/img/brand.svg" class="navbar-brand-img" alt="...">
        </a>
    
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>
    
          <!-- Navigation -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarLandings" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Landings
              </a>
              <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
                <div class="row gx-0">
                  <div class="col-12 col-lg-6">
                    <div class="dropdown-img-start" style="background-image: url(./assets/img/photos/photo-3.jpg);">
    
                      <!-- Heading -->
                      <h4 class="fw-bold text-white mb-0">
                        Want to see an overview?
                      </h4>
    
                      <!-- Text -->
                      <p class="fs-sm text-white">
                        See all the pages at once.
                      </p>
    
                      <!-- Button -->
                      <a href="./overview.html" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                        View all pages
                      </a>
    
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="dropdown-body">
                      <div class="row gx-0">
                        <div class="col-6">
    
                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Services
                          </h6>
    
                          <!-- List -->
                          <a class="dropdown-item" href="./coworking.html">
                            Coworking
                          </a>
                          <a class="dropdown-item" href="./rental.html">
                            Rental
                          </a>
                          <a class="dropdown-item mb-5" href="./job.html">
                            Job Listing
                          </a>
    
                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Apps
                          </h6>
    
                          <!-- List -->
                          <a class="dropdown-item" href="./desktop-app.html">
                            Desktop
                          </a>
                          <a class="dropdown-item" href="./mobile-app.html">
                            Mobile
                          </a>
    
                        </div>
                        <div class="col-6">
    
                          <!-- Heading -->
                          <h6 class="dropdown-header">
                            Web
                          </h6>
    
                          <!-- List -->
                          <a class="dropdown-item" href="./index.html">
                            Basic
                          </a>
                          <a class="dropdown-item" href="./startup.html">
                            Startup
                          </a>
                          <a class="dropdown-item" href="./enterprise.html">
                            Enterprise
                          </a>
                          <a class="dropdown-item" href="./service.html">
                            Service
                          </a>
                          <a class="dropdown-item" href="./cloud.html">
                            Cloud Hosting
                          </a>
                          <a class="dropdown-item" href="./agency.html">
                            Agency
                          </a>
                          <a class="dropdown-item" href="./framework.html">
                            Framework <span class="h6 text-uppercase text-primary">(new)</span>
                          </a>
    
                        </div>
                      </div> <!-- / .row -->
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarPages" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
                <div class="row gx-0">
                  <div class="col-6">
                    <div class="row gx-0">
                      <div class="col-12 col-lg-6">
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Career
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./careers.html">
                          Listing
                        </a>
                        <a class="dropdown-item mb-5" href="./career-single.html">
                          Opening
                        </a>
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Company
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./about.html">
                          About
                        </a>
                        <a class="dropdown-item" href="./pricing.html">
                          Pricing
                        </a>
                        <a class="dropdown-item mb-5 mb-lg-0" href="./terms-of-service.html">
                          Terms
                        </a>
    
                      </div>
                      <div class="col-12 col-lg-6">
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Help center
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./help-center.html">
                          Overview
                        </a>
                        <a class="dropdown-item mb-5" href="./help-center-article.html">
                          Article
                        </a>
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Contact
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./contact.html">
                          Basic
                        </a>
                        <a class="dropdown-item" href="./contact-alt.html">
                          Cover
                        </a>
    
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row gx-0">
                      <div class="col-12 col-lg-6">
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Blog
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./blog.html">
                          Rich View
                        </a>
                        <a class="dropdown-item" href="./blog-post.html">
                          Article
                        </a>
                        <a class="dropdown-item" href="./blog-showcase.html">
                          Showcase
                        </a>
                        <a class="dropdown-item mb-5 mb-lg-0" href="./blog-search.html">
                          Search
                        </a>
    
                      </div>
                      <div class="col-12 col-lg-6">
    
                        <!-- Heading -->
                        <h6 class="dropdown-header">
                          Portfolio
                        </h6>
    
                        <!-- List -->
                        <a class="dropdown-item" href="./portfolio-masonry.html">
                          Masonry
                        </a>
                        <a class="dropdown-item" href="./portfolio-grid-rows.html">
                          Grid Rows
                        </a>
                        <a class="dropdown-item" href="./portfolio-parallax.html">
                          Parallax
                        </a>
                        <a class="dropdown-item" href="./portfolio-case-study.html">
                          Case Study
                        </a>
                        <a class="dropdown-item" href="./portfolio-sidebar.html">
                          Sidebar
                        </a>
                        <a class="dropdown-item" href="./portfolio-sidebar-fluid.html">
                          Sidebar: Fluid
                        </a>
                        <a class="dropdown-item" href="./portfolio-grid.html">
                          Basic Grid
                        </a>
    
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- / .row -->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarAccount" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                <li class="dropdown-item dropend">
                  <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Settings
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./account-general.html">
                      General
                    </a>
                    <a class="dropdown-item" href="./account-security.html">
                      Security
                    </a>
                    <a class="dropdown-item" href="./account-notifications.html">
                      Notifications
                    </a>
                    <a class="dropdown-item" href="./billing-plans-and-payment.html">
                      Plans & Payment
                    </a>
                    <a class="dropdown-item" href="./billing-users.html">
                      Users
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropend">
                  <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Sign In
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signin-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signin-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signin.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-bs-toggle="modal" href="#modalSigninVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropend">
                  <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Sign Up
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./signup-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./signup-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./signup.html">
                      Basic
                    </a>
                    <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupHorizontal">
                      Modal Horizontal
                    </a>
                    <a class="dropdown-item" data-bs-toggle="modal" href="#modalSignupVertical">
                      Modal Vertical
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropend">
                  <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Password Reset
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./password-reset-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./password-reset-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./password-reset.html">
                      Basic
                    </a>
                  </div>
                </li>
                <li class="dropdown-item dropend">
                  <a class="dropdown-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                    Error
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./error-cover.html">
                      Side Cover
                    </a>
                    <a class="dropdown-item" href="./error-illustration.html">
                      Illustration
                    </a>
                    <a class="dropdown-item" href="./error.html">
                      Basic
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                Documentation
              </a>
              <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                <div class="list-group list-group-flush">
                  <a class="list-group-item" href="./docs/index.html">
    
                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M8 3v.5A1.5 1.5 0 009.5 5h5A1.5 1.5 0 0016 3.5V3h2a2 2 0 012 2v16a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h2z" fill="#335EEA" opacity=".3"/><path d="M11 2a1 1 0 012 0h1.5a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-5a.5.5 0 01-.5-.5v-1a.5.5 0 01.5-.5H11z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" x="7" y="10" width="5" height="2" rx="1"/><rect fill="#335EEA" opacity=".3" x="7" y="14" width="9" height="2" rx="1"/></g></svg>                </div>
    
                    <!-- Content -->
                    <div class="ms-4">
    
                      <!-- Heading -->
                      <h6 class="fw-bold text-uppercase text-primary mb-0">
                        Documentation
                      </h6>
    
                      <!-- Text -->
                      <p class="fs-sm text-gray-700 mb-0">
                        Customizing and building
                      </p>
    
                    </div>
    
                  </a>
                  <a class="list-group-item" href="./docs/alerts.html">
    
                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><rect fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"/><path d="M5.5 13h4a1.5 1.5 0 011.5 1.5v4A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-4A1.5 1.5 0 015.5 13zm9-9h4A1.5 1.5 0 0120 5.5v4a1.5 1.5 0 01-1.5 1.5h-4A1.5 1.5 0 0113 9.5v-4A1.5 1.5 0 0114.5 4zm0 9h4a1.5 1.5 0 011.5 1.5v4a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-4a1.5 1.5 0 011.5-1.5z" fill="#335EEA" opacity=".3"/></g></svg>                </div>
    
                    <!-- Content -->
                    <div class="ms-4">
    
                      <!-- Heading -->
                      <h6 class="fw-bold text-uppercase text-primary mb-0">
                        Components
                      </h6>
    
                      <!-- Text -->
                      <p class="fs-sm text-gray-700 mb-0">
                        Full list of components
                      </p>
    
                    </div>
    
                  </a>
                  <a class="list-group-item" href="./docs/changelog.html">
    
                    <!-- Icon -->
                    <div class="icon icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.857 2h7.88a1.5 1.5 0 01.968.355l4.764 4.029A1.5 1.5 0 0120 7.529v12.554c0 1.79-.02 1.917-1.857 1.917H5.857C4.02 22 4 21.874 4 20.083V3.917C4 2.127 4.02 2 5.857 2z" fill="#335EEA" opacity=".3"/><rect fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"/></g></svg>                </div>
    
                    <!-- Content -->
                    <div class="ms-4">
    
                      <!-- Heading -->
                      <h6 class="fw-bold text-uppercase text-primary mb-0">
                        Changelog
                      </h6>
    
                      <!-- Text -->
                      <p class="fs-sm text-gray-700 mb-0">
                        Keep track of changes
                      </p>
    
                    </div>
    
                    <!-- Badge -->
                    <span class="badge rounded-pill bg-primary-soft ms-auto">
                      2.1.0
                    </span>
    
                  </a>
                </div>
              </div>
            </li>
          </ul>
    
          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
            Buy now
          </a>
    
        </div>
    
      </div>
    </nav>

    <!-- WELCOME -->
    <section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax" style="background-image: url(assets/img/covers/cover-13.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h1 class="display-2 text-white">
              Want to work with us?
            </h1>

            <!-- Text -->
            <p class="lead text-white-75 mb-6">
              We're always looking to hire talented folks to join our ever-growing team of designers, engineers, and support staff.
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary lift">
              View open positions <i class="fe fe-arrow-right ms-3"></i>
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
    </div>

    <!-- VALUES -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-6">

            <!-- Badge -->
            <span class="badge bg-primary-desat-soft rounded-pill mb-3">
              <span class="h6 text-uppercase">
                Values
              </span>
            </span>

            <!-- Heading -->
            <h2>
              We care about everyone, <br>
              <span class="text-primary-desat">but employees are first</span>.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-muted mb-6 mb-md-0">
              No matter your job title or department, if you're a member of our team you are our top priority. We can deeply about everyone who works with us.
            </p>

          </div>
          <div class="col-12 col-md-6 col-xl-5">

            <div class="row gx-0">
              <div class="col-4">

                <!-- Image -->
                <div class="w-150 mt-9 p-1 bg-white shadow-lg">
                  <img src="assets/img/photos/photo-13.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-4">

                <!-- Image -->
                <div class="w-150 p-1 bg-white shadow-lg">
                  <img src="assets/img/photos/photo-14.jpg" class="img-fluid" alt="...">
                </div>

              </div>
              <div class="col-4 position-relative">

                <!-- Image -->
                <div class="w-150 mt-11 float-end p-1 bg-white shadow-lg">
                  <img src="assets/img/photos/photo-15.jpg" class="img-fluid" alt="...">
                </div>

              </div>
            </div> <!-- / .row -->

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- BENEFITS -->
    <section class="py-8 py-md-11">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-md-5 order-md-2">

            <!-- Badge -->
            <span class="badge bg-success-soft rounded-pill mb-3">
              <span class="h6 text-uppercase">
                Benefits
              </span>
            </span>

            <!-- Heading -->
            <h2>
              We'll take of you with <br>
              <span class="text-success">a great benefits package</span>.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-muted mb-6 mb-md-0">
              We put our money where our mouthes are. Once you're part of our team, we're going to take the best possible care of you with tons of benefits and perks unavailable anywhere else.
            </p>

          </div>
          <div class="col-12 col-md-6 order-md-1">

            <!-- Card -->
            <div class="card card-border border-success shadow-lg">
              <div class="card-body">

                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex align-items-center">

                    <!-- Text -->
                    <div class="me-auto">

                      <!-- Heading -->
                      <p class="fw-bold mb-1">
                        Comprehensive benefits
                      </p>

                      <!-- Text -->
                      <p class="fs-sm text-muted mb-0">
                        Health, dental, vision, 401k, and more.
                      </p>

                    </div>

                    <!-- Check -->
                    <div class="badge badge-rounded-circle bg-success-soft ms-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">

                    <!-- Text -->
                    <div class="me-auto">

                      <!-- Heading -->
                      <p class="fw-bold mb-1">
                        Unlimited time off
                      </p>

                      <!-- Text -->
                      <p class="fs-sm text-muted mb-0">
                        Vacation on your own terms.
                      </p>

                    </div>

                    <!-- Check -->
                    <div class="badge badge-rounded-circle bg-success-soft ms-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">

                    <!-- Text -->
                    <div class="me-auto">

                      <!-- Heading -->
                      <p class="fw-bold mb-1">
                        Cutting edge hardware
                      </p>

                      <!-- Text -->
                      <p class="fs-sm text-muted mb-0">
                        We provide brand new computers and phones.
                      </p>

                    </div>

                    <!-- Check -->
                    <div class="badge badge-rounded-circle bg-success-soft ms-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                  <div class="list-group-item d-flex align-items-center">

                    <!-- Text -->
                    <div class="me-auto">

                      <!-- Heading -->
                      <p class="fw-bold mb-1">
                        Moving assistance
                      </p>

                      <!-- Text -->
                      <p class="fs-sm text-muted mb-0">
                        We will help you get here to work with us!
                      </p>

                    </div>

                    <!-- Check -->
                    <div class="badge badge-rounded-circle bg-success-soft ms-4">
                      <i class="fe fe-check"></i>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- IMAGE -->
    <section data-jarallax data-speed=".8" class="py-14 py-lg-16 jarallax" style="background-image: url(assets/img/covers/cover-4.jpg);">

      <!-- Shape -->
      <div class="shape shape-top shape-fluid-x text-light">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h2880v125h-720L720 250H0V0z" fill="currentColor"/></svg>      </div>

      <!-- Shape -->
      <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M720 125L2160 0h720v250H0V125h720z" fill="currentColor"/></svg>      </div>

    </section>

    <!-- APPLYING -->
    <section class="pt-6 pt-md-8">
      <div class="container pb-8 pb-md-11 border-bottom border-gray-300">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Badge -->
            <span class="badge rounded-pill bg-primary-desat-soft mb-3">
              <span class="h6 text-uppercase">Applying</span>
            </span>

            <!-- Heading -->
            <h2>
              Let’s find you an <span class="text-primary">open position</span>.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-gray-700 mb-7 mb-md-9">
              Find the right job for you no matter what it is that you do.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Form -->
            <form class="mb-7 mb-md-9">
              <div class="row">
                <div class="col-12 col-md-4">

                  <div class="form-group mb-5 mb-md-0">

                    <!-- Label -->
                    <label class="form-label" for="applyRoles">Roles</label>

                    <!-- Select -->
                    <select class="form-select" id="applyRoles">
                      <option selected>All roles</option>
                      <option>Design</option>
                      <option>Engineering</option>
                      <option>Product</option>
                      <option>Testing</option>
                      <option>Support</option>
                    </select>

                  </div>

                </div>
                <div class="col-12 col-md-4">

                  <div class="form-group mb-5 mb-md-0">

                    <!-- Label -->
                    <label class="form-label" for="applyTeam">Team</label>

                    <!-- Select -->
                    <select class="form-select" id="applyTeam">
                      <option selected>All teams</option>
                      <option>Consumer</option>
                      <option>Consulting</option>
                      <option>Internal tools</option>
                    </select>

                  </div>

                </div>
                <div class="col-12 col-md-4">

                  <div class="form-group mb-0">

                    <!-- Label -->
                    <label class="form-label" for="applyLocation">Location</label>

                    <!-- Select -->
                    <select class="form-select" id="applyLocation">
                      <option selected>All locations</option>
                      <option>London</option>
                      <option>Los Angeles</option>
                      <option>Paris</option>
                      <option>San Francisco</option>
                    </select>

                  </div>

                </div>
              </div> <!-- / .row -->
            </form>

          </div>
        </div> <!-- / .row -->
        <div class="row align-items-center mb-5">
          <div class="col">

            <!-- Heading -->
            <h4 class="fw-bold mb-1">
              Design & UX
            </h4>

            <!-- Text -->
            <p class="fs-sm text-muted mb-0">
              User experience and design are top priorities at Landkit.
            </p>

          </div>
          <div class="col-auto">

            <!-- Badge -->
            <span class="badge rounded-pill bg-success-soft">
              <span class="h6 text-uppercase">4 openings</span>
            </span>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Table -->
            <div class="table-responsive mb-7 mb-md-9">
              <table class="table table-align-middle">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Role
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Team
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Location
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Senior UX Designer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Responsible for design systems and brand management.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consumer
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Los Angeles
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Motion Designer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Responsible for creating life in our apps.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Product
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          San Francisco, CA
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Design Researcher
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Help us make the best decisions with qualitative experiments.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consulting
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          London
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Production Designer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Create, collect, and distribute beautiful assets.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consulting
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Paris
                        </p>
                      </a>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row align-items-center mb-5">
          <div class="col">

            <!-- Heading -->
            <h4 class="fw-bold mb-1">
              Engineering
            </h4>

            <!-- Text -->
            <p class="fs-sm text-muted mb-0">
              This is Landkit's bread and butter – help us make it better.
            </p>

          </div>
          <div class="col-auto">

            <!-- Badge -->
            <span class="badge rounded-pill bg-success-soft">
              <span class="h6 text-uppercase">4 openings</span>
            </span>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Table -->
            <div class="table-responsive mb-5">
              <table class="table table-align-middle">
                <thead>
                  <tr>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Role
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Team
                      </span>
                    </th>
                    <th>
                      <span class="h6 text-uppercase fw-bold">
                        Location
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Ruby Engineer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Responsible for pipeline and build system.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consumer
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Los Angeles
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Javascript Prototyper
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Helping us build quick experiments for testing.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Product
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          San Francisco, CA
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Reliability Engineer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Managing operations and testing for improved stability.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consulting
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          London
                        </p>
                      </a>

                    </td>
                  </tr>
                  <tr>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="mb-1">
                          Junior PHP Engineer
                        </p>
                        <p class="fs-sm text-muted mb-0">
                          Help us with any odds and ends that need tackling.
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Consulting
                        </p>
                      </a>

                    </td>
                    <td>

                      <a href="career-single.html" class="text-reset text-decoration-none">
                        <p class="fs-sm mb-0">
                          Paris
                        </p>
                      </a>

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- Text -->
            <p class="fs-sm text-center text-muted mb-0">
              Don’t see the job you want? <a href="#!">Let us know</a>.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- TESTIMONIALS -->
    <section class="pt-8 pt-md-11">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h2>
              Remember, our employees are our biggest fans.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-muted mb-7 mb-md-9">
              No matter your job title or department, if you're a member of our team you are our top priority. We can deeply about everyone who works with us.
            </p>

          </div>
        </div><!-- / .row -->
        <div class="card card-row shadow-light-lg">
          <div class="row gx-0">
            <a class="col-12 col-md-6 bg-cover card-img-start" style="background-image: url(assets/img/photos/photo-1.jpg);" href="#!">

              <!-- Image (placeholder) -->
              <img src="assets/img/photos/photo-1.jpg" alt="..." class="img-fluid d-md-none invisible">

              <!-- Shape -->
              <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/></svg>              </div>

            </a>
            <div class="col-12 col-md-6 order-md-1">

              <!-- Body -->
              <div class="card-body">
                <blockquote class="blockquote mb-0 text-center">

                  <!-- Text -->
                  <p class="mb-5 mb-md-7">
                    “Working at Landkit has been a dream. The team is amazing, the office is perfect, and I feel like I'm part of a family. I'll be here for a great many years.”
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
    </section>

    <!-- SHAPE -->
    <div class="position-relative mt-n11">
      <div class="shape shape-bottom shape-fluid-x text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
    </div>

    <!-- FOOTER -->
    <section class="pt-11 bg-dark">
      <footer class="py-8 py-md-11 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
      
              <!-- Brand -->
              <img src="./assets/img/brand.svg" alt="..." class="footer-brand img-fluid mb-2">
      
              <!-- Text -->
              <p class="text-gray-700 mb-2">
                A better way to build.
              </p>
      
              <!-- Social -->
              <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                <li class="list-inline-item list-social-item me-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/instagram.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item me-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/facebook.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item me-3">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/twitter.svg" class="list-social-icon" alt="...">
                  </a>
                </li>
                <li class="list-inline-item list-social-item">
                  <a href="#!" class="text-decoration-none">
                    <img src="./assets/img/icons/social/pinterest.svg" class="list-social-icon" alt="...">
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
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
              </ul>
      
            </div>
            <div class="col-6 col-md-4 col-lg-2">
      
              <!-- Heading -->
              <h6 class="fw-bold text-uppercase text-gray-700">
                Services
              </h6>
      
              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    UI Kit
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
                  <a href="#!" class="text-reset">
                    Page Builder
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    UI Kit
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Styleguide
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Documentation
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Changelog
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
                    Documentation
                  </a>
                </li>
                <li class="mb-3">
                  <a href="#!" class="text-reset">
                    Changelog
                  </a>
                </li>
                <li>
                  <a href="#!" class="text-reset">
                    Pagebuilder
                  </a>
                </li>
              </ul>
      
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </footer>
    </section>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>
