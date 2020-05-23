@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('product.index') }}" class="btn btn-md btn-secondary">Kembali</a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="col-md-5">
                        <img src="{{ URL::to('/') }}/images/{{ $product->foto_produk }}" class="img-fluid img-thumbnail" alt="" style="width: 100px">
                    </div>
                   <div class="col-md-7">
                        <h1>{{ $product->nama_produk }}</h1>
                        <p>
                            {{ $product->isi_produk }}
                        </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
