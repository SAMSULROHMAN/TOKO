<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ViewController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function about()
    {
        return view('about');
    }

    public function produk()
    {
        $products = Produk::paginate(15);
        return view('produk', compact('products'));
    }

    public function detail($id)
    {
        $product = Produk::findOrFail($id);
        // dd($products);
        return view('spek.spek', compact('product'));
    }

    // public function spek()
    // {
    //     return view('spek.spek');
    // }
}
