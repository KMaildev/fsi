@extends('layouts.main')
@section('title', 'Team')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/team.jpeg') }})">
        </div>
        <div class="page-header__gradient"
            style="background-image: url({{ asset('assets/images/backgrounds/page-header-gradient-bg.png') }});"></div>
        <div class="shape1 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape1.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="page-header__inner text-center">
                <h2>
                    Our Team
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



    <section class="team-one team-one--team">
        <div class="container">

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="team-one__single">
                            <div class="team-one__single-img">
                                <div class="inner">
                                    <img src="{{ $team->photo }}" alt="#"
                                        style="border-radius: 30px 0 30px 0; width: 100%; height: 390px; background-size: center; object-fit: cover; object-position: top;">
                                    <div class="social-link">
                                        <ul>
                                            <li>
                                                <a class="fb" href="#"><span class="icon-facebook"></span></a>
                                            </li>
                                            <li>
                                                <a class="tw" href="#"><span class="icon-twitter"></span></a>
                                            </li>
                                            <li>
                                                <a class="pin" href="#"><span class="icon-pinterest"></span></a>
                                            </li>
                                            <li>
                                                <a class="in" href="#"><span class="icon-instagram"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="team-one__single-content text-center">
                                <h2>
                                    <a href="javascript::void(0)">
                                        {{ $team->name ?? '' }}
                                    </a>
                                </h2>
                                <p>{{ $team->position ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
