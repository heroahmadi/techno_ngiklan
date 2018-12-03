<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Endorser;
use App\User;
use App\ProductOwner;
use App\KategoriEndorser;
use App\Produk;

class ProfilController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$user = User::findOrFail($id);

        return view('userpage.pages.profile', compact('user'));
    }

    // public function product_owner(){
    // 	$profil = ProductOwner::get();

    // 	return view ('userpage.pages.profile', ['profil' => $profil]);
    // }

    // tambah produk baru
    public function store(Request $request){
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
