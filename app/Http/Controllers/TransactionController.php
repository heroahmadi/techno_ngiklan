<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorser;

class TransactionController extends Controller
{
    public function showEndorser($endorser_id)
    {
        $endorser = Endorser::findOrFail($endorser_id);
        $products = auth()->user()->product_owner->produk;

        $data = [
            'endorser' => $endorser,
            'products' => $products
        ];

        return view('userpage.pages.show_endorser', $data);
    }
}
