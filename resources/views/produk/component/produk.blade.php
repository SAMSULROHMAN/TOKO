<div class="site-section">
    <div class="container">

        <div class="row mb-5">
        <div class="col-md-9 order-2">

            <div class="row">
            <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Produk Kami</h2></div>
                <div class="d-flex">

                </div>
            </div>
            </div>
            <div class="row mb-5">

            @foreach ($products as $product)
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                    <figure class="block-4-image">
                        <a href="{{ url('/produk') }}"><img src="{{ URL::to('/') }}/images/{{ $product->foto_produk }}" alt="Image placeholder" class="img-thumbnail" style="width: 318px; height: 180px;"></a>
                    </figure>
                    <div class="block-4-text p-4">
                        <h3><a href="{{ route('produk.detail',$product->id_produk) }}">{{ $product->nama_produk }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
            <div class="row" data-aos="fade-up">
            <div class="col-md-12 text-center">
                <div class="site-block-27">
                <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&gt;</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>

        <div class="col-md-3 order-1 mb-5 mb-md-0">
        </div>
        </div>
    </div>
</div>
