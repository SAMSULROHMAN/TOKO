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

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
            <a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section border-bottom" data-aos="fade">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="block-16">
            <figure>
              <img src="{{  asset('img/cv.jpg') }}" alt="Image placeholder" class="img-fluid rounded">
            </figure>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">


          <div class="site-section-heading pt-3 mb-4">
            <h2 class="text-black">CV MUJIARTO SEJAHTERA</h2>
          </div>
          <p>
            Adalah Perusahaan dalam bidang Pemasaran GARAM berbagai jenis.
            Peruntukannya seperti Garam Konsumsi / Industri / Peternakan / Pengawetan dan lain lain.
            Produk Kami sudah berlisensi SNI, MUI, Dan BPOM
          </p>
        </div>
      </div>
    </div>
  </div>

{{-- Gambar Ganti Sendiri --}}
  <div class="site-section border-bottom" data-aos="fade">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
            <div class="site-section-heading pt-3 mb-4">
                <h2 class="text-black">CV MUJIARTO SEJAHTERA</h2>
            </div>
            <p>
                Kami sebagai Distributor Marketing yang terpercaya dibawah naungan PT.BUDIONO MADURA BANGUN PERSADA. <br>
                Pamekasan, Madura
            </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <div class="block-16">
                <figure>
                  <img src="{{  asset('img/cv.jpg') }}" alt="Image placeholder" class="img-fluid rounded">
                </figure>
              </div>
        </div>
      </div>
    </div>
  </div>

  <br>
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
