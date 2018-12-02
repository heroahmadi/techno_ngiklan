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
}
