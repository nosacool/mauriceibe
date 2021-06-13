@inject('service', 'App\Http\Controllers\BlogController')
@extends('layouts.mainlayout')

@section('content')
  <!-- Section Page Title -->
  <section class="tf-section page-title">
    <div class="container">
        <div class="main-pagetitle">
            <div class="title">
                <h2>Blog Page.</h2>
            </div>
            <div class="group-donat">
                <div class="form-donat">
                    <form method="post" action="contact.html">
                        <div class="form-group clearfix">


                            <button type="submit" class="btn-main">Donated Now!<span class="hover-effect"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->
<!-- Section Blog -->
<section class="tf-section section-blog s1 s2 style-2 background-section">
    <div class="container">
        <div class="intro">
            <span class="icon-love-icon-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span>
            <h3 class="title wow" data-splitting>Read Our Blog Stories </h3>
        </div>
        <div class="blog-main">
            @foreach ($blogs as $blog)
            @if ($count % 4 == 1)
            <div class="blog-list-main">
            @endif
            <div class="box-item wow fadeInUp">
                <a class="click-img" href="/blog-detail/{{$service->titleFix($blog->title)}}">
                    <div class="img-box">
                        <img src="{{asset('images/project/')}}/{{$blog->pic}}" alt="">
                    </div>
                </a>
                <div class="meta">
                    <a href="/blog-detail/{{$service->titleFix($blog->title)}}" class="time"> {{ date('F d Y', strtotime($blog->created_at)) }}</a>
                </div>

                <div class="content-box">
                    <a href="/blog-detail/{{$service->titleFix($blog->title)}}">
                        <h5 class="title-box">
                            {{$blog->title}}
                        </h5>
                    </a>
                    <p class="text">{{$blog->short_desc}}</p>
                    <div class="btn-box">
                        <a href="/blog-detail/{{$service->titleFix($blog->title)}}" class="btn-main">
                            <span>Read More</span>
                            <span class="hover-effect"></span>
                            <i class="icofont-long-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
            @if($count++ % 4 == 0)
            </div>
            <div class="themesflat-spacer clearfix" data-desktop="50" data-mobile="50" data-smobile="0"></div>
            @endif
            @endforeach


            <div class="pagination-project">
                <ul class="list-pagination">

                    {{$blogs->links() }}

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Blog -->
@endsection
