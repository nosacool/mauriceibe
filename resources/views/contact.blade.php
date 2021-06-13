@extends('layouts.mainlayout')

@section('content')

        <!-- Section Page Title -->
        <section class="tf-section page-title s1">
            <div class="container">
                <div class="main-pagetitle">
                    <div class="title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="group-donat">
                        <div class="form-donat">
                            <form method="post" action="#">
                                <div class="form-group clearfix">
                                   <button type="submit" class="btn-main">Donate Now!<span class="hover-effect"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->
        <section class="section-contact">
            <div class="container">
                <div class="contact-main">
                    <div class="map-contact">

                        <div class="themesflat-map-1 wow fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.64790872177!2d7.480532713990248!3d9.095802993474548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a61f2a78d43%3A0xa8beb86ed0dc9b8!2s3680%20Erie%20Cres%2C%20Maitama%20900271%2C%20Abuja!5e0!3m2!1sen!2sng!4v1623493662592!5m2!1sen!2sng""></iframe>
                        </div>
                        <div class="info-contact wow fadeInRight">
                            <div class="address">
                                <h5 class="title">Address :</h5>
                                <span>3680 Erie crescent maitama.</span>
                            </div>
                            <hr class="line">
                            <div class="telephone padding-top-70">
                                <h5 class="title">Telephone :</h5>
                                <span>(+234 8111 111 749)</span>
                            </div>
                            <hr class="line">
                            <div class="email padding-top-70">
                                <h5 class="title">E-mail :</h5>
                                <span>mauriceIbeFoundation@gmail.com</span>
                            </div>
                            <hr class="line">
                            <div class="social padding-top-70">
                                <h5 class="title">Social</h5>
                                <ul class="list-social">
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="Form" class="form-main-contact">

                        <div class="form-contact wow fadeInUp">

                            <h4 class="title">Send a Message</h4>
                            @include('partials.flash_message')


                            <div class="themesflat-contact-form style-2 s1 clearfix padding-top-50">
                                <form  action="#" method="post" accept-charset="utf-8" class="form-submit contact-form wpcf7-form">
                                    @csrf
                                    <span class="wpcf7-form-control-wrap your-name col-lg-4">
                                        <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Full name :" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-email col-lg-4">
                                        <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Email Address :" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-email col-lg-4">
                                        <input type="text" tabindex="5" id="subject" name="subject" value="" class="wpcf7-form-control" placeholder="Subject :" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-message">
                                       <textarea name="message" tabindex="7" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Write a message :" required ></textarea>
                                    </span>
                                    <div class="btn-contact">
                                        <button name="submit" type="submit" class="btn-main active submit btn-contact hv-linear border-corner" >
                                                <span>Send!</span>
                                                <span class="hover-effect dark"></span>
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>

@endsection
