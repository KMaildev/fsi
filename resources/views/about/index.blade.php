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
                    About of Our Company
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

    <section class="about-three">
        <div class="shape4">
            <img src="{{ asset('assets/images/shapes/about-v3-shape3.png') }}" alt="#">
        </div>
        <div class="shape5">
            <img src="{{ asset('assets/images/shapes/about-v3-shape4.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <center>
                        <img src="{{ asset('data/aboutus.png') }}" alt="#" style="width: 95%;">
                    </center>
                </div>

                <div class="col-xl-7">
                    <div class="about-three__content">
                        <div class="sec-title">
                            <div class="sec-title__tagline">
                                <div class="inner">
                                    <div class="round-box">
                                        <img src="{{ asset('assets/images/shapes/sec-title-shape.png') }}" alt="#">
                                    </div>
                                    <div class="text">
                                        <p>Introduce Company</p>
                                    </div>
                                </div>
                            </div>
                            <h2 class="sec-title__title">
                                About of Our Company
                            </h2>
                        </div>

                        <div class="about-three__content-text1">
                            <p style="text-align: justify">
                                The company is formerly well-established as Fore Signal International Services Co., Ltd in
                                Since 2007. It is one the Leading Trading and Manpower Recruitment Agency among other
                                Companies especially for Middle East Countries in Yangon, Myanmar.
                                Company is officially registered under the Ministry of National Planning & Economic
                                Development, Myanmar with Licensed No. 152/2021.

                                <br><br>

                                its main objective is to help and solve the unemployment problem of the country as well as
                                to support the economy of the nations.
                            </p>
                        </div>

                        <div class="about-three__content-text2">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7 col-md-7">
                                    <div class="about-three__content-text2-left">
                                        <ul>
                                            <li>
                                                <div class="content-box">
                                                    <p style="text-align: justify">
                                                        To improve the quality of skillful employees lives by giving them
                                                        overseas job opportunities
                                                    </p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="content-box">
                                                    <p style="text-align: justify">
                                                        To deliver the right jobs to the right people
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="about-three__content-text2-progress">
                                        <div class="shape6">
                                            <img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}"
                                                alt="#">
                                        </div>
                                        <div class="shape7">
                                            <img src="{{ asset('assets/images/shapes/about-v1-shape2.png') }}"
                                                alt="#">
                                        </div>
                                        <div class="progress-box">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#ffffff"
                                                    data-bgColor="#fcbb54" data-width="90" data-height="90"
                                                    data-linecap="normal" value="100">
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="16" data-speed="2000"></span>
                                                    <span class="count-Parsent"> Years</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-box">
                                            <h3>
                                                Our Experience
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-three__content-text4">
                            <div class="img-box">
                                <img src="{{ asset('assets/images/shapes/about-v3-shape2.png') }}" alt="#">
                            </div>
                            <div class="text-box">
                                <p>
                                    Fore Signal Int'l Services Co.,Ltd
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="support-one support-one--two">
        <div class="shape4">
            <img src="{{ asset('assets/images/shapes/support-v1-shape4.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <style>
                        .table {
                            border-collapse: collapse;
                            border: 1px solid black;
                            width: 100%;
                        }

                        th,
                        td {
                            border: 1px solid black;
                        }
                    </style>

                    <center>
                        <h2 class="sec-title__title">
                            Company Information
                        </h2>
                    </center>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" width="30%" style="background-color: #e3e4ef; color: black;">
                                    Company Name
                                </th>
                                <td>
                                    Fore Signal Int'l Services Co., Ltd (oversea employment agency)
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Established Year in Myanmar
                                </th>
                                <td>
                                    2007
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">
                                    Labor license
                                </th>
                                <td>
                                    No.152/2021
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Service we offer
                                </th>
                                <td>
                                    Overseas employment agency
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">
                                    Type of company
                                </th>
                                <td>
                                    Private Company Limited
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Focus Market
                                </th>
                                <td>
                                    Thailand, Malaysia, Singapore, Japan, etc..
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" width="20%" style="background-color: #e3e4ef; color: black;">
                                    Number of Employees
                                </th>
                                <td>30</td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">
                                    Headquartered at
                                </th>
                                <td>
                                    No(1078), Maharbandoola Street, 44 Quarter, North Dagon Township, Yangon, Myanmar
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #e3e4ef; color: black;">
                                    Contact No
                                </th>
                                <td>
                                    (+959) 448033414, 254271529
                                </td>
                            </tr>

                            <tr>
                                <th scope="row" style="background-color: #f7f2f2; color: black;">E-Mail</th>
                                <td>
                                    foresignal.int@gmail.com
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <style>
        .projects-one--two::before {
            height: 1200px !important;
        }
    </style>
    <section class="projects-one projects-one--two">
        <div class="shape5">
            <img src="{{ asset('assets/images/shapes/projects-v1-shape5.png') }}" alt="#">
        </div>
        <div class="shape6">
            <img src="{{ asset('assets/images/shapes/projects-v1-shape6.png') }}" alt="#">
        </div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <div class="inner">
                        <div class="round-box">
                            <img src="{{ asset('assets/images/shapes/sec-title-shape.png') }}" alt="#">
                        </div>
                        <div class="text">
                            <p>
                                Company Information
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="sec-title__title">
                    Legal Documents
                </h2>
            </div>
            <div class="row">

                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="projects-one__single">
                        <div class="projects-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/1.jpg') }}" alt="#"
                                    style="width: 100%; height: 500px; background-size: center; object-fit: cover; object-position: top;">
                            </div>
                        </div>

                        <div class="projects-one--two__content">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape1.png') }}" alt="#">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape2.png') }}" alt="#">
                            </div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape3.png') }}" alt="#">
                            </div>
                            <div class="shape4">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape4.png') }}" alt="#">
                            </div>
                            <div class="content-box">
                                <p class="text1">
                                    Fore Signal Int'l Services Co.,Ltd
                                </p>
                                <h3>
                                    <a href="javascript::void(0)">
                                        Certificate of Incorporation
                                    </a>
                                </h3>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="projects-one__single">
                        <div class="projects-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/3.jpg') }}" alt="#"
                                    style="width: 100%; height: 500px; background-size: center; object-fit: cover; object-position: top;">
                            </div>
                        </div>

                        <div class="projects-one--two__content">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape1.png') }}" alt="#">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape2.png') }}" alt="#">
                            </div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape3.png') }}" alt="#">
                            </div>
                            <div class="shape4">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape4.png') }}" alt="#">
                            </div>
                            <div class="content-box">
                                <p class="text1">
                                    Fore Signal Int'l Services Co.,Ltd
                                </p>
                                <h3>
                                    <a href="javascript::void(0)">
                                        Overseas Employment Agency Licence
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="projects-one__single">
                        <div class="projects-one__single-img">
                            <div class="inner">
                                <img src="{{ asset('data/2.jpg') }}" alt="#"
                                    style="width: 100%; height: 500px; background-size: center; object-fit: cover; object-position: top;">
                            </div>
                        </div>

                        <div class="projects-one--two__content">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape1.png') }}" alt="#">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape2.png') }}" alt="#">
                            </div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape3.png') }}" alt="#">
                            </div>
                            <div class="shape4">
                                <img src="{{ asset('assets/images/shapes/projects-v1-shape4.png') }}" alt="#">
                            </div>
                            <div class="content-box">
                                <p class="text1">
                                    Fore Signal Int'l Services Co.,Ltd
                                </p>
                                <h3>
                                    <a href="javascript::void(0)">
                                        Overseas Employment Agency Licence for Thailand
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="work-process-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title__tagline">
                    <div class="inner">
                        <div class="round-box">
                            <img src="{{ asset('assets/images/shapes/sec-title-shape.png') }}" alt="#">
                        </div>
                        <div class="text">
                            <p>
                                Company
                            </p>
                        </div>
                    </div>
                </div>
                <h2 class="sec-title__title">
                    Fore Signal Int'l Services Co.,Ltd
                </h2>
            </div>

            <div class="row">

                <div class="col-xl-6 col-lg-6 col-sm-12 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="work-process-one__single text-center" style="width: 100%; max-width: 100%;">
                        <div class="shape3">
                            <img src="{{ asset('assets/images/shapes/work-process-v1-shape3.png') }}" alt="#">
                        </div>
                        <div class="icon-box">
                            <span class="icon-interview"></span>
                        </div>
                        <div class="inner">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/shapes/work-process-v1-shape1.png') }}" alt="#">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/shapes/work-process-v1-shape2.png') }}" alt="#">
                            </div>
                            <div class="text-box">
                                <h2>
                                    <a href="javascript::void(0)">
                                        Our People
                                    </a>
                                </h2>
                                <p style="text-align: justify">
                                    Fore Signal Int'l service has a team of professionals who have been trained and possess
                                    significant experience in the manpower recruitment industry. Every aspect of the
                                    recruitment process are considerable focus to insure the provision of
                                    prompt, high quality and professional recruitment service. The company communicates
                                    regularly with clients to pay full attention to every detail and requirements provided
                                    by our clients. Every recruitment activity is designed to provide our
                                    client with a high level of confidence that recruitment targets are on track and success
                                    is within reach
                                </p>
                            </div>
                        </div>

                        <div class="work-process-one__single-bottom">
                            <div class="count-box"></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-sm-12 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="work-process-one__single text-center" style="width: 100%; max-width: 100%;">
                        <div class="icon-box">
                            <span class="icon-leadership"></span>
                        </div>
                        <div class="inner">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/shapes/work-process-v1-shape1.png') }}" alt="#">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/shapes/work-process-v1-shape2.png') }}" alt="#">
                            </div>
                            <div class="text-box">
                                <h2>
                                    <a href="javascript::void(0)">
                                        Our Team Effort
                                    </a>
                                </h2>
                                <p style="text-align: justify">
                                    Fore Signal Int'l Services, leverages the experience and intellectual capital of its
                                    team members to provide clients with effective solutions to their Human Resource
                                    requirements. We have always played a very active role in market scenario to
                                    provide the best quality services and to ensure that we cater to the exact demands of
                                    our valued clients.
                                </p>
                                <br><br><br><br>
                            </div>
                        </div>

                        <div class="work-process-one__single-bottom">
                            <div class="count-box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-one">
        <div class="shape3">
            <img src="{{ asset('assets/images/shapes/services-v1-shape2.png') }}" alt="#">
        </div>
        <div class="shape4">
            <img src="{{ asset('assets/images/shapes/services-v1-shape3.png') }}" alt="#">
        </div>
        <div class="shape5">
            <img src="{{ asset('assets/images/shapes/services-v1-shape4.png') }}" alt="#">
        </div>
        <div class="shape6">
            <img src="{{ asset('assets/images/shapes/services-v1-shape5.png') }}" alt="#">
        </div>
        <div class="shape7">
            <img src="{{ asset('assets/images/shapes/services-v1-shape6.png') }}" alt="#">
        </div>
        <div class="shape8">
            <img src="{{ asset('assets/images/shapes/services-v1-shape7.png') }}" alt="#">
        </div>
        <div class="shape9">
            <img src="{{ asset('assets/images/shapes/services-v1-shape8.png') }}" alt="#">
        </div>
        <div class="shape10">
            <img src="{{ asset('assets/images/shapes/services-v1-shape9.png') }}" alt="#">
        </div>
        <div class="shape11">
            <img src="{{ asset('assets/images/shapes/services-v1-shape10.png') }}" alt="#">
        </div>
        <div class="shape12">
            <img src="{{ asset('assets/images/shapes/services-v1-shape11.png') }}" alt="#">
        </div>

        <div class="container">
            <div class="services-one__top">
                <div class="sec-title">
                    <div class="sec-title__tagline">
                        <div class="inner">
                            <div class="round-box">
                                <img src="{{ asset('assets/images/shapes/sec-title-shape.png') }}" alt="#">
                            </div>
                            <div class="text">
                                <p>Company Statement</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title__title">
                        Our Vision, Transparency <br> & Mission
                    </h2>
                </div>

                <div class="services-one__top-text">
                    <p>
                        To be a leading overseas employment agency, connecting global talent with exceptional opportunities
                        abroad, and making a positive impact on individuals and societies worldwide.
                    </p>
                </div>
            </div>

            <div class="row">
                <!--Start Services One Single-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                                alt="#"></div>
                        <div class="services-one__single-icon">
                            <div class="shape1"></div>
                            <span class="icon-server-data"></span>
                        </div>

                        <div class="services-one__single-content">
                            <h2>
                                <a href="javascript::void(0)">
                                    Vision
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                Our organization has clear vision and strong values, which educates and ensures that every
                                member of our staffs are clear about the strategy of our company, their role, and
                                responsibility in its delivery.
                            </p>
                            <br><br><br><br><br>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

                <!--Start Services One Single-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow fadeInLeft" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="shape2">
                            <img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt="#">
                        </div>
                        <div class="services-one__single-icon">
                            <div class="shape1"></div>
                            <span class="icon-laptop"></span>
                        </div>

                        <div class="services-one__single-content">
                            <h2>
                                <a href="javascript::void(0)">
                                    Transparency
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                We will always maintain an open and straightforward attitude about our mode of functioning
                                and relations with all candidates and clients.
                                <br><br>
                                Our work will reflect the best practices in the industry.
                            </p>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

                <!--Start Services One Single-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="services-one__single text-center">
                        <div class="shape2">
                            <img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt="#">
                        </div>
                        <div class="services-one__single-icon">
                            <div class="shape1"></div>
                            <span class="icon-hard-drive"></span>
                        </div>

                        <div class="services-one__single-content">
                            <h2>
                                <a href="javascript::void(0)">
                                    Mission
                                </a>
                            </h2>
                            <p style="text-align: justify">
                                Client satisfaction is our goal. Our system of selection is guaranteed. We undertake the
                                responsibility of selecting the right candidates for the right job by strictly following the
                                instructions of our principals. We do recruitment considering as a mission by looking
                                forward to the future also. We select the candidates up to the entire satisfaction as well
                                as to fulfill the trust of employers assigned us.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End Services One Single-->

            </div>
        </div>
    </section>

    <br><br><br>
@endsection
