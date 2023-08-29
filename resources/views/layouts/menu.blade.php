<header class="main-header main-header-two clearfix">
    <div class="main-header-two__top">
        <div class="container">
            <div class="main-header-two__top-inner">

                <div class="main-header-two__top-left">
                    <div class="logo-two">
                        <img src="{{ asset('assets/images/resources/logo-2.png') }}" alt="#">
                    </div>

                    <div class="main-header__contact-info">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-call"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Call for Anything </p>
                                        <h4>
                                            <a href="tel:(+959) 448033414">
                                                (+959) 448033414
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>You may send an email</p>
                                        <h4>
                                            <a href="mailto:foresignal.int@gmail.com">
                                                foresignal.int@gmail.com
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-clock2"></span>
                                    </div>
                                    <div class="text-box">
                                        <p>Sunday - Closed</p>
                                        <h4>Mon - Sat(9.00 - 5.00) </h4>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="main-header-two__top-right">
                    <div class="main-header-two__top-right-content">
                        <div class="text-box">
                            <p>
                                Overseas Employment Agency
                            </p>
                        </div>

                        <div class="btn-box">
                            <a href="{{ route('contact.index') }}">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-one__bottom">
        <nav class="main-menu clearfix">
            <div class="main-menu__wrapper clearfix">
                <div class="container">
                    <div class="main-header-one__bottom-inner">

                        <div class="main-header-one__bottom-left">
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">

                                    <li>
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">
                                            About Us
                                        </a>
                                        <ul>
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
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">
                                            Categories we supply
                                        </a>
                                        <ul class="mega-submenu">
                                            @foreach ($countries as $country)
                                                <li class="mega-menu-item">
                                                    <a href="{{ route('job.show', $country->id) }}">
                                                        {{ $country->country ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li class="dropdown">
                                        <a href="#">
                                            Gallery & Activities
                                        </a>
                                        <ul>
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="{{ route('activities.show', $category->id) }}">
                                                        {{ $category->title ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="main-header-one__bottom-right">
                            <div class="content-box">
                                <div class="icon-box">
                                    <span class="icon-location"></span>
                                </div>

                                <div class="text-box">
                                    <p>
                                        Top 1 Overseas Employment Agency in Myanmar
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
