<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endorser;
use App\Review;
use App\TransaksiEndorse;
use DB;

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

    public function myTransactions()
    {
        $user = auth()->user()->getObj;
        $transactions = $user->transaksi;

        $data = [
            'transactions' => $transactions
        ];

        return view('userpage.pages.mytransaction', $data);
    }

    public function review(Request $request)
    {
        $trans = TransaksiEndorse::findOrFail($request->input('transaction_id'));
        $user = auth()->user();
        if($user->type == 'endorser')
        {
            $direview = $trans->product_owner;
            $mereview = $trans->endorser;
        }
        else
        {
            $direview = $trans->endorser;
            $mereview = $trans->product_owner;
        }

        $data = [
            'mereview_id' => $mereview->id,
            'direview_id' => $direview->id,
            'ulasan' => $request->input('review'),
            'rating' => $request->input('rating')
        ];

        DB::beginTransaction();

        try {
            Review::create($data);
    
            $trans->status = 'Selesai';
            $trans->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            $status = -1;
            $title = 'Gagal memberikan review';
            $message = 'Terjadi kesalahan, silahkan coba lagi';

            return back()->with('status', $status)
                        ->with('title', $title)
                        ->with('message', $message);
        }

        $status = 1;
        $title = 'Berhasil memberikan review';
        $message = 'Terimakasih telah menggunakan Hi!Ngiklan';

        return back()->with('status', $status)
                        ->with('title', $title)
                        ->with('message', $message);
    }
}
