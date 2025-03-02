<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="pavilan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>Mediplus - Medical and Doctor HTML Template.</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <!-- Mediplus CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/color/color1.css') }}" />
    <link rel="stylesheet" id="colors" />
</head>
<style>
    .doctor-details-item .doctor-details-biography h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #1a76d1;
    }


    .doctor-details-item .doctor-details-contact {
        padding: 20px;
    }

    .doctor-details-item .doctor-details-contact h3 {
        margin-bottom: 10px;
    }

    .appointment .form textarea {
        height: 125px;
    }

    .doctor-details-biography h3 {
        border: 1px solid #8080809c !important;
        padding: 12px !important;
        background: #1a76d1 !important;
        color: white !important;
    }

    span.current {
        font-size: 10px;
    }
</style>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <!-- Contact -->
                        <!-- <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>  -->
                        <!-- End Contact -->
                    </div>
                    <div class="col-lg-6 col-md-7 col-12">
                        <!-- Top Contact -->
                        <ul class="top-contact">
                            <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:support@yourmail.com">support@yourmail.com</a></li>
                        </ul>
                        <!-- End Top Contact -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="#"></a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>

                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="{{ request()->routeIs('web.home') ? 'active' : '' }}"><a
                                                href="{{ route('web.home') }}">Home</a></li>
                                        <li class="{{ request()->routeIs('web.services.index') ? 'active' : '' }}"><a
                                                href="{{ route('web.services.index') }}">Services</a></li>
                                        <li class="{{ request()->routeIs('web.packages.index') ? 'active' : '' }}"><a
                                                href="{{ route('web.packages.index') }}">Packages</a></li>
                                        <li class="{{ request()->routeIs('web.contact.index') ? 'active' : '' }}"><a
                                                href="{{ route('web.contact.index') }}">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="{{ route('web.appointment') }}" class="btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>{{ $package->title ?? '' }}</h2>
                        <ul class="bread-list">
                            <li><a href="/">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">{{ $package->title ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Doctor Details -->
    <div class="doctor-details-area section appointment">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <div class="doctor-details-item">
                        <div class="doctor-details-right-removed">
                            <div class="doctor-name">
                                {{-- <h2 class="name">{{ $package->title ?? '' }}</h2> --}}
                                {{-- <p class="deg">Neurosurgeon.</p> --}}
                                {{-- <p class="degree">MBBS in Neurology, PHD in Neurosurgeon.</p> --}}
                            </div>

                            <div class="doctor-details-biography">
                                {!! str($package->description)->markdown()->sanitizeHtml() !!}
                            </div>

                            @if (count($package->testLists))
                                <div class="doctor-details-biography">
                                    <h3>{{ $package->title ?? '' }} Test List</h3>
                                    <div class="faq-item">
                                        <ul class="accordion">
                                            @foreach ($package->testLists as $test)
                                                <li class="fadeInUp " data-wow-delay=".3s">
                                                    <a
                                                        class="{{ $loop->index == 0 ? 'active' : '' }}">{{ $test->title ?? '' }}</a>
                                                    <div style="padding: 15px">
                                                        {!! str($test->description)->markdown()->sanitizeHtml() !!}
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <div class="doctor-details-biography">
                                <h3>Process</h3>
                                <div style="padding: 15px">
                                    {!! str($package->process)->markdown()->sanitizeHtml() !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    @foreach (['success', 'error', 'warning'] as $msg)
                        @if (session($msg))
                            <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                {{ session($msg) }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    @endforeach
                    <div class="doctor-details-item doctor-details-left">
                        @if ($package->imageurl)
                            <img src="{{ $package->imageurl }}" alt="#" />
                        @endif
                        <div class="doctor-details-contact">
                            <div class="appointment-inner">
                                <div class="title">
                                    <h3>Book your appointment, Pay Later</h3>
                                    <small>You will get a payment link in 2 hours. You can make the payment online or
                                        pay cash to the technician. </small>
                                </div>
                                <form class="form" action="{{ route('web.packages.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <input type="text" name="appointment_at" required
                                                    placeholder="Appointment Date" id="datepicker" />
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <div class="nice-select form-control wide" tabindex="0">
                                                    <input type="hidden" name="number_of_persons" value="">
                                                    <span class="current">Select Number of persons</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected">
                                                            Number of persons (1)
                                                        </li>
                                                        <li data-value="2" class="option">2</li>
                                                        <li data-value="3" class="option">3</li>
                                                        <li data-value="4" class="option">4</li>
                                                        <li data-value="5" class="option">5 or above</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row show_number_of_persons_list">
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text"
                                                    autocomplete="off" required placeholder="Your Full Name" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email"
                                                    autocomplete="off" placeholder="Email ID" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <input name="phone_number" id="phone_number" type="text"
                                                    autocomplete="off" required placeholder="Mobile number" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <textarea name="address" autocomplete="off" id="address" placeholder="Write Your address Here....."></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="button">
                                                    <button type="submit" class="btn">
                                                        Book An Appointment
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Doctor Details -->

    <!-- Footer Area -->
    <footer id="footer" class="footer ">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut
                                labore dolore magna.</p>
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-12">
                                    <ul>
                                        <li><a href="/about-us"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>About Us</a></li>
                                        <li><a href="/services"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Services</a></li>
                                        <li><a href="/packages"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Packages</a></li>
                                        <li><a href="/contact-us"><i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>Contact&nbsp;Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-7 col-12">
                                    <ul>
                                        <ul>
                                            <li><a href="/terms-conditions"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>Terms&nbsp;Conditions</a></li>
                                            <li><a href="/privacy-policy"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>Privacy&nbsp;policy</a></li>
                                            <li><a href="/refund-policy"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>Refund&nbsp;policy</a></li>
                                            <li><a href="/help-center"><i class="fa fa-caret-right"
                                                        aria-hidden="true"></i>Help&nbsp;center</a></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Open Hours</h2>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
                            <ul class="time-sidual">
                                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                                <li class="day">Saturday <span>9.00-18.30</span></li>
                                <li class="day">Sunday <span>9.00-15.00</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>© Copyright 2018 | All Rights Reserved by <a href="#"
                                    target="_blank">MediPlus</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- jquery Migrate JS -->
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('assets/js/colors.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <!-- Jquery Nav JS -->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect JS -->
    <script src="{{ asset('assets/js/niceselect.js') }}"></script>
    <!-- Tilt Jquery JS -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <!-- counterup JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- Steller JS -->
    <script src="{{ asset('assets/js/steller.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
