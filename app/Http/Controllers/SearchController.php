<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Endorser;
use App\Kategori;
use App\KategoriEndorser;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->q;
        $user = auth()->user();
        $kategori = Kategori::all();

        if($user->type === 'product owner')
        {
            $results = Endorser::where('nama_endorser', 'like', "%{$search}%");
        }
        else
        {
            $results = Produk::where('nama_produk', 'like', "%{$search}%");
        }

        if($request->category != 'all')
        {
            $endorser_categorized = KategoriEndorser::where('kategori_id', $request->category)->pluck('endorser_id');
            $results = $results->whereIn('id', $endorser_categorized);
        }
        
        $results = $results->paginate(16);
        
        $data = [
            'results' => $results,
            'kategori' => $kategori
        ];

        return view('userpage.pages.search', $data);
    }
}
