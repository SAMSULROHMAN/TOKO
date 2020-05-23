@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{ route('product.index') }}" class="btn btn-md btn-secondary">Kembali</a>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Kategori</div>

                <div class="card-body">
                   <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="nama">Nama Produk</label>
                          <input type="text" name="nama_produk" id="nama" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Isikan Nama Produk</small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Produk</label>
                            <input type="text" name="stok_produk" id="stok" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="isi">Deskripsi</label>
                            <textarea class="form-control" name="isi_produk" id="isi" rows="10"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control-file" name="foto_produk" id="" placeholder="" aria-describedby="fileHelpId">
                          </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
