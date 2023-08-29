<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fore Signal Int'l Services Co.,Ltd - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/flaticon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/ontech.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ontech-responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        @include('layouts.menu')

        <div class="stricky-header stricky-header__two stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>


        @if (URL::current() == route('home'))
            @include('layouts.slider')
        @endif


        @yield('content')


        <footer class="footer-one">
            <div class="footer-one__bg"
                style="background-image: url({{ asset('assets/images/backgrounds/footer-bg.jpg') }})">
            </div>
            <div class="shape1 float-bob-x">
                <img src="{{ asset('assets/images/shapes/footer-v1-shape1.png') }}" alt="#">
            </div>
            <div class="shape2 float-bob-y">
                <img src="{{ asset('assets/images/shapes/footer-v1-shape2.png') }}" alt="#">
            </div>
            <div class="shape3 float-bob-y">
                <img src="{{ asset('assets/images/shapes/footer-v1-shape3.png') }}" alt="#">
            </div>
            <div class="shape4 float-bob-x">
                <img src="{{ asset('assets/images/shapes/footer-v1-shape4.png') }}" alt="#">
            </div>

            <div class="footer-one__top">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-one__single footer-one__about">
                                <div class="title-box">
                                    <h3>
                                        Contact Us
                                    </h3>
                                </div>

                                <div class="footer-one__about-text">
                                    <ul class="footer-one__links-list">
                                        <li style="color: white;">
                                            No(1078), Maharbandoola St, 44 Quarter, North Dagon Township,
                                            Yangon, Myanmar
                                        </li>

                                        <li>
                                            <a href="tel:(+959) 448 033 414" style="color: white">
                                                (+959) 448 033 414
                                            </a>
                                            <a href="tel:(+959) 254 271 529" style="color: white">
                                                (+959) 254 271 529
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Footer One Single-->

                        <div class="col-xl-3 col-lg-3 col-md-3 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-one__single footer-one__links">
                                <div class="title-box">
                                    <h3>
                                        Quick Links
                                    </h3>
                                </div>
                                <div class="footer-one__links-box">
                                    <ul class="footer-one__links-list">
                                        <li>
                                            <a href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('about.index') }}">
                                                Our Company
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('ceo_message') }}">
                                                President's Message
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('team') }}">
                                                Professional Team
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank">
                                                Company Profile
                                            </a>
                                        </li>

                                        @foreach ($countries as $country)
                                            <li class="mega-menu-item">
                                                <a href="{{ route('job.show', $country->id) }}">
                                                    {{ $country->country ?? '' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-one__single footer-one__links">
                                <div class="title-box">
                                    <h3>
                                        Google Map
                                    </h3>
                                </div>
                                <div class="footer-one__links-box">

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 wow animated fadeInUp" data-wow-delay="0.4s">
                            <div class="footer-one__single footer-one__newsletter">
                                <div class="title-box">
                                    <h3>Facebook</h3>
                                </div>
                                <div class="footer-one__newsletter-box">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-left">
                                    <div class="title-box">
                                        <p>Social </p>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="footer-one__bottom-right">
                                    <p>
                                        ©{{ now()->year }}
                                        All Rights Reserved
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ asset('assets/images/resources/footer-logo.png') }}" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@ontech.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>
    <script src="{{ asset('assets/js/ontech.js') }}"></script>
</body>

</html>
