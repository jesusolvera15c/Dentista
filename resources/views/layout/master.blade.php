<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }} | @yield('titulo')</title>

 
  <link rel="stylesheet" href="  {{ asset('dist/css/adminlte.min.css') }} ">

  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


  <link rel="stylesheet" href="  {{ asset('dist/css/open-iconic-bootstrap.min.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/animate.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/owl.carousel.min.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/owl.theme.default.min.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/magnific-popup.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/aos.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/ionicons.min.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/bootstrap-datepicker.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/jquery.timepicker.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/adminlte.min.css') }} ">

  <link rel="stylesheet" href="  {{ asset('dist/css/flaticon.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/icomoon.css') }} ">
  <link rel="stylesheet" href="  {{ asset('dist/css/style.css') }} ">

  @yield('styles')
</head>

<body>
 
	 
	
    

    @include('layout.header')

   
    <!-- /.content-header -->
    @yield('contenido-principal')

    
    @include('layout.footer')


    


  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->

  <script src=" {{ asset('dist/js/jquery.min.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery-migrate-3.0.1.min.js') }} "></script>
  <script src=" {{ asset('dist/js/popper.min.js') }} "></script>
  <script src=" {{ asset('dist/js/bootstrap.min.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.easing.1.3.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.waypoints.min.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.stellar.min.js') }} "></script>
  <script src=" {{ asset('dist/js/owl.carousel.min.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
  <script src=" {{ asset('dist/js/aos.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.animateNumber.min.js') }} "></script>
  <script src=" {{ asset('dist/js/bootstrap-datepicker.js') }} "></script>
  <script src=" {{ asset('dist/js/jquery.timepicker.min.js') }} "></script>
  <script src=" {{ asset('dist/js/scrollax.min.js') }} "></script>
  <script src=" {{ asset('dist/js/google-map.js') }} "></script>
  <script src=" {{ asset('dist/js/main.js') }} "></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

  @yield('scripts')





  <!-- PAGE PLUGINS -->
 

  
</body>
</html>