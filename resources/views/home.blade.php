<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Mediplus - Free Medical and Doctor Directory HTML Template.</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="assets/css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        .section-title {
            margin-bottom: 15px;
        }

        section.services.section {
            padding: 50px 0px;
        }

        .services .single-service h4 a {
            font-size: 16px;
        }
    </style>

</head>

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
                                <a href="/"><img src="assets/img/logo.png" alt="#"></a>
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

    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider2.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
                                    pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="{{ route('web.appointment') }}" class="btn">Get Appointment</a>
                                    <a href="#" class="btn primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
                                    pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="{{ route('web.appointment') }}" class="btn">Get Appointment</a>
                                    <a href="{{ route('web.static.page', ['slug' => 'about-us']) }}"
                                        class="btn primary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start End Slider -->
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image:url('assets/img/slider3.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="text">
                                <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl
                                    pellentesque, faucibus libero eu, gravida quam. </p>
                                <div class="button">
                                    <a href="{{ route('web.appointment') }}" class="btn">Get Appointment</a>
                                    <a href="{{ route('web.contact.index') }}" class="btn primary">Conatct Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        </div>
    </section>
    <!--/ End Slider Area -->

    @if (false)
        <!-- Start Feautes -->
        <section class="Feautes section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Are Always Ready to Help You & Your Family</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-ambulance-cross"></i>
                            </div>
                            <h3>Emergency Help</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-medical-sign-alt"></i>
                            </div>
                            <h3>Enriched Pharmecy</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features last">
                            <div class="signle-icon">
                                <i class="icofont icofont-stethoscope"></i>
                            </div>
                            <h3>Medical Treatment</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Feautes -->
    @endif

    @if (false)
        <!-- Start Why choose -->
        <section class="why-choose section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="{{ asset('assets/img/section-img.png') }}" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h3>Who We Are</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est
                                lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->
                        <div class="choose-right">
                            <div class="video-image">
                                <!-- Video Animation -->
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <!--/ End Video Animation -->
                                <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                                    class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- End Choose Rights -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Why choose -->
    @endif

    @if (false)
        <!-- Start portfolio -->
        <section class="portfolio section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="owl-carousel portfolio-slider">
                            <div class="single-pf">
                                <img src="assets/img/pf1.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf2.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf3.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf4.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf1.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf2.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf3.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                            <div class="single-pf">
                                <img src="assets/img/pf4.jpg" alt="#">
                                <a href="portfolio-details.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End portfolio -->
    @endif



    <!-- Start service -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Popular Categories</h2>
                        <img src="{{ asset('assets/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>

            @php
                $icons = [
                    'icofont-medical-sign-alt',
                    'icofont-tooth',
                    'icofont-heart-beat',
                    'icofont-ui-cut',
                    'icofont-listening',
                    'icofont-eye-alt',
                    'icofont-blood',
                    'icofont-tooth',
                    'icofont-heart-alt',
                ];
            @endphp

            <div class="row">

                @if (count($categories))
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Start Single Service -->
                            <div class="single-service">
                                <i class="icofont {{ $icons[$loop->index] ?? 'icofont-heart-alt' }}"></i>
                                <h4><a
                                        href="{{ route('web.packages.category', [$category->id]) }}">{{ $category->name ?? '' }}</a>
                                </h4>
                                <p>{{ $category->packages()->count() }} package(s) available</p>
                            </div>
                            <!-- End Single Service -->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--/ End service -->


    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->



    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <img src="{{ asset('assets/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @php
                    $icons = [
                        'icofont-medical-sign-alt',
                        'icofont-tooth',
                        'icofont-heart-beat',
                        'icofont-ui-cut',
                        'icofont-listening',
                        'icofont-eye-alt',
                        'icofont-blood',
                        'icofont-tooth',
                        'icofont-heart-alt',
                    ];
                @endphp

                @if (count($services))
                    @foreach ($services as $service)
                        <!-- Single Table -->
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="single-table">
                                <!-- Table Head -->
                                <div class="table-head">
                                    <div class="icon">
                                        <i class="icofont {{ $icons[$loop->index] }}"></i>
                                    </div>
                                    <h4 class="title">{{ $service->title ?? '' }}</h4>
                                    {{-- <div class="price">
                                <p class="amount">$199<span>/ Per Visit</span></p>
                            </div> --}}
                                </div>
                                <!-- Table List -->

                                <div class="table-bottom">
                                    <a class="btn"
                                        href="{{ route('web.services.show', ['slug' => $service->slug]) }}">Book
                                        Now</a>
                                </div>
                                <!-- Table Bottom -->
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->


    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec
                            gravida.</p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                            <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Most common packages</h2>
                        <img src="assets/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @if (count($packages))
                    @foreach ($packages as $package)
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Blog -->
                            <div class="single-news">
                                <div class="news-head">
                                    <img src="{{ asset('storage/' . $package->image) }}" alt="#">
                                </div>
                                <div class="news-body">
                                    <div class="news-content">                                        
                                        <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>

                                        <p class="text">{{ $package->short_description ?? '' }}</p>

                                        <a href="{{ route('web.packages.show', ['slug' => $package->slug]) }}"
                                            class="date">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- End Blog Area -->

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
    <script src="assets/js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <!-- jquery Ui JS -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Easing JS -->
    <script src="assets/js/easing.js"></script>
    <!-- Color JS -->
    <script src="assets/js/colors.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="assets/js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="assets/js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="assets/js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Steller JS -->
    <script src="assets/js/steller.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>
