<script src="{{asset('javascript/jquery.min.js')}}"></script>
    <script src="{{asset('javascript/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('javascript/bootstrap.js')}}"></script>
    <script src="{{asset('javascript/owl.carousel.min.js')}}"></script>
    <script src="{{asset('javascript/gmap3.min.js')}}"></script>
    <script src="{{asset('javascript/shortcodes.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="{{asset('javascript/jquery.fancybox.js')}}"></script>
    <script src="{{asset('javascript/countto.js')}}"></script>
    <script src="{{asset('javascript/wow.min.js')}}"></script>
    <script src="{{asset('javascript/jquery-validate.js')}}"></script>
    <script src="{{asset('javascript/jquery.countdown.min.js')}}"></script>

    <script src="{{asset('javascript/plugins.js')}}"></script>

    <script src="{{asset('javascript/main.js')}}"></script>
    <script src="{{asset('javascript/custom.js')}}"></script>


    <script src="https://use.fontawesome.com/a5749b4813.js"></script>
    <script>
        $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);



// when the modal is opened autoplay it
$('#myModal').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
})



// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',"");
})

var currentUrl = window.location.href;
var currentPage= /[^/]*$/.exec(currentUrl)[0];
$('#'+currentPage).addClass('current');




// document ready
});

    </script>
