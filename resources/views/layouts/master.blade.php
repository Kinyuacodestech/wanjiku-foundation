<!DOCTYPE html>
<html lang="en">

<head>
    <meta charseaat="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/asting.css') }}">
    <!-- Template styles -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <img src="{{ asset('frontend/assets/images/loader.png') }}" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <div class="site-header__header-one-wrap clearfix">
            <div class="container">

                <div class="site-header__logo-box float-left">
                    <div class="site-header__logo">
                        <a href="index.html"><img src="assets/images/resources/logo.png" alt=""></a>
                    </div>
                </div>

                <header class="main-nav__header-one">
                    <div class="main-nav__header-one__top clearfix">
                        <div class="main-nav__header-one__top-left">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:92-666-888-0000">92 666 888 0000</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-nav__header-one__top-right">
                            <div class="main-nav__header-one__top-social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="header-navigation stricky">
                        <div class="container clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left-one float-left">
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="main-nav__main-navigation clearfix">
                                    <ul class=" main-nav__navigation-box float-left">

                                        @guest
                                            <li class="dropdown">
                                                <a href="#">Who We are</a>
                                                <ul>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="volunteer.html">Volunteers</a></li>
                                                    <li><a href="become-volunteer.html">Become a Volunteer</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Donations</a>
                                                <ul>
                                                    <li><a href="campaigns.html">Campaigns</a></li>
                                                    <li><a href="campaign-details.html">Campaigns Details</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Events</a>
                                                <ul>
                                                    <li><a href="event.html">Events</a></li>
                                                    <li><a href="event-details.html">Events Details</a></li>
                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">News</a>
                                                <ul>
                                                    <li><a href="news.html">Our Blog</a></li>

                                                </ul><!-- /.sub-menu -->
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        @endguest

                                        @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li>
                                                <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    welcome back {{ Auth::user()->name }}
                                                </a>


                                                <a class="btn btn-success" style="color:aliceblue"
                                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>

                                            </li>
                                        @endguest
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                            <div class="main-nav__right main-nav__right-one float-right">
                                <div class="main-nav__right__btn-one">
                                    <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                                </div>


                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>

        @yield('content')

        <!--Site Footer One Start-->
        <footer class="site-footer" style="background-image: url({{asset('wk.jpg')}})">
            <div class="container">
                <div class="site-footer__one-top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <p class="footer-widget__text">Lorem ipsum dolor sit ame consect etur pisicing elit sed
                                    do eiusmod tempor incididunt ut labore.</p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="#">Donate</a></li>
                                    <li><a href="#">Campaigns</a></li>
                                    <li><a href="#">Fundraise</a></li>
                                    <li><a href="#">Volunteers</a></li>
                                    <li><a href="#">Sponsors</a></li>
                                </ul>
                                <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                                    <li><a href="#">Fundraising</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Faqs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:666-888-0000">666 888 0000</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>666 road, broklyn street new york 600</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__support">
                                <h3 class="footer-widget__title">Support</h3>
                                <p class="footer-widget__support-text">Lorem ipsum dolor sit ame consect etur pisicing
                                    elit sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="footer-widget__support-btn">
                                    <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->

        <!--Site Footer Bottom Start-->
        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer-bottom__inner">
                            <div class="site-footer-bottom__left">
                                <p>?? Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                            </div>
                            <ul class="site-footer-bottom__menu list-unstyled">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><span>/</span></li>
                                <li><a href="#">Terms of Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Site Footer Bottom End-->















    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/resources/logo-2.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@asting.com">needhelp@asting.com</a>
                </li>
                <li>
                    <i class="fas fa-phone-square-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
    </div>



    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vegas.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.js') }}"></script>


    <!-- template scripts -->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>


</body>

</html>
