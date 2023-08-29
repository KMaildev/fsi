<footer class="footer-one">
    <div class="footer-one__bg" style="background-image: url({{ asset('data/footer.jpg') }})">
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
                                    <a href="{{ route('home') }}" style="color: white;">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about.index') }}" style="color: white;">
                                        Our Company
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ceo_message') }}" style="color: white;">
                                        President's Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}" style="color: white;">
                                        Professional Team
                                    </a>
                                </li>

                                <li>
                                    <a href="#" target="_blank" style="color: white;">
                                        Company Profile
                                    </a>
                                </li>

                                @foreach ($countries as $country)
                                    <li class="mega-menu-item">
                                        <a href="{{ route('job.show', $country->id) }}" style="color: white;">
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
