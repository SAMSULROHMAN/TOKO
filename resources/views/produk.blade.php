@extends('layouts.master')

@section('content')
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0">
            <a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Produk</strong>
        </div>
      </div>
    </div>
</div>

@include('produk.component.produk')
@endsection
