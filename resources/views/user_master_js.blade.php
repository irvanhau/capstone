<script src="{{asset('assets/js/jquery.v1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
{{-- <script src="https://axin.netlify.app/js/scrollIt.min.js"></script> --}}
<script src="{{asset('assets/js/scroll.js')}}"></script>
<script src="{{asset('assets/js/jquery-core-plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
$.scrollIt({
        upKey: 38,                // key code to navigate to the next section
        downKey: 40,              // the easing function for animation
        scrollTime: 800,          // how long (in ms) the animation takes
        activeClass: 'active',    // class given to the active nav element
        onPageChange: null,       // function(pageIndex) that is called when page is changed
        topOffset: -90            // offste (in px) for fixed top navigation
    });
</script>
<script type="module" src="{{asset('assets/js/model-3d.js')}}"></script>