@extends('layouts.mainlayout')

@section('content')
 <!-- Banner Section -->
 <x-sliders></x-sliders>
 <!--End Banner Section -->

 <x-services count="{{$count}}"></x-services>

 <!-- Section About -->

 <div class="tf-section section-about style-2">
     <div class="container">
         <div class="main-about">
             <div class="content-left-about">
                 <div class="progress-about">
                     <div class="couter">
                         <div class="chart" id="chart" data-percent="60">
                             <span class="percent"></span>
                         </div>
                     </div>
                     <h5>Donation</h5>
                 </div>
                 <div class="group-img">

                     <div class="img-big  wow fadeInUp">
                         <img src="images/about/about.jpeg" alt="">
                         <div class="tf-icon">
                             <span class="icon-generous"></span>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="content-right-about">
                 <div class="info-about">
                     <h6 class="sub-title">SAVING LIVES AND BUILDING HUMAN CAPACITY</h6>
                     <h3 class="title wow" data-splitting>This is Maurice Ibe Foundation, <br> help us <span class="featured-text">build </span> a new and better tomorrow.</h3>
                     <p class="text" style="text-align: justify">We’re reinventing philanthropy to catalyze leaders and organizations driving social justice and building movements across the globe.
                        <span style="font-size: 16px">Maurice Ibe Foundation</span> Partners with you to lift the human spirit out of despair and poverty.</p>
                        <p style="text-align: justify">We are disrupting the root causes of Poverty, Injustice and Social Inequities to bring a New World Order.
                        We must dismantle Inequality to advance social justice, We must advance social justice to promote equity and fairness.
                        <span style="font-size: 16px">Maurice Ibe Foundation</span> is threading were no one has gone, the depth and rural communities of Africa.
                        Inequality is at the root of every injustice.</p>
                        <p> For a lasting change, everyone must stand up and be counted. </p>
                     <div class="team">
                         <div class="list-img-team">
                             <img src="images/about/team-sm-01.png" alt="chirota">
                             <img src="images/about/team-sm-02.png" alt="chirota">
                             <img src="images/about/team-sm-03.png" alt="chirota">
                             <img src="images/about/team-sm-04.png" alt="chirota">
                             <div class="number-team">
                                 <span>+10</span>
                             </div>
                         </div>
                         <div class="info">
                             <h5>Dr. Maurice Ibe</h5>
                             <p>Founder</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- End About -->



 <!-- Section Facts -->
 <x-facts></x-facts>
 <!-- End Facts -->


 @endsection
