<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Mobile Specific Meta -->
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<!-- Favicon-->
  		<link rel="shortcut icon" href="img/fav.png">
  		<!-- Author Meta -->
  		<meta name="author" content="colorlib">
  		<!-- Meta Description -->
  		<meta name="description" content="">
  		<!-- Meta Keyword -->
  		<meta name="keywords" content="">
  		<!-- meta character set -->
  		<meta charset="UTF-8">

      <title> Ngiklan! - Platform Iklan</title>

      @section('styles')
      <!-- Core css -->
      <link href="{{ asset("assets/Education-Doc/vendor/bootstrap.min.css")}}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  			<!--
  			CSS
  			============================================= -->
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/linearicons.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/font-awesome.min.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/bootstrap.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/magnific-popup.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/nice-select.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/animate.min.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/owl.carousel.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/jquery-ui.css") }}">
  			<link rel="stylesheet" href="{{asset("assets/Education-Doc/css/main.css") }}">
      @show
    </head>

    <body>
      @include('userpage.includes.header')

      <div class="container">
        @yield('content')
        <!-- ini adalah halaman endorser -->
      </div>

      @include('userpage.includes.footer')

      @section('scripts')
      <script src="{{ asset("assets/Education-Doc/vendor/jquery-2.2.4.min.js") }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset("assets/Education-Doc/vendor/bootstrap.min.js") }}"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  		<script src="{{ asset("assets/Education-Doc/js/easing.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/hoverIntent.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/superfish.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/jquery.ajaxchimp.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/jquery.magnific-popup.min.js") }}"></script>
    	<script src="{{ asset("assets/Education-Doc/js/jquery.tabs.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/jquery.nice-select.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/owl.carousel.min.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/mail-script.js") }}"></script>
			<script src="{{ asset("assets/Education-Doc/js/main.js") }}"></script>
      @show
    </body>

</html>
