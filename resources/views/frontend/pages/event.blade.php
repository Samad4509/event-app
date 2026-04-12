@extends('frontend.layouts.app')

@section('tittle')
Events Page
@endsection

@section('body')

  <!-- ===============  Event Area start  =============== -->
    <div class="event-sidebar-wrapper py-5 ">
        <div class="container pt-96 position-relative">
            <div class="row">
                <div class="col-lg-4">
                    <div class="background-title text-style-one">
                       {{-- <h2>Popular Event</h2> --}}
                    </div>
                    <div class="event-sidebar">
                        <form action="#" id="sb-searchbar-form" class="sb-searchbar-form">
                            <div class="sb-searchbar-input">
                                <input type="text" placeholder="Search here">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>


                        <div class="sb-category">
                            <div class="category-title"><i class="bi bi-list-task"></i> <h4>Category</h4></div>

                            <ul class="category-list">
                                <li><a href="#">Business <div class="category-lavel"><span>20</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Marketing <div class="category-lavel"><span>10</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Web Development <div class="category-lavel"><span>50</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Accounting <div class="category-lavel"><span>07</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Software <div class="category-lavel"><span>18</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Graphic Design <div class="category-lavel"><span>12</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                                <li><a href="#">Web Design <div class="category-lavel"><span>00</span> <i class="bi bi-box-arrow-right"></i></div></a></li>
                            </ul>
                        </div>
                        <div class="sb-tags">
                            <div class="category-title"><i class="bi bi-tags"></i> <h4>Tags</h4></div>

                            <ul class="tag-list">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Web</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Speaker</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Graphic</a></li>
                                <li><a href="#">Software</a></li>
                                <li><a href="#">Business</a></li>
                            </ul>
                        </div>

                        <div class="sb-banner">
                            <a href="event-details.html">
                                <img src="assets/images/banners/sb-banner.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md1.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="{{route('event.detail')}}">Media companies need to better one then educate advertisers.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md2.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">companies share strategies to Then capture audiences on mobile.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md3.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">Proactive transformation requires embrace of technology.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md4.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">Proactive transformation requires embrace of technology.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md5.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">Proactive transformation requires embrace of technology.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md6.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">Proactive transformation requires embrace of technology.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md7.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">Media companies need to better one then educate advertisers.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="event-card-md">
                                <div class="event-thumb">
                                    <img src="assets/images/event/ev-md8.png" alt="">
                                    <div class="event-lavel">
                                        <i class="bi bi-diagram-3"></i> <span>500 Seat</span>
                                    </div>
                                </div>

                                <div class="event-content">
                                    <div class="event-info">
                                        <div class="event-date"><a href="#"> <i class="bi bi-calendar2-week"></i> January 21, 2021</a></div>
                                        <div class="event-location"><a href="#"> <i class="bi bi-geo-alt"></i> Broadw, New York</a></div>
                                    </div>
                                    <h5 class="event-title"><a href="event-details.html">companies share strategies to Then capture audiences on mobile.</a></h5>

                                    <div class="event-bottom">
                                        <div class="event-readme">
                                            <a href="event-details.html">Book Now</a>
                                        </div>

                                        <div class="event-share-icons">
                                            <ul class="share-options">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="share-btn"><i class="bi bi-share"></i></div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="custom-pagination text-center">
                            <ul class="page-list">
                                <li class="has-arrow"><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li><a href="#" class="active-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="has-arrow"><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Event Area end  =============== -->
@endsection