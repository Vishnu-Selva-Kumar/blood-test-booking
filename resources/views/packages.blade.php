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
    <style>
        .single-news>.news-body>.news-content>p {
            min-height: 130px;
        }
        .single-news > .news-body > .news-content > h2 {
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
                        <h2>Packages</h2>
                        <ul class="bread-list">
                            <li><a href="/">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="blog grid section">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-12">
                    <div class="main-sidebar">
                        @if (false)
                            <!-- Single Widget -->
                            <div class="single-widget search" style="padding: 10px">
                                <div class="form">
                                    <input type="email" placeholder="Search Here..." />
                                </div>
                            </div>
                            <!--/ End Single Widget -->
                        @endif

                        <!-- Single Widget -->
                        <div class="single-widget category" style="padding: 15px">
                            <h3 class="title">Categories</h3>
                            <ul class="categor-list">
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('web.packages.category', [$category->id]) }}">{{ $category->name ?? '' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--/ End Single Widget -->

                        @if (false)
                            <!-- Single Widget -->
                            <div class="single-widget recent-post" style="padding: 15px">
                                <h3 class="title">Latest Packages</h3>
                                <!-- Single Post -->
                                <div class="single-post">
                                    <div class="image">
                                        <img src="assets/img/blog-sidebar1.jpg" alt="#" />
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">We have annnocuced our new product.</a></h5>
                                        <ul class="comment">
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                                                2020
                                            </li>
                                            <li>
                                                <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            </div>
                            <!--/ End Single Widget -->
                        @endif



                    </div>
                </div>


                <div class="col-lg-9 col-12">
                    <div class="row">
                        @foreach ($packages as $package)
                            <div class="col-lg-4 col-md-4 col-12">
                                <!-- Single Blog -->
                                <div class="single-news">
                                    <div class="news-head">
                                        <img src="{{ asset('storage/' . $package->image) }}" alt="#" />
                                    </div>
                                    <div class="news-body">
                                        <div class="news-content">
                                            <h2>
                                                <a
                                                    href="{{ route('web.packages.show', ['slug' => $package->slug]) }}">{{ $package->title ?? '' }}</a>
                                            </h2>
                                            <p class="text">{{ $package->short_description ?? '' }}</p>
                                            <a href="{{ route('web.packages.show', ['slug' => $package->slug]) }}"
                                                class="date">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                        @endforeach

                        <div class="col-12">

                            {!! $packages->withQueryString()->links('pagination::custom') !!}


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ End Single News -->

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
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- jQuery Migrate -->
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <!-- Easing -->
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <!-- Colors -->
    <script src="{{ asset('assets/js/colors.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Datepicker -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <!-- jQuery Nav -->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- Slicknav -->
    <script src="{{ asset('assets/js/slicknav.min.js') }}"></script>
    <!-- ScrollUp -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Niceselect -->
    <script src="{{ asset('assets/js/niceselect.js') }}"></script>
    <!-- Tilt jQuery -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- Steller -->
    <script src="{{ asset('assets/js/steller.js') }}"></script>
    <!-- Wow -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
