<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->unsignedinteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->integer('stok_produk');
            $table->string('nama_produk');
            $table->text('isi_produk');
            $table->string('foto_produk');
            $table->integer('harga_produk');
            $table->integer('berat_produk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
