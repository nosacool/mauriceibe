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
            @if($count % 4 == 1)
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
            @if ($count++ % 4 == 0)
        </div>
        <div class="themesflat-spacer clearfix" data-desktop="30" data-mobile="0" data-smobile="0"></div>
            @endif
            @endforeach


        </div>
    </div>
</section>
<!-- end Gallery -->
@endsection
