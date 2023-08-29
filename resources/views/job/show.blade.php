@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/job.jpg') }})">
        </div>
        <div class="page-header__gradient"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-gradient-bg.png') }});"></div>
        <div class="shape1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>
                    Jobs Available In
                    {{ $country->country ?? '' }}
                </h2>
                <ul class="thm-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">
                            Countries We Serve
                        </a>
                    </li>
                    <li><span>/</span></li>
                    <li>Jobs</li>
                </ul>
            </div>
        </div>
    </section>



    <section class="intro-one">
        <div class="shape2">
            <img src="{{ asset('assets/images/shapes/intro-v1-shape2.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box">
                                <img src="{{ asset('assets/images/shapes/sec-title-shape.png') }}" alt="#">
                            </div>
                            <div class="text">
                                <p style="color: black">
                                    Categories we supply
                                </p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title" style="color: black">
                        We have international career <br>
                        opportunities all across Asia.
                    </h2>
                </div>

                @foreach ($jobs as $job)
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="intro-one__single">
                            <div class="intro-one__single-img">
                                <div class="inner">
                                    <img src="{{ $job->photo }}" alt=""
                                        style="width: 100%; height: 280px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="icon-box">
                                    <span class="icon-laptop"></span>
                                </div>
                            </div>

                            <div class="intro-one__single-content text-center">
                                <div class="shape1">
                                    <img src="{{ asset('assets/images/shapes/intro-v1-shape1.png') }}" alt="#">
                                </div>
                                <h2>
                                    <a href="javascript::void(0)">
                                        {{ $job->title ?? '' }}
                                    </a>
                                </h2>
                                <p>
                                    Job in {{ $job->country->country ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
