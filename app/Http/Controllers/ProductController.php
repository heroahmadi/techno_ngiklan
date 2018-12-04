<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProductController extends Controller
{
    public function index($id)
    {
        $produk = Produk::findOrFail($id);
        $pakets = auth()->user()->getObj->paket_endorse;

        return view('userpage.pages.produk', compact('produk', 'pakets'));
    }
}
