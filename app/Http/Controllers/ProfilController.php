<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Endorser;
use App\User;
use App\ProductOwner;
use App\KategoriEndorser;
use App\Kategori;
use App\Produk;

class ProfilController extends Controller
{
    public function index($id = null)
    {
        if($id)
            $user = User::findOrFail($id);
        else
            $user = auth()->user();

        $kategori = Kategori::all();

        return view('userpage.pages.profile', compact('user', 'kategori'));
    }

    // tambah produk baru
    public function store(Request $request)
    {
    	$produk = new Produk();

    	$produk->nama_produk = $request->input('nama_produk');
    	$produk->product_owner_id = auth()->user()->id;
    	$produk->kategori_id = $request->input('kategori_id');
    	$produk->gambar = $request->input('gambar');
    	$produk->deskripsi = $request->input('deskripsi');
    	$produk->status = $request->input('status');

    	$produk->save();

    	return back();
    }

    // public function show($id){
    // 	$produk = Produk::findOrFail($id);
    // 	$
    // }
}
