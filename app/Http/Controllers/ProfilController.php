<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        $data = [
            'user' => $user
        ];

        return view('userpage.pages.profile');
    }
}
