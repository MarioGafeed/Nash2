<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<title>شفاء النفس soulhealing</title>
<!-- Reset CSS -->
<link href=" {{ asset('frontend/css/reset.css') }} " rel="stylesheet" type="text/css">
<!-- Bootstrap -->
<link href=" {{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css">
<link href=" {{ asset('frontend/assets/bootstrap/css/bootstrap-grid.min.css') }} " rel="stylesheet" type="text/css">
<!-- Select2 -->
<link href=" {{ asset('frontend/assets/select2/css/select2.min.css') }} " rel="stylesheet" type="text/css">
<!-- Font Awesome -->
<link href=" {{ asset('frontend/assets/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css">
<!-- Magnific Popup -->
<link href=" {{ asset('frontend/assets/magnific-popup/css/magnific-popup.css') }} " rel="stylesheet" type="text/css">
<!-- Iconmoon -->
<link href=" {{ asset('frontend/assets/iconmoon/css/iconmoon.css') }} " rel="stylesheet" type="text/css">
<!-- Owl Carousel -->
<link href=" {{ asset('frontend/assets/owl-carousel/css/owl.carousel.min.css') }} " rel="stylesheet" type="text/css">
<!-- Animate -->
<link href=" {{ asset('frontend/css/animate.css') }} " rel="stylesheet" type="text/css">
<!-- Custom Style -->
<link href=" {{ asset('frontend/css/custom.css') }} " rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Start Preloader -->
<div id="loading">
  <div class="element">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
</div>
<!-- End Preloader -->

    <!-- ***** Header Area Start ***** -->
      @include('frontend.includes.header')
      <!-- ***** Header Area End ***** -->

      @yield('content')


      <!-- ***** Footer Area Start ***** -->
      @include('frontend.includes.footer')
      <!-- ***** Footer Area End ***** -->


      <!-- Scroll to top -->
      <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script type="text/javascript" src=" {{ asset('frontend/js/jquery.min.js') }} "></script>
      <!-- Bootsrap JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }} "></script>
      <!-- Select2 JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/select2/js/select2.min.js') }} "></script>
      <!-- Match Height JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/matchHeight/js/matchHeight-min.js') }} "></script>
      <!-- Bxslider JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/bxslider/js/bxslider.min.js') }} "></script>
      <!-- Waypoints JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/waypoints/js/waypoints.min.js') }} "></script>
      <!-- Counter Up JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/counterup/js/counterup.min.js') }} "></script>
      <!-- Magnific Popup JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/magnific-popup/js/magnific-popup.min.js') }} "></script>
      <!-- Owl Carousal JS -->
      <script type="text/javascript" src=" {{ asset('frontend/assets/owl-carousel/js/owl.carousel.min.js') }} "></script>
      <!-- Modernizr JS -->
      <script type="text/javascript" src=" {{ asset('frontend/js/modernizr.custom.js') }} "></script>
      <!-- Custom JS -->
      <script type="text/javascript" src=" {{ asset('frontend/js/custom.js') }} "></script>
      </body>
      </html>
