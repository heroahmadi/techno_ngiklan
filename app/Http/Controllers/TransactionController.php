<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorser;
use App\TransaksiEndorse;

class TransactionController extends Controller
{
    public function showEndorser($endorser_id)
    {
        $endorser = Endorser::findOrFail($endorser_id);
        $products = auth()->user()->product_owner->produk;
        $pakets = $endorser->paket_endorse;

        $data = [
            'endorser' => $endorser,
            'products' => $products,
            'pakets' => $pakets
        ];

        return view('userpage.pages.show_endorser', $data);
    }

    public function addTransaction(Request $request)
    {
        $endorser = Endorser::findOrFail($request->input('endorser_id'));
        $owner = auth()->user()->product_owner->id;

        $data = [
            'endorser_id' => $endorser->id,
            'product_owner_id' => $owner,
            'nilai_transaksi' => $request->input('paket'),
            'status' => 'Menunggu Verifikasi Admin'
        ];

        TransaksiEndorse::create($data);

        return view('userpage.pages.transaction_done');
    }
}
