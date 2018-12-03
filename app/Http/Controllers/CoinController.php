<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coin;
use App\TransaksiKoin;

class CoinController extends Controller
{
    public function index()
    {
        $coin = Coin::all();

        $data = [
            'coins' => $coin
        ];

        return view('userpage.pages.coin', $data);
    }

    public function buy($id)
    {
        $coin = Coin::findOrFail($id);
        
        $data = [
            'coin' => $coin
        ];

        return view('userpage.pages.coin_payment', $data);
    }

    public function pay(Request $request)
    {
        $coin = Coin::findOrFail($request->input('id'));

        $data = [
            'endorser_id' => auth()->user()->id,
            'nilai_koin_transaksi' => $coin->jumlah,
            'status' => 'Belum diverifikasi'
        ];

        TransaksiKoin::create($data);

        return view('userpage.pages.coin_terimakasih');
    }
}
