<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('produk');
    }

    public function detail()
    {
        return view('detail');
    }

    public function spek()
    {
        return view('spek.spek');
    }
}
