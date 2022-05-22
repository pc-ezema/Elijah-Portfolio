<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title of The Page -->
    <title>{{config('app.name')}} | Personal Portfolio </title>
    <!-- Meta Informations -->
    <meta charset="utf-8">
    <meta name="description" content="Bootstrap 5 Responsive Elijah | Personal Portfolio ">
    <meta name="keywords" content="Elijah | Personal Portfolio, template, bootstrap 5, ui template kit, Elijah Personal Portfolio, html, css">
    <meta name="author" content="Elijah | Personal Portfolio">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <link type="image/x-icon" rel="shortcut icon" href="{{URL::asset('assets/images/logo/favicon.png')}}" />
    <!-- Font CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/fonts/font.css')}}" />
    <!-- Font-Awesome All CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/all.css')}}" />
    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" />
    <!-- Owlcarousel CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}" />
    <!-- Fancybox CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/jquery.fancybox.min.css')}}" />
    <!-- Animate CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}" />
    <!-- colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/colors.css')}}" />
    <!-- Styles CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/styles.css')}}" />
    <!-- Live Style Switcher - demo only -->
    <link id="style-switch" href="{{URL::asset('assets/css/colors/orange.css')}}" media="screen" rel="stylesheet" type="text/css">
    <!-- Responsive CSS -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}" />
</head>

<body>
    <!-- Body Part Start -->
    <div class="gaspar" data-magic-cursor="show" data-color="crimson">

    <!-- Pre-Loader Start-->
    <div id="preloader">
      <div class="loader_line"></div>
    </div>
    <!-- Pre-Loader end -->

    <!-- Header -->
    @includeIf('layouts.header')
    <!-- End Header -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- End Page-Content -->

    <!-- Mouse-Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse-Cursor End-->
  </div>
  <!-- Body Part End -->

  <!-- Optional JavaScript -->
  <!-- Jquery Js -->
  <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
  <!-- Bootstrap Js -->
  <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Jquery FancyBox Js -->
  <script src="{{URL::asset('assets/js/jquery.fancybox.min.js')}}"></script>
  <!-- Mixitup Js -->
  <script src="{{URL::asset('assets/js/mixitup.min.js')}}"></script>
  <!-- Owlcarousel Js -->
  <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
  <!-- Jquery Countdown Js -->
  <script src="{{URL::asset('assets/js/jquery.countdown.min.js')}}"></script>
  <!-- Wow Js -->
  <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
  <!-- colors JS -->
  <script src="{{URL::asset('assets/js/color.js')}}"></script>
  <!-- Style.switch JS -->
  <script src="{{URL::asset('assets/js/style.switch.js')}}"></script>
  <!-- Custom Js -->
  <script src="{{URL::asset('assets/js/custom.js')}}"></script>

</body>

</html>