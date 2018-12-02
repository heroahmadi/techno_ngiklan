<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    /*
        Fungsi Login
        Tipe user:
            1 -> Endorser
            2 -> Product Owner
            3 -> Admin
    */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if($user = Auth::attempt($credentials)){
            if($user->type === 1 || $user->type === 2)
                return view('userpage.pages.index');
            else if($user->type === 3)
                return view('adminpage.pages.index');
        }
        else
        {
            $data['status'] = 0;
            $data['message'] = 'Wrong Username / Password';
            return back()->with($data);
        }
    }
}
