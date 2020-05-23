@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Selamat Datang <b>{{ Auth::user()->name }}</b>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <a href="{{ route('product.index') }}">Manajemen Produk</a>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <a href="{{ route('product.create') }}" class="btn btn-md btn-success float-right">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Foto</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($products as $product)
                            <tr>
                                <td scope="row">{{ $product->id_produk }}</td>
                                <td>{{ $product->nama_produk }}</td>
                                <td>
                                    <img src="{{ URL::to('/') }}/images/{{ $product->foto_produk }}" class="img-thumbnail" width="75" height="auto"/>
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id_produk) }}" class="btn btn-md btn-warning">Edit</a>
                                    <a href="{{ route('product.show', $product->id_produk) }}" class="btn btn-md btn-secondary">Show</a>
                                    {{-- <a href="{{ route('product.destroy', $product->id_product) }}"  class="btn btn-md btn-danger">Delete</a> --}}
                                    <form action="{{ route('product.destroy', $product->id_produk) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-md btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
