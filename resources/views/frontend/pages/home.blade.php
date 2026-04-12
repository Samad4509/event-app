@extends('frontend.layouts.app')
@section('tittle')
Home Page
@endsection
@section('body')
    

    <!-- ===============  Hero style two start =============== -->
    <div class="hero-style-two position-relative">
        <div class="swiper hero-two-slider">
            <div class="swiper-wrapper">
                <div class="hero-two-item hero-two-item-1 swiper-slide">
                    <div class="hero-background-layer">

                    </div>
                    <div class="container">
                        <div class="hero-content-layer">
                            <h5>January 21, 2021</h5>
                            <h2>EVENTS, MEETUPS &
                                CONFERENCES</h2>
                            <div class="hero-featured-countdown" id="timer_h2">
                                <div class="hero-countdown-box">
                                    <h3 id="days_h2">05</h3>
                                    <p>Days</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="hours_h2">05</h3>
                                    <p>Hour</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="minutes_h2">05</h3>
                                    <p>Miniute</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="seconds_h2">05</h3>
                                    <p>Secoend</p>
                                </div>
                            </div>


                            <div class="hero-btns">
                                <a href="event.html" class="primary-btn-fill-s2">Book Now</a>
                                <a href="event-details.html" class="primary-btn-outline-s2">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-two-item hero-two-item-1 swiper-slide">
                    <div class="hero-background-layer">

                    </div>
                    <div class="container">
                        <div class="hero-content-layer">
                            <h5>January 21, 2021</h5>
                            <h2>EVENTS, MEETUPS &
                                CONFERENCES</h2>

                            <div class="hero-featured-countdown" id="timer_h">
                                <div class="hero-countdown-box">
                                    <h3 id="days_h">05</h3>
                                    <p>Days</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="hours_h">05</h3>
                                    <p>Hour</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="minutes_h">05</h3>
                                    <p>Miniute</p>
                                </div>
                                <div class="hero-countdown-box">
                                    <h3 id="seconds_h">05</h3>
                                    <p>Secoend</p>
                                </div>
                            </div>



                            <div class="hero-btns">
                                <a href="event.html" class="primary-btn-fill-s2">Book Now</a>
                                <a href="event-details.html" class="primary-btn-outline-s2">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-pagination d-lg-flex flex-column d-none position-absolute w-auto"></div>
    </div>
    <!-- ===============  Hero style two end =============== -->

    <!-- ===============  Event area start  =============== -->
    <div class="event-style-two pt-110 position-relative">
        <div class="watermark-bg mt-110">
            <img src="assets/images/background-texts/event-bg2.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Event</h5>
                    <h3>Popular <span>Event</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-category-buttons ">
                        <ul class="nav nav-pills mb-3" id="events-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-event1" type="button" role="tab"
                                    aria-controls="pills-event1" aria-selected="true">Business</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tab2" data-bs-toggle="pill"
                                    data-bs-target="#pills-event2" type="button" role="tab"
                                    aria-controls="pills-event2" aria-selected="false">Fire Wall</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tab3" data-bs-toggle="pill"
                                    data-bs-target="#pills-event3" type="button" role="tab"
                                    aria-controls="pills-event3" aria-selected="false">Sport</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tab4" data-bs-toggle="pill"
                                    data-bs-target="#pills-event4" type="button" role="tab"
                                    aria-controls="pills-event4" aria-selected="false">Web Development</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tab5" data-bs-toggle="pill"
                                    data-bs-target="#pills-event5" type="button" role="tab"
                                    aria-controls="pills-event5" aria-selected="false">Marketing </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tab6" data-bs-toggle="pill"
                                    data-bs-target="#pills-event6" type="button" role="tab"
                                    aria-controls="pills-event6" aria-selected="false">Technology</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="all-event-cards">
                        <div class="tab-content" id="events-tabContent">
                            <div class="tab-pane fade show active" id="pills-event1" role="tabpanel"
                                aria-labelledby="pills-tab1">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md13.png" alt="">

                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md15.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">interdum lectus nec viverra
                                                            Pellentesque at neque a ligula.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md16.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md17.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">interdum lectus nec viverra
                                                            Pellentesque at neque a ligula.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-event2" role="tabpanel" aria-labelledby="pills-tab2">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md16.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md17.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-event3" role="tabpanel" aria-labelledby="pills-tab3">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md13.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md15.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">interdum lectus nec viverra
                                                            Pellentesque at neque a ligula.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-event4" role="tabpanel" aria-labelledby="pills-tab4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md16.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">interdum lectus nec viverra
                                                            Pellentesque at neque a ligula.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-event5" role="tabpanel" aria-labelledby="pills-tab5">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md13.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Media companies need to
                                                            better one then educate advertisers.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-event6" role="tabpanel" aria-labelledby="pills-tab6">

                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md17.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 150 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">Integer posuere dolor vitae
                                                            ipsum habitant morbi tristique.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="event-card-style-two">
                                            <div class="event-thumb">
                                                <img src="assets/images/event/ev-md14.png" alt="">
                                                <div class="event-date">
                                                    <a href="#"> <i class="bi bi-calendar2-week"></i> January 21,
                                                        2021 </a>
                                                </div>
                                            </div>
                                            <div class="event-content">
                                                <div class="event-seat-lavbel">
                                                    <h6><i class="bi bi-diagram-3"></i> 100 seat</h6>
                                                </div>
                                                <div class="event-card-main">
                                                    <div class="event-location"><a href="#"> <i
                                                                class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                                    <h5 class="event-title"><a href="#">interdum lectus nec viverra
                                                            Pellentesque at neque a ligula.</a></h5>
                                                    <div class="event-readme">
                                                        <a href="event-details.html">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Event area end  =============== -->


    <!-- ===============  Recent schedule start  =============== -->
    <div class="recent-schedule-style-one pt-110 position-relative">
        <div class="watermark-bg mt-110">
            <img src="assets/images/background-texts/schedule-watermark.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Schedule</h5>
                    <h3>Recent Event <span>Schedule</span></h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6">
                    <div class="schedule-tab-buttons">
                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="schedule-tab1" data-bs-toggle="pill"
                                data-bs-target="#schedule-pill1" type="button" role="tab"
                                aria-controls="schedule-pill1" aria-selected="true">30 Sep 2021</button>
                            <button class="nav-link" id="schedule-tab2" data-bs-toggle="pill"
                                data-bs-target="#schedule-pill2" type="button" role="tab"
                                aria-controls="schedule-pill2" aria-selected="false">29 Sep 2021</button>
                            <button class="nav-link" id="schedule-tab3" data-bs-toggle="pill"
                                data-bs-target="#schedule-pill3" type="button" role="tab"
                                aria-controls="schedule-pill3" aria-selected="false">28 Sep 2021</button>
                            <button class="nav-link" id="schedule-tab4" data-bs-toggle="pill"
                                data-bs-target="#schedule-pill4" type="button" role="tab"
                                aria-controls="schedule-pill4" aria-selected="false">27 Sep 2021</button>
                            <button class="nav-link" id="schedule-tab5" data-bs-toggle="pill"
                                data-bs-target="#schedule-pill5" type="button" role="tab"
                                aria-controls="schedule-pill5" aria-selected="false">26 Sep 2021</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="schedule-pill1" role="tabpanel"
                            aria-labelledby="schedule-tab1">
                            <div class="schedule-wrapper-two">
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>01</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-2.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>12.00 AM - 1.30 PM</h4>
                                                <h5>Room No - <span>02</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-1.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>Loganin Zohan</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left lunch-time">
                                            <div class="schedule-top">
                                                <h4>01.00 AM - 01.30 PM</h4>
                                                <h5>Room No - <span>05</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right has-break">
                                            <h3 class="break-type">Lunch Time</h3>
                                            <div class="lunch-icon">
                                                <img src="assets/images/icons/dine.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>02.00 AM - 03.30 PM</h4>
                                                <h5>Room No - <span>06</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-3.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>Imruz Lalin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>04</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-4.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>Tomas Jons</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="schedule-pill2" role="tabpanel" aria-labelledby="schedule-tab2">
                            <div class="schedule-wrapper-two">
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>01</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-2.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>12.00 AM - 1.30 PM</h4>
                                                <h5>Room No - <span>02</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-1.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John mark</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Suspendisse potenti. Nullam nec ullamcorper lacus Fusce
                                                    sodales suscipit neque.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left lunch-time">
                                            <div class="schedule-top">
                                                <h4>01.00 AM - 01.30 PM</h4>
                                                <h5>Room No - <span>05</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right has-break">
                                            <h3 class="break-type">Lunch Time</h3>
                                            <div class="lunch-icon">
                                                <img src="assets/images/icons/dine.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>02.00 AM - 03.30 PM</h4>
                                                <h5>Room No - <span>06</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-3.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>Markos Roho</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Integer lobortis consectetur purus, eget nibh
                                                    tempor ante finibus id. Ut ut hendrerit.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>04</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-4.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Proin feugiat maximus ante in gravida potenti.
                                                    Suspendisse Donec eu sapien dui.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="schedule-pill3" role="tabpanel"
                            aria-labelledby="schedule-tab3">
                            <div class="schedule-wrapper-two">
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>01</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-2.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>12.00 AM - 1.30 PM</h4>
                                                <h5>Room No - <span>02</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-1.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left lunch-time">
                                            <div class="schedule-top">
                                                <h4>01.00 AM - 01.30 PM</h4>
                                                <h5>Room No - <span>05</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right has-break">
                                            <h3 class="break-type">Lunch Time</h3>
                                            <div class="lunch-icon">
                                                <img src="assets/images/icons/dine.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>02.00 AM - 03.30 PM</h4>
                                                <h5>Room No - <span>06</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-3.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>04</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-4.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="schedule-pill4" role="tabpanel"
                            aria-labelledby="schedule-tab4">
                            <div class="schedule-wrapper-two">
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>01</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-2.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>12.00 AM - 1.30 PM</h4>
                                                <h5>Room No - <span>02</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-1.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left lunch-time">
                                            <div class="schedule-top">
                                                <h4>01.00 AM - 01.30 PM</h4>
                                                <h5>Room No - <span>05</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right has-break">
                                            <h3 class="break-type">Lunch Time</h3>
                                            <div class="lunch-icon">
                                                <img src="assets/images/icons/dine.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>02.00 AM - 03.30 PM</h4>
                                                <h5>Room No - <span>06</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-3.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>04</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-4.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="schedule-pill5" role="tabpanel"
                            aria-labelledby="schedule-tab5">
                            <div class="schedule-wrapper-two">
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>01</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-2.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>12.00 AM - 1.30 PM</h4>
                                                <h5>Room No - <span>02</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-1.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="single-schedule-card  row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left lunch-time">
                                            <div class="schedule-top">
                                                <h4>01.00 AM - 01.30 PM</h4>
                                                <h5>Room No - <span>05</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right has-break">
                                            <h3 class="break-type">Lunch Time</h3>
                                            <div class="lunch-icon">
                                                <img src="assets/images/icons/dine.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>02.00 AM - 03.30 PM</h4>
                                                <h5>Room No - <span>06</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-3.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-schedule-card-style-two row">
                                    <div class="col-xl-4 col-lg-5 p-0">
                                        <div class="single-schedule-left">
                                            <div class="schedule-top">
                                                <h4>10.00 AM - 11.30 PM</h4>
                                                <h5>Room No - <span>04</span></h5>
                                            </div>
                                            <div class="schedule-bottom">
                                                <div class="speaker-image">
                                                    <img src="assets/images/speaker/sp-4.png" alt="">
                                                </div>
                                                <div class="speaker-info">
                                                    <h4>John Loganin</h4>
                                                    <p>Marketing</p>

                                                    <ul class="speaker-social-links">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 p-0">
                                        <div class="single-schedule-right">
                                            <h3 class="schedule-title">
                                                <a href="#">Nulla nisl tellus hendrerit nec dignissim pellentesqu
                                                    posu in est Suspendisse bibendum.</a>
                                            </h3>
                                            <p class="schedule-discription">Cras semper, massa vel aliquam luctus, eros
                                                odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra. </p>

                                            <div class="schedule-topics">
                                                <h5>Topic</h5>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Color</li>
                                                            <li><i class="bi bi-check"></i> Typhography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Allingment</li>
                                                            <li><i class="bi bi-check"></i> Development</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <ul>
                                                            <li><i class="bi bi-check"></i> Graphic Design</li>
                                                            <li><i class="bi bi-check"></i> Web Design</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="schedule-buttons">
                                                <a href="event-details.html">Available Seat: 390-500</a>
                                                <a href="event-details.html">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Recent schedule end  =============== -->

    <!-- ===============  achievement area start =============== -->
    <div class="achievement-style-two mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="achievement-box-two">
                        <h2><span class="number">100</span>+</h2>
                        <h5>Best Speaker</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="achievement-box-two">
                        <h2><span class="number">500</span>+</h2>
                        <h5>Ideal Event</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="achievement-box-two">
                        <h2><span class="number">100</span>+</h2>
                        <h5>New Schedule</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="achievement-box-two">
                        <h2><span class="number">900</span>+</h2>
                        <h5>Participants</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  achievement area end =============== -->


    <!-- ===============  Speaker area start =============== -->
    <div class="speaker-area pt-110 position-relative">

        <div class="watermark-bg mt-110">
            <img src="assets/images/background-texts/speakar-watermark.png" alt="" class="img-fluid">
        </div>

        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Speaker</h5>
                    <h3>Talented <span>Speaker</span></h3>
                </div>
            </div>

            <div class="swiper speaker-slider-two">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="speaker-card-two">
                            <div class="speaker-image">
                                <img src="assets/images/speaker/speaker-s1.png" alt="">
                            </div>
                            <div class="speaker-info">
                                <h4 class="speaker-name"><a href="speaker-details.html">Elizabeth Sofia</a></h4>
                                <h6 class="speaker-designation">
                                    Business Manager
                                </h6>
                            </div>

                            <ul class="speaker-social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="speaker-card-two">
                            <div class="speaker-image">
                                <img src="assets/images/speaker/speaker-s2.png" alt="">
                            </div>
                            <div class="speaker-info">
                                <h4 class="speaker-name"><a href="speaker-details.html">Santiago
                                        Axel</a></h4>
                                <h6 class="speaker-designation">
                                    Marketing
                                </h6>
                            </div>

                            <ul class="speaker-social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="speaker-card-two">
                            <div class="speaker-image">
                                <img src="assets/images/speaker/speaker-s3.png" alt="">
                            </div>
                            <div class="speaker-info">
                                <h4 class="speaker-name"><a href="speaker-details.html">Easton Cooper</a></h4>
                                <h6 class="speaker-designation">
                                    Senio Visual Designer
                                </h6>
                            </div>

                            <ul class="speaker-social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="speaker-two-pagination d-lg-flex d-none"></div>
            </div>
        </div>
    </div>
    <!-- ===============  Speaker area end =============== -->

    <!-- ===============  Sponsor area start =============== -->
    <div class="sponsor-style-two pt-110 position-relative">
        <div class="watermark-bg mt-110">
            <img src="assets/images/background-texts/sponsor-watermark.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Sponsor</h5>
                    <h3>Official <span>Sponsor</span></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="single-sponsor-slider-wrap ">
                        <div class="sponsor-slider-topbar">
                            <div class="sponsor-arrows d-xl-flex justify-content-between align-items-center d-none">
                                <div class="sponsor-one-prev swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>

                                <div class="sponsor-type">Gold</div>

                                <div class="sponsor-one-next swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper sponsor-slider-one ">
                            <div class="swiper-wrapper align-items-center">
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-1.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-4.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-3.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-5.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-6.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-8.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-9.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-10.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sponsor-slider-wrap">
                        <div class="sponsor-slider-topbar">
                            <div class="sponsor-arrows d-xl-flex justify-content-between align-items-center d-none">
                                <div class="sponsor-two-prev swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>

                                <div class="sponsor-type">Silver</div>

                                <div class="sponsor-two-next swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper sponsor-slider-two">
                            <div class="swiper-wrapper align-items-center">
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-1.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-4.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-3.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-5.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-6.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-8.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-9.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-10.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sponsor-slider-wrap">
                        <div class="sponsor-slider-topbar">
                            <div class="sponsor-arrows d-xl-flex justify-content-between align-items-center d-none">
                                <div class="sponsor-three-prev swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Previous slide"> <i class="bi bi-chevron-left"></i></div>

                                <div class="sponsor-type">Diamond</div>

                                <div class="sponsor-three-next swiper-arrow-prev" tabindex="0" role="button"
                                    aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                            </div>
                        </div>
                        <div class="swiper sponsor-slider-three">
                            <div class="swiper-wrapper align-items-center">
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-1.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-4.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-3.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-5.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-6.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-8.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-9.svg" alt="">
                                    </div>
                                </div>
                                <div class="spondor-item-grid swiper-slide">
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-10.svg" alt="">
                                    </div>
                                    <div class="sponsor-item">
                                        <img src="assets/images/sponsor/sponsor-7.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Sponsor area end =============== -->

    <!-- ===============  testimonial area start =============== -->
    <div class="testimonial-style-two mt-120 position-relative">
        <div class="watermark-bg">
            <img src="assets/images/background-texts/testimonial-watermark.png" alt="" class="img-fluid">
        </div>
        <div class="testimonoal-shape-layer"></div>
        <div class="moving-shape">
            <img src="assets/images/shapes/testi-round.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Testimonial</h5>
                    <h3>What People <span>Say</span></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider-two swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card-style-two">
                                    <div class="reviewer-image">
                                        <img src="assets/images/speaker/testi-reviewer2.png" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="reviewer-name">Madison
                                            Layla</h4>
                                        <h6 class="reviewer-designation">Marketing</h6>

                                        <div class="review-text">
                                            <p>Cras semper, massa vel aliquam luctus, eros odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra Donec vestibulum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-style-two">
                                    <div class="reviewer-image">
                                        <img src="assets/images/speaker/testi-reviewer3.png" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="reviewer-name">Roman Connor</h4>
                                        <h6 class="reviewer-designation">Marketing</h6>

                                        <div class="review-text">
                                            <p>Cras semper, massa vel aliquam luctus, eros odio tempor turpis, ac placerat
                                                metus tortor eget magna. Donec mattis posuere pharetra Donec vestibulum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="testimonial-style-two-bottom position-relative d-xl-block d-none">
                        <div class="testi-arrows d-xl-flex justify-content-between align-items-center d-none">
                            <div class="testi-prev swiper-arrow-prev" tabindex="0" role="button"
                                aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>
                            <div class="testi-pagination d-block w-auto"></div>
                            <div class="testi-next swiper-arrow-prev" tabindex="0" role="button"
                                aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  testimonial area end =============== -->

    <!-- ===============  pricing area two start =============== -->
    <div class="pricing-style-two pt-110 position-relative">
        <div class="watermark-bg mt-110">
            <img src="assets/images/background-texts/ticket-watermark.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Ticket Plan</h5>
                    <h3>Get sponsor <span>Ticket</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card-style-two">
                        <div class="pricing-card-top">
                            <div class="pricing-card-lavel">
                                <span>10%</span> Off
                            </div>
                            <h5 class="plan-status">Silver</h5>
                            <h3 class="plan-price"> <span>$</span> 100</h3>
                            <div class="plan-icon"><img src="assets/images/icons/sliver-fa2.png" alt=""></div>
                        </div>
                        <div class="pricing-features">
                            <div class="ticket-availability">
                                <h5>Available Tickets</h5>
                                <h4>270 / <span>500</span></h4>
                            </div>

                            <div class="feature-list">
                                <ul>
                                    <li class="tick"><i class="bi bi-check2"></i> Conference Ticket</li>
                                    <li><i class="bi bi-x"></i> Free Certificate</li>
                                    <li><i class="bi bi-x"></i> Free Lunch & Coffe</li>
                                </ul>
                            </div>

                            <div class="purchase-btn">
                                <a href="#">Buy Ticket</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card-style-two active">
                        <div class="pricing-card-top">
                            <div class="pricing-card-lavel">
                                <span>10%</span> Off
                            </div>
                            <h5 class="plan-status">Gold</h5>
                            <h3 class="plan-price"> <span>$</span> 120</h3>
                            <div class="plan-icon"><img src="assets/images/icons/gold-fa2.png" alt=""></div>
                        </div>
                        <div class="pricing-features">
                            <div class="ticket-availability">
                                <h5>Available Tickets</h5>
                                <h4>270 / <span>500</span></h4>
                            </div>

                            <div class="feature-list">
                                <ul>
                                    <li class="tick"><i class="bi bi-check2"></i> Conference Ticket</li>
                                    <li><i class="bi bi-x"></i> Free Certificate</li>
                                    <li><i class="bi bi-x"></i> Free Lunch & Coffe</li>
                                </ul>
                            </div>

                            <div class="purchase-btn">
                                <a href="#">Buy Ticket</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card-style-two">
                        <div class="pricing-card-top">
                            <div class="pricing-card-lavel">
                                <span>10%</span> Off
                            </div>
                            <h5 class="plan-status">Diamond</h5>
                            <h3 class="plan-price"> <span>$</span> 150</h3>
                            <div class="plan-icon"><img src="assets/images/icons/diamond-fa.png" alt=""></div>
                        </div>
                        <div class="pricing-features">
                            <div class="ticket-availability">
                                <h5>Available Tickets</h5>
                                <h4>270 / <span>500</span></h4>
                            </div>

                            <div class="feature-list">
                                <ul>
                                    <li class="tick"><i class="bi bi-check2"></i> Conference Ticket</li>
                                    <li><i class="bi bi-x"></i> Free Certificate</li>
                                    <li><i class="bi bi-x"></i> Free Lunch & Coffe</li>
                                </ul>
                            </div>

                            <div class="purchase-btn">
                                <a href="#">Buy Ticket</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  pricing area two end =============== -->

    <!-- ===============  Blog area start =============== -->
    <div class="blog-style-two pt-110 position-relative overflow-hidden">

        <div class="container">
            <div class="row">
                <div class="section-head-style-two">
                    <h5>Blog</h5>
                    <h3>Latest <span>Blog</span></h3>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="blog-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="blog-card-md">
                                    <div class="blog-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/b-md3.png"
                                                alt=""></a>

                                        <div class="blog-tags">
                                            <a href="blog.html">Business</a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="blog-details.html">Vestibulum nec porta erat. In
                                                in lobo turpis Suspendisse rtis.</a></h4>
                                        <div class="blog-bottom">
                                            <div class="blog-date">
                                                <p> <i class="bi bi-calendar2-week"></i> <span>02 Septembar, 2021</span>
                                                </p>
                                            </div>
                                            <div class="readme-btn"><a href="blog-details.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-card-md">
                                    <div class="blog-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/b-md2.png"
                                                alt=""></a>

                                        <div class="blog-tags">
                                            <a href="blog.html">Business</a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="blog-details.html">Fusce posuere justo vitae
                                                varius elit laoreet Mauris sollicitudin at.</a></h4>
                                        <div class="blog-bottom">
                                            <div class="blog-date">
                                                <p> <i class="bi bi-calendar2-week"></i> <span>02 Septembar, 2021</span>
                                                </p>
                                            </div>
                                            <div class="readme-btn"><a href="blog-details.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="blog-card-md">
                                    <div class="blog-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/b-md1.png"
                                                alt=""></a>

                                        <div class="blog-tags">
                                            <a href="blog.html">Business</a>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="blog-details.html">Nam a lacus et lorem
                                                pellentesque cursus. Etiam sed gravida..</a></h4>
                                        <div class="blog-bottom">
                                            <div class="blog-date">
                                                <p> <i class="bi bi-calendar2-week"></i> <span>02 Septembar, 2021</span>
                                                </p>
                                            </div>
                                            <div class="readme-btn"><a href="blog-details.html">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-arrows d-xl-block d-none">
                        <div class="blog-prev swiper-arrow-prev" tabindex="0" role="button"
                            aria-label="Previous slide"><i class="bi bi-chevron-left"></i></div>
                        <div class="blog-next swiper-arrow-prev" tabindex="0" role="button"
                            aria-label="Next slide"><i class="bi bi-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Blog area end =============== -->

    <!-- ===============  Newslatter area start =============== -->
    <div class="newslatter-style-two mt-96">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center">
                    <div class="newslatter-style-two-bg">
                        <div class="newslatter text-center">
                            <h3>Subscribe Our Newsletter</h3>
                            <h5>Don’t Miss Our Feature Update</h5>

                            <form class="newslatter-form" action="#" id="newslatter-form">
                                <div class="newslatter-input-group d-flex">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Newslatter area end =============== -->

    <!-- Custom Cursor -->

    <div class="cursor"></div>
    <div class="cursor2"></div>

    <!-- Custom Cursor End -->
@endsection
