@extends('frontend.layouts.app')

@section('tittle')
Contact Us
@endsection

@section('body')
<div class="contact-wrapper overflow-hidden">
        <div class="container pt-120 position-relative">
            <div class="background-title text-style-one">
                <h2>Contact Now</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-card mt-0">
                        <div class="contact-box-corner1">
                            <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                        </div>
                        <div class="contact-box-corner2">
                            <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                        </div>
                        <div class="contact-icon">
                            <img src="assets/images/icons/c-location.png" alt="">
                        </div>
                        <div class="contact-info">
                            <h3 class="contact-title">Location</h3>
                            <a href="#">Digital Agency Network 20 Eastbourne Terrace,
                                London</a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-box-corner1">
                            <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                        </div>
                        <div class="contact-box-corner2">
                            <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                        </div>
                        <div class="contact-icon">
                            <img src="assets/images/icons/c-phone.png" alt="">
                        </div>
                        <div class="contact-info">
                            <h3 class="contact-title">Phone</h3>
                            <a href="tel:+0123456789102">+012 3456 789102</a>
                            <a href="tel:+0123456789102">+012 3456 789102</a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-box-corner1">
                            <img src="assets/images/shapes/cornoer-shape1.png" alt="">
                        </div>
                        <div class="contact-box-corner2">
                            <img src="assets/images/shapes/cornoer-shape2.png" alt="">
                        </div>
                        <div class="contact-icon">
                            <img src="assets/images/icons/c-massege.png" alt="">
                        </div>
                        <div class="contact-info">
                            <h3 class="contact-title">Email</h3>
                            <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#e68f888089a6839e878b968a83c885898b"><span class="__cf_email__" data-cfemail="0e676068614e6b766f637e626b206d6163">[email&#160;protected]</span> </a>
                            <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#741d1a121b34110c15190418115a171b19"><span class="__cf_email__" data-cfemail="582b2d2828372a2c183d20393528343d763b3735">[email&#160;protected]</span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" id="contact-form" >
                        <div class="contact-form-wrapper">
                            <h4 class="contact-form-title">Write a Message</h4>

                            <div class="primary-input-group">
                                <input type="text" id="name" placeholder="Your Name"> 
                            </div>
                            <div class="primary-input-group">
                                <input type="email" id="email" placeholder="Your Email"> 
                            </div>
                            <div class="primary-input-group">
                                <input type="tel" id="phone" placeholder="Your Phone"> 
                            </div>
                            <div class="primary-input-group">
                                <input type="text" id="subject" placeholder="Subject"> 
                            </div>
                            <div class="primary-input-group">
                                <textarea name="massege" id="message" cols="30" rows="7" placeholder="Write Message"></textarea>
                            </div>
                            <div class="submit-btn">
                                <button type="submit" class="primary-submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-lg-12">
                <div class="contact-map-wrap mt-120">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                ></iframe><a
                                href="https://123movies-to.org/"></a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection