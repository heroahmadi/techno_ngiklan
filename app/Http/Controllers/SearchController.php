<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Endorser;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->product;

        // $produk = Produk::where('nama_produk', 'like', "%{$search}%")->paginate(25);
        $endorsers = Endorser::where('nama_endorser', 'like', "%{$search}%")->paginate(25);

        $data = [
            // 'produk' => $produk
            'endorsers' => $endorsers
        ];

        return view('userpage.pages.search_endorser', $data);
    }
}
