<div class="bg-light py-3">
    <div class="container">
        <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $product->nama_produk }}</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ url('img/1.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2 class="text-black">{{ $product->nama_produk }}</h2>
          <p class="mb-4">
            {{ $product->nama_produk }}
          </p>
          <p>
            <a href="#" class="buy-now btn btn-sm btn-primary">
                Minat
            </a>
        </p>

        <center>
            <a href="https://api.whatsapp.com/send?phone=6287834540980&amp;text=Halo%20gan,%20Saya%20mau%20order%20barang%20 {{ $product->nama_produk }}.Masih%20Ada%20?" class="btn btn-sm btn-success">
               <i class="fa fa-whatsapp" aria-hidden="true"></i> W.A Saya
            </a>
        </center>

        </div>
      </div>
    </div>
  </div>

