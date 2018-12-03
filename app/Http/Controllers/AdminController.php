<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiEndorse;

class AdminController extends Controller
{
    public function index()
    {
        $transactions = TransaksiEndorse::all();

        $data = [
            'transactions' => $transactions
        ];

        return view('adminpage.pages.index', $data);
    }

    public function approveTransaction(Request $request)
    {
        $transaction = TransaksiEndorse::findOrFail($request->input('transaction_id'));
        $transaction->status = 'Disetujui';
        $transaction->save();

        $status = 1;
        $title = 'Berhasil!';
        $message = 'Transaksi berhasil disetujui';

        return back()
                ->with('status', $status)
                ->with('title', $title)
                ->with('message', $message);
    }
}
