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

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->type === 'endorser' || $user->type === 'product owner')
                return redirect('/');
            else if($user->type === 'admin')
                return redirect('/admin');
        }
        else
        {
            dd('fail');
            $data['status'] = 0;
            $data['message'] = 'Wrong Username / Password';
            return back()->with($data);
        }
    }
}
