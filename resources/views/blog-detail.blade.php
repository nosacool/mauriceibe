@extends('layouts.mainlayout')

@section('content')
   <!-- Section Page Title -->
   <section class="tf-section page-title">
    <div class="container">
        <div class="main-pagetitle">
            <div class="title">
                <h2>Blog Details.</h2>
            </div>
            <div class="group-donat">
                <div class="form-donat">

                        <div class="form-group clearfix">

                            <button data-toggle="modal" data-target="#staticBackdrop" class="btn-main">Donate Now!<span class="hover-effect"></span></button>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->

<!-- Blog Detail -->
<section class="tf-section section-blog-details">
    <div class="container">

        <div class="main-blog-details">
            <div class="blog-content">
                <div class="themesflat-portfolio wow fadeInUp">
                    <div class="blog-item">
                        <div class="inner">
                            <div class="boxitem">
                                <div class="imgbox">
                                    <img src="{{asset('images/project/')}}/{{$blog->pic}}" alt="Chirota">

                                </div>

                                <div class="content-box">

                                    <h4 class="title-box">
                                        {{$blog->title}}
                                    </h4>
                                    <p class="text">
                                        {{$blog->content}}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.themesflat-portfolio -->
                @if($blog->photos()->exists())
                <section class="section-partner style-2">
                    <h4 class="title wow"> Photos </h4>
                    <div class="container">

                        <h4 class="title wow"> <-Scroll to view more.-></h4>

                        <div class="partners">
                            <div class="banners-z">
                                <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="3" data-column2="2" data-column3="2" data-column4="1" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                                    <div class="owl-carousel">
                                        @foreach ($blog->photos as $photo )
                                        <div class="box-item  wow fadeInUp">
                                            <div class="img-box">
                                                <img src="{{asset('images/project/')}}/{{$photo->image}}" alt="chirota">
                                            </div>

                                            <div class="btn-box">
                                                <a href="{{asset('images/project/')}}/{{$photo->image}}" class="btn-main-2 btn btn-success lightbox-image overlay-box" data-fancybox="gallery">
                                                    <span>Enlarge Image</span>
                                                </a>

                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif
                @if ($blog->videos()->exists())
                <section class="section-partner style-2">
                    <h5 class="title wow"> Videos</h5>
                    <div class="container">
                        <h4 class="title wow"> <-Scroll to view more.-></h4>

                        <div class="partners">
                            <div class="banners-z">
                                <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="2" data-column2="1" data-column3="1" data-column4="1" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                                    <div class="owl-carousel">
                                        @foreach ($blog->videos as $video)
                                        <div class="box-video" style="
                                        background: url('{{asset('images/project/',true)}}/{{$video->video_thumbnail}}');
                                    ">
                                            <div class="box">
                                                <div class="flat-video-fancybox">
                                                    <a class="fancybox video-btn " data-toggle="modal" data-src="{{asset('videos/')}}/{{$video->video}}"  data-target="#myModal"  >
                                                        <div class="crirle">
                                                            <span class="semicircle"></span>
                                                            <img src="{{asset('svg/play-button.svg')}}" alt="">
                                                            <span class="ripple"></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endif






            </div>

            <div class="slidebar">
                <div class="box-author wow fadeInUp">
                    <div class="img-author">
                        <h4 class="title wow"> Author </h4>

                    </div>
                    <h5 class="name padding-top-15">{{$blog->author}}</h5>
                    <h6 class="name padding-top-15">Created: {{ date('F d Y H:i:s', strtotime($blog->created_at)) }}</h6>
                    <h6 class="name padding-top-15">Edited : {{ date('F d Y H:i:s', strtotime($blog->updated_at)) }}</h6>
                    <hr>
                    <ul class="list-social">
                        <li class="none"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="none"><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li class="none"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>


                <div class="themesflat-map-1 wow fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.64790872177!2d7.480532713990248!3d9.095802993474548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a61f2a78d43%3A0xa8beb86ed0dc9b8!2s3680%20Erie%20Cres%2C%20Maitama%20900271%2C%20Abuja!5e0!3m2!1sen!2sng!4v1623493662592!5m2!1sen!2sng"></iframe>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End -->
@endsection
