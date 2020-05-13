<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Distributor Garam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('vendor/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('vendor/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">
    <link rel="stylesheet" href="{{  asset('vendor/carousel.css') }}">

  </head>
  <body>

  <div class="site-wrap">
    @include('beranda.component.header')
        @yield('content')
    @include('beranda.component.footer')
  </div>

  <script src="{{ asset('vendor/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('vendor/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendor/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('vendor/js/aos.js')}}"></script>

  <script src="{{ asset('vendor/js/main.js') }}"></script>

  </body>
</html>
