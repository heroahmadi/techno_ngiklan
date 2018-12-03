<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Endorser;
use App\Kategori;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->q;
        $user = auth()->user();
        $kategori = Kategori::all();

        if($user->type === 'product owner')
        {
            $results = Endorser::where('nama_endorser', 'like', "%{$search}%")->paginate(16);
        }
        else
        {
            $results = Produk::where('nama_produk', 'like', "%{$search}%")->paginate(16);
        }
        
        $data = [
            'results' => $results,
            'kategori' => $kategori
        ];

        return view('userpage.pages.search', $data);
    }
}
