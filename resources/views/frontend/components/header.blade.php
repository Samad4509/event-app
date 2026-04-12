<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- End Preloader Area -->

<div class="schedule-sidebar">
    <div class="schedule-sidebar-wrapper">
        <div class="sb-toggle-icon">
            <i class="bi bi-x-lg"></i>
        </div>

        <div class="sb-next-event">
            <h3>Next Event</h3>
            <div class="sb-next-event-wrap" id="timer">
                <div class="sb-single-count">
                    <h3 id="days">308</h3>
                    <p>Days</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="hours">10</h3>
                    <p>Hour</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="minutes">37</h3>
                    <p>Miniute</p>
                </div>
                <div class="sb-single-count">
                    <h3 id="seconds">14</h3>
                    <p>Secoend</p>
                </div>
            </div>
        </div>


        <div class="sb-speakers-wrap">
            <h3>Our Honorable Speaker</h3>
            <div class="sb-speakers-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s1.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Santiago Axel</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s2.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Easton Cooper</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sb-speaker-card">
                            <div class="sb-speaker-thumb">
                                <img src="assets/images/speaker/sb-s3.png" alt="">
                            </div>
                            <div class="sb-speaker-content">
                                <h4>Sloio Axel</h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="speaker-sb-pagination d-lg-flex d-none"></div>
            </div>
        </div>

        <div class="sb-about">
            <div class="footer-logo"><img src="assets/images/logo.png" alt=""></div>
            <p>Cras semper, massa vel aliquam luctus, eros odio tempor turpis, ac placerat metus tortor eget magna.
                Donec mattis posuere pharetra Donec vestibulum.</p>
            <ul class="footer-social-icon d-flex">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- ===============  topbar area start  =============== -->
<div class="topbar-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 d-lg-block d-none">
                <ul class="topbar-contact-wrap">
                    <li> <a href="#"> <i class="bi bi-geo-alt"></i> 1356 Broadway, New York</a></li>
                    <li> <a href="tel:6719251352587"><i class="bi bi-telephone-plus"></i> (671) 925-1352587</a></li>
                    <li> <a
                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#3950575f56795c41585449555c175a5654">
                            <i class="bi bi-envelope-open"></i> <span class="__cf_email__"
                                data-cfemail="d8b1b6beb798bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</span></a></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <ul class="topbar-social-links justify-content-lg-end justify-content-center">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ===============  topbar area end  =============== -->

<!-- ===============  header style two start =============== -->
<header>
    <div class="header-area header-style-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-xl-flex align-items-center">
                    <div class="logo d-flex align-items-center justify-content-between">
                        <a href="{{route('home')}}"><img src="assets/images/logo.png" alt="logo"></a>

                        <div class="mobile-menu d-flex ">

                            <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                <span class="h-top"></span>
                                <span class="h-middle"></span>
                                <span class="h-bottom"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">

                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                            <a href="#"><img src="assets/images/logo-v2.png" alt=""></a>
                        </div>
                        <ul>
                            
                            <li class="has-child-menu">
                                <a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                    About 
                                </a>
                            </li>

                            <li class="has-child-menu">
                                <a href="{{route('event')}}" class="{{ request()->routeIs('event') ? 'active' : '' }}">Events</a>
                                
                                <ul class="sub-menu">
                                    <li><a href="event.html">Events</a></li>
                                    <li><a href="event-sidebar.html">Event Sidebar</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            {{-- <li class="has-child-menu">
                                <a href="javascript:void(0)">Spekars <span>03</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="speaker.html">Speaker Grid</a></li>
                                    <li><a href="speaker-topbar.html">Speaker Topbar</a></li>
                                    <li><a href="speaker-details.html">Speaker Details</a></li>
                                </ul>
                            </li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Pages <span>05</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="schedule.html">Schedule</a></li>
                                    <li><a href="gallary.html">Gallary</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li> --}}
                            <li class="has-child-menu">
                                {{-- <a href="javascript:void(0)">news <span>04</span></a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> --}}
                                <li>
                                    <a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'active' : '' }}">
                                        News 
                                    </a>
                                </li>
                            </li>
                            <li> 
                                <a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        CONTACT
                                 </a>
                            </li>
                        </ul>

                        <div class="inner-contact-wrap d-lg-none">
                            <div class="innter-contact-box"> <a href="#"> <i class="bi bi-geo-alt"></i> 1356
                                    Broadway, New York</a></div>
                            <div class="innter-contact-box"> <a href="tel:6719251352587"><i
                                        class="bi bi-telephone-plus"></i> (671) 925-1352587</a></div>
                            <div class="innter-contact-box"> <a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#0a63646c654a6f726b677a666f24696567">
                                    <i class="bi bi-envelope-open"></i> <span class="__cf_email__"
                                        data-cfemail="bbd2d5ddd4fbdec3dad6cbd7de95d8d4d6">[email&#160;protected]</span></a>
                            </div>
                        </div>

                        <div class="inner-btn d-xl-none">
                            <a href="event-details.html" class="primary-btn-fill">Get Ticket</a>
                        </div>

                    </nav>
                </div>

                <div class="col-xl-3 col-2 d-none d-xl-block">
                    <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul class="d-flex align-items-center nav-right-list">
                            <li class="nav-btn">
                                <a class="primary-btn-fill" href="event-details.html">Get Ticket</a>
                            </li>

                            <li class="sidebar-style-two">
                                <a href="#"><i class="bi bi-columns-gap"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ===============  header style two end =============== -->
