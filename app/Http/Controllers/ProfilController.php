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

    public function index()
    {
    	$datauser = User::where('id', '=', Auth::id())->get();
    	// $datauser = DB::table('users')->select(DB::raw('name'))
    	$dataendorser = Endorser::all();
    	// $dataproductowner = ProductOwner::all();
    	$datakategori = KategoriEndorser::all();
    	// $dataproductowner = ProductOwner::first();

        return view ('userpage.pages.profile', compact('datauser','dataendorser', 'dataproductowner', 'datakategori'));
        // return view('userpage.pages.index');
    }

    // public function product_owner(){
    // 	$profil = ProductOwner::get();

    // 	return view ('userpage.pages.profile', ['profil' => $profil]);
    // }

    // tambah produk baru
    public function store(Request $request){
    	$produk = new Produk();

    	$produk->nama_produk = $request->input('nama_produk');
    	$produk->kategori_produk = $request->input('kategori_id');
    	$produk->gambar_produk = $request->input('gambar');
    	$produk->deskripsi = $request->input('deskripsi');
    	$produk->status_produk = $request->input('status');

    	$produk->save();

    	return back();
    }

    // public function show($id){
    // 	$produk = Produk::findOrFail($id);
    // 	$
    // }
}
