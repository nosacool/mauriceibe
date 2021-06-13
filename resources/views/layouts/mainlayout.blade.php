<!DOCTYPE html>
<html lang="en">

<head>
    <x-head></x-head>
</head>

<body>


    <div id="wrapper">
        <!--=================================
        loading -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

        <!--=================================
        loading -->

        <!-- ==================== Start progress-scroll-button ==================== -->

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        </div>

        <!-- ==================== End progress-scroll-button ==================== -->

        <!-- Main Header -->
        <x-header></x-header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
       <x-mobilenav></x-mobilenav>
        <!-- /.side-menu__block -->

       @yield('content')

        <x-footer></x-footer>
    </div>
    <x-quote-modal></x-quote-modal>
    <div style="z-index: 200000" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">


            <div class="modal-body">

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <!-- 16:9 aspect ratio -->
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
      </div>


            </div>

          </div>
        </div>
      </div>
    <x-javascript></x-javascript>

</body>

</html>
