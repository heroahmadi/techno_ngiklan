<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiEndorse;
use App\TransaksiKoin;
use DB;

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

    public function coins()
    {
        $trans = TransaksiKoin::all();

        $data = [
            'transactions' => $trans
        ];

        return view('adminpage.pages.coins', $data);
    }

    public function approveCoins(Request $request)
    {
        $trans = TransaksiKoin::findOrFail($request->input('transaction_id'));
        $endorser = $trans->endorser;

        DB::beginTransaction();

        try {
            $endorser->jumlah_koin += $trans->coin->jumlah;
            $endorser->save();

            $trans->status = 'Berhasil';
            $trans->save();

            $status = 1;
            $title = 'Berhasil!';
            $message = 'Transaksi berhasil disetujui';

            DB::commit();

            return back()
                    ->with('status', $status)
                    ->with('title', $title)
                    ->with('message', $message);
        } catch (\Exception $e) {
            DB::rollback();

            $status = -1;
            $title = 'Gagal';
            $message = 'Transaksi gagal';

            return back()
                    ->with('status', $status)
                    ->with('title', $title)
                    ->with('message', $message);
        }
    }
}
