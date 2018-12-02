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
        $user = auth()->user();
        if($user->type === 'product owner')
        {
            $results = Endorser::where('nama_endorser', 'like', "%{$search}%")->paginate(16);
        }
        else
        {
            $results = Produk::where('nama_produk', 'like', "%{$search}%")->paginate(16);
        }
        
        $data = [
            'results' => $results
        ];

        return view('userpage.pages.search', $data);
    }
}
