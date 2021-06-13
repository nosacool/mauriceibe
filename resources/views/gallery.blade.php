@inject('service', 'App\Http\Controllers\BlogController')
@extends('layouts.mainlayout')

@section('content')
<!-- Section Gallery -->
<section class="tf-section page-title">
    <div class="container">
        <div class="main-pagetitle">
            <div class="title">
                <h2>Gallery.</h2>
            </div>
            <div class="group-donat">
                <div class="form-donat">
                    <form method="post" action="contact.html">
                        <div class="form-group clearfix">

                            <button type="submit" class="btn-main">Donate Now!<span class="hover-effect"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tf-section section-gallery s2 background-section">
    <div class="container">
        <div class="intro">
            <span class="icon-love-icon-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span>
            <h3 class="title wow" data-splitting>View Our Stories .</h3>
        </div>
        <div class="main-gallery">
            @foreach ($photos as $photo)
            @if($count % 2 == 1)
            <div class="list-gallery-box">
            @endif
            <div class="box-item  wow fadeInUp">
                <div class="img-box">
                    <img src="{{asset('images/project')}}/{{$photo->image}}" alt="chirota">
                </div>
                <div class="content-box transition">
                    <div class="icon-box"><span class="icon-icon-01 transition"></span></div>
                    <h5 class="title-box">
                        @if(isset($photo->blog_id))
                        <a href="/blog-detail/{{$service->titleFix($photo->blog->title)}}">
                            {{$photo->caption}}
                        </a>
                        @else
                        <a>
                            {{$photo->caption}}
                        </a>
                        @endif
                        </h5>
                </div>
                <div class="btn-box">
                    <a href="{{asset('images/project')}}/{{$photo->image}}" class="btn-main-2 lightbox-image overlay-box" data-fancybox="gallery">
                        <span>+</span>
                    </a>

                </div>
            </div>
            @if (($count++ % 2 == 0))
        </div>
        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
            @endif
            @endforeach


        </div>
    </div>
    <section class="section-partner style-2">
        <div class="intro">
            <span class="icon-love-icon-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span>
            <h3 class="title wow" data-splitting>View Our Clips .</h3>
            <h4 class="title wow"> <-Scroll to view more.-></h4>
        </div>
        <div class="container">



            <div class="partners">
                <div class="banners-z">
                    <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="3" data-column2="2" data-column3="2" data-column4="1" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                        <div class="owl-carousel">
                            @foreach ($videos as $video)
                            <div class="box-video" style="
                            background: url('{{asset('images/project/')}}/{{$video->video_thumbnail}}');
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
     <!--
    <section class="section-partner style-2">
        <h4>Photos</h4>
        <div class="container">

            <-Scroll to view more->

            <div class="partners">
                <div class="banners-z">
                    <div class="flat-carousel-box data-effect clearfix" data-zero="0" data-gap="70" data-column="3" data-column2="2" data-column3="2" data-column4="1" data-dots="false" data-auto="true" data-nav="false" data-loop="true">
                        <div class="owl-carousel">
                            @foreach ($photos as $photo )
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
    </section> -->
    <div class="pagination-project">
        <ul class="list-pagination">

            {{$photos->links() }}

        </ul>
    </div>
 </section>


<!-- end Gallery -->
@endsection
