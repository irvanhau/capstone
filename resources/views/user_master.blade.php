<!DOCTYPE html>
<html lang="en">

@include('user_master_head')

<body>
	<!-- Preloader Start -->
	<div class="preloader"></div>
	<!-- Preloader End -->
	
    @include('body.header')

	@include('index')
	
    @include('body.footer')

	<!-- BACK TO TOP SECTION -->
	<div class="back-to-top bg-gradient-color">
		<i class="fab fa-angle-up"></i>
	</div>
	
    @include('user_master_js')
	</body>

	</html>