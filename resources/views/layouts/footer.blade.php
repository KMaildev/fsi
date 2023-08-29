<footer class="footer widget-footer bg-base-dark text-base-white clearfix">
    <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
    <div class="second-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget widget_text clearfix">
                        <div class="footer-logo">
                            <img id="footer-logo-img" class="img-fluid auto_size" height="42" width="132"
                                src="{{ asset('data/logo.png') }}" alt="image">
                        </div>
                        <div class="textwidget widget-text">
                            <p style="text-align: justify">
                                PAING HTET SAN RECRUITMENT CO., LTD. has been operation 29.9.2022. The company’s mission
                                has
                                always been to provide good services and stable employment that overseas job especially
                                Malaysia.
                            </p>
                        </div>
                        <div class="widget_social_wrapper social-icons pt-40">
                            <h3 class="fs-18 mb-25">Social Info</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" rel="noopener" aria-label="facebook"><i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="noopener" aria-label="twitter"><i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" rel="noopener" aria-label="linkedin"><i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 widget-area">
                    <div class="widget widget_cta clearfix">
                        <h4>
                            09-250005508
                        </h4>
                        <ul class="widget_contact_wrapper">
                            <li>
                                <i class="flaticon-envelope"></i>
                                <a href="mailto:info@painghtetsancompany.com">
                                    info@painghtetsancompany.com
                                </a>24 x 7
                                Online Support
                            </li>
                            <li>
                                <i class="flaticon-pin"></i>
                                No.928, Meggan Street, 140Qtr, South Dragon Tsp, Yangon, Myanmar.
                            </li>
                        </ul>
                        <div class="">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.678255717861!2d96.12192147103802!3d16.84231024849354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1951525f0a0ab%3A0x9896bdc061a99205!2sKMail%20Software%20Development%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1690199115627!5m2!1sen!2smm"
                                width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 widget-area">
                    <div class="widget multi_widget clearfix">
                        <div class="newsletter_widget clearfix">
                            <h3 class="widget-title">
                                Keep in Touch
                            </h3>
                            <p>
                                If you have any queries about recruitments, vacancies, or anything else, our team is
                                ready to response all your queries.
                            </p>
                        </div>
                        <div class="widget_nav_menu clearfix">
                            <h3 class="widget-title">Overseas Jobs</h3>
                            <ul class="menu-footer-quick-links links-1">
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
                                    <a href="{{ route('cv.index') }}">
                                        Submit CV
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget_nav_menu clearfix">
                            <h3 class="widget-title">Solutions</h3>
                            <ul class="menu-footer-quick-links links-2">
                                @foreach ($countries as $country)
                                    <li class="mega-menu-item">
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach

                                <li class="mega-menu-item">
                                    <a href="{{ route('contact.index') }}" class="mega-menu-link">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-text copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="cpy-text">
                        2023 All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
