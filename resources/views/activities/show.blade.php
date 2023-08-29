@extends('layouts.main')
@section('title', 'Activities')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/gallery.jpg') }})">
        </div>
        <div class="page-header__gradient"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-gradient-bg.png') }});"></div>
        <div class="shape1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>
                    Gallery & Activities
                </h2>
                <ul class="thm-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            {{ $category->title ?? '' }}
                        </a>
                    </li>
                    <li><span>/</span></li>
                    <li>
                        Gallery & Activities
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="gallery-one">
        <div class="container">
            <div class="row">

                @foreach ($activities as $activity)
                    <div class="col-md-12">
                        <p style="font-size: 20px;">
                            {{ $activity->title ?? '' }}
                        </p>
                    </div>
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img">

                                    <img data-enlargeable="" src="{{ $image }}" alt=""
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: 260px; background-size: center; object-fit: cover;">

                                    <div class="overlay-content">
                                        <div class="text-box">
                                            <p>FSI</p>
                                            <h3>
                                                <a href="javascript::void(0)" style="font-size: 18px;">
                                                    Overseas Employment Agency
                                                </a>
                                            </h3>
                                        </div>

                                        <div class="links-box">
                                            <ul>
                                                <li>
                                                    <a class="img-popup" href="{{ $image }}">
                                                        <span class="icon-zoom-out"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <hr>
                @endforeach

            </div>
        </div>
    </section>
@endsection
