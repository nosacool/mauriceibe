<!-- Section Services -->

<section id="causes" class="tf-section section-services style-2">
    <div class="container">
        <div class="intro">
            <span class="icon-love-icon-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></span>
            <h3 class="title wow" data-splitting>Donate To <br>Support Our Mission.</h3>
        </div>
        <div class="main-services">
            <div class="list-services-box">
                @foreach ($causes as $cause)
                <div class="box-item wow fadeInUp" data-wow-delay="400ms">
                   <div class="icon-box">
                       <div class="number-box">
                           <h5>{{$count++}}</h5>
                       </div>
                       <span class="icon-icon-01"></span>
                   </div>
                   <h5 class="title">

                       {{$cause->name}}</h5>
                   <p class="text">{{$cause->info}}</p>
                   <div class="btn-box">
                       <a href="#" class="btn-main active">
                           <span>Donate Now</span>
                           <span class="hover-effect dark" style="left: 26.5px; top: 54.625px;"></span>
                           <i class="icofont-long-arrow-right"></i>
                       </a>
                   </div>
               </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

 <!-- end Services -->
