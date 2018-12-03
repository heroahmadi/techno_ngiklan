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
        {
            $user = User::findOrFail($id);
            $endorser = $user->getObj;
            $produk = auth()->user()->product_owner->produk;
            $pakets = $endorser->paket_endorse;
            $my_profile = false;
        }
        else
        {
            $user = auth()->user();
            $kategori = Kategori::all();
            $my_profile = true;
        }


        return view('userpage.pages.profile', compact('user', 'kategori', 'my_profile', 'produk', 'pakets', 'endorser'));
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
