<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use File;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produk::paginate(10);
        return view('admin.produk.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('foto_produk'));
        // $request->validate([
        //     'nama_produk'    =>  'required',
        //     'foto_produk'         =>  'required|image|max:2048'
        // ]);

        $image = $request->file('foto_produk');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = [
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $new_name,
            'stok_produk' => $request->stok_produk,
            'isi_produk' => $request->isi_produk,
        ];

        Produk::create($form_data);

        return redirect('product')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Produk::findOrFail($id);
        return view('admin.produk.show', compact('product'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('foto_produk');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        $form_data = [
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $image_name,
            'stok_produk' => $request->stok_produk,
            'isi_produk' => $request->isi_produk,
        ];

        Produk::where('id_produk',$id)->update($form_data);

        return redirect('product')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $gambar = Produk::findOrFail($id)->first();
        File::delete('public/images/'.$gambar->foto_produk);

        $data = Produk::findOrFail($id);
        // $image_path = public_path().'/'.$data->foto_produk;
        // unlink($image_path);
        $data->delete();

        return redirect('product')->with('success', 'Data is successfully deleted');
    }
}
