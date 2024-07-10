<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Storage;

class ProdukController extends Controller
{

    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:10048',
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kategori_id = $request->kategori_id;

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/produks', $image->hashName());
        $produk->image = $image->hashName();
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',

        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->kategori_id = $request->kategori_id;

        // upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/produks', $image->hashName());
            Storage::delete('public/produks/' . $produk->image);
            $produk->image = $image->hashName();
        }

        $produk->save();
        return redirect()->route('produk.index');

    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete('public/produks/' . $produk->image);
        $produk->delete();
        return redirect()->route('produk.index');

    }
}
