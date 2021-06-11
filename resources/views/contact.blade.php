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
                            <form method="post" action="contact.html">
                                <div class="form-group clearfix">
                                    <input type="text" name="text" value="" placeholder="$20" required="">
                                    <div class="custom-select">
                                        <select class="cars">
                                                  <option value="0">/mo</option>
                                                  <option value="1">/3mo</option>
                                                  <option value="2">/year</option>
                                                  <option value="3">/3year</option>
                                                </select>
                                    </div>
                                    <button type="submit" class="btn-main">Donated Now!<span class="hover-effect"></span></button>
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
                            <iframe src="https://maps.google.com/maps?q=37.803467%2C%20-122.472369&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                        </div>
                        <div class="info-contact wow fadeInRight">
                            <div class="address">
                                <h5 class="title">Address :</h5>
                                <span>121 King Street, Melbourne <br>Victoria 3000, Australia.</span>
                            </div>
                            <hr class="line">
                            <div class="telephone padding-top-70">
                                <h5 class="title">Telephone :</h5>
                                <span>(+99 000 111 222 55 00)</span>
                            </div>
                            <hr class="line">
                            <div class="email padding-top-70">
                                <h5 class="title">E-mail :</h5>
                                <span>clinexmex0011@gmail.com</span>
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
                    <div class="form-main-contact">
                        <div class="form-contact wow fadeInUp">
                            <h4 class="title">Write A Contacts</h4>
                            <p>Etiam tristique venenatis metus, eget maximus elit mattis et. Suspendisse felis odio,</p>
                            <p>Please Enter Your Comments <span>*</span></p>

                            <div class="themesflat-contact-form style-2 s1 clearfix padding-top-50">
                                <form id="contactform" action="./contact/contact-process.php" method="post" accept-charset="utf-8" class="form-submit contact-form wpcf7-form">
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" tabindex="1" id="name" name="name" value="" class="wpcf7-form-control" placeholder="Nick name :" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-email">
                                        <input type="email" tabindex="3" id="email" name="email" value="" class="wpcf7-form-control" placeholder="Email Address :" required>
                                    </span>
                                    <span class="wpcf7-form-control-wrap your-message">
                                       <textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Write a message :" required ></textarea>
                                    </span>
                                    <div class="btn-contact">
                                        <button name="submit" type="submit" class="btn-main active submit btn-contact hv-linear border-corner" id="submit">
                                                <span>Discover More!</span>
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
