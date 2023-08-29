@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/about.jpg') }})">
        </div>
        <div class="page-header__gradient"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-gradient-bg.png') }});"></div>
        <div class="shape1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>
                    President's Message
                </h2>
                <ul class="thm-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="team-details">
        <div class="container">
            <div class="row">

                <div class="col-xl-4">
                    <div class="team-details__img">
                        <div class="inner">
                            <img src="{{ asset('data/md.png') }}" alt="#">
                        </div>
                    </div>
                </div>
                <!--End Team Details Img-->

                <!--Start Team Details Content-->
                <div class="col-xl-8">
                    <div class="team-details__content">
                        <div class="title-box">
                            <h2>Daw Than Than Nyunt</h2>
                            <p>Managing Director</p>
                        </div>

                        <div class="text-box">
                            <p style="text-align: justify; color: black; font-size: 20px;">
                                Dear Job Seekers, <br><br>

                                Welcome to our overseas employment agency! <br><br>

                                At our agency, our mission is clear - to connect talented individuals like you with
                                international job opportunities. With our deep understanding of global markets, immigration
                                laws, and visa processes, we can offer a wide range of employment options in various
                                sectors. <br><br>

                                Transparency, ethics, and open communication are at the heart of our values. We are
                                dedicated to providing personalized guidance and support to each one of you. Our commitment
                                to excellence ensures successful placements and long-term relationships with our clients.
                                <br><br>
                                Let's work together to make your dreams of working abroad a reality.
                            </p>
                        </div>

                        <div class="team-details__content-text1">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="team-details__content-text1-single">
                                        <div class="icon-box">
                                            <span class="icon-email2"></span>
                                        </div>

                                        <div class="content-box">
                                            <h3>Email Me </h3>
                                            <p>
                                                <a href="mailto:foresignal.int@gmail.com">
                                                    foresignal.int@gmail.com
                                                </a> <br>
                                                <a href="mailto:info@foresignalinternational.com">
                                                    info@foresignalinternational.com
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="team-details__content-text1-single">
                                        <div class="icon-box">
                                            <span class="icon-location-filled"></span>
                                        </div>

                                        <div class="content-box">
                                            <h3>Address</h3>
                                            <p>
                                                No(1078), Maharbandoola St, 44 Quarter, North Dagon Township,
                                                Yangon, Myanmar
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="team-details__content-bottom">
                            <div class="left-text">
                                <h3>
                                    Interested in discussing?
                                </h3>
                            </div>

                            <div class="right-text">
                                <h4>
                                    <span class="icon-phone-auricular"></span>
                                    <a href="tel:(+959) 448 033 414">
                                        (+959) 448 033 414
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
@endsection
