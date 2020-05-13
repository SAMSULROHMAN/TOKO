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

  </head>
  <body>

  <div class="site-wrap">
    @include('beranda.component.header')

  </div>

  <div class="container">
    <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
  </div>

  @include('beranda.component.footer')

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
