@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/contact.jpg') }})">
        </div>
        <div class="page-header__gradient"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-gradient-bg.png') }});"></div>
        <div class="shape1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>Contact Us</h2>
                <ul class="thm-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="contact-page__top">
                <div class="title text-center">
                    <h2>Please don't hesitate to contact us <br> with any inquiries or messages.</h2>
                    <p>You can also reach out to us by phone or email are many variations</p>
                </div>

                <ul class="list-unstyled">

                    <li class="contact-page__top-single">
                        <div class="icon">
                            <span class="icon-phone-auricular"></span>
                        </div>
                        <div class="content">
                            <h2>Get In Touch</h2>
                            <p>
                                <a href="tel:(+959) 448033414">
                                    (+959) 448 033 414
                                </a>
                                <a href="tel:25 427 1529">
                                    (+959) 254 271 529
                                </a>
                            </p>
                        </div>
                    </li>

                    <li class="contact-page__top-single">
                        <div class="icon">
                            <span class="icon-location-filled"></span>
                        </div>
                        <div class="content">
                            <h2>Address</h2>
                            <p>
                                No(1078), Maharbandoola St, 44 Quarter, North Dagon Township, <br> Yangon, Myanmar
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="contact-page__bottom">
                <div class="contact-page__bottom-pattern"
                    style="background-image: url(assets/images/pattern/contact-page-pattern.jpg);"> </div>
                <div class="contact-page__bottom-inner">

                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}" autocomplete="off">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="contact-page__btn">
                                    <button type="submit" class="thm-btn">
                                        Send A Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="google-map-one">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61084.639809966524!2d96.15043149729334!3d16.88628028274475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193b44e8b67b3%3A0xb50d88d2ceee17e7!2sNorth%20Dagon%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1693211352001!5m2!1sen!2smm"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

@endsection
