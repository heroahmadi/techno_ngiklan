<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    public function index()
    {
        return view('userpage.pages.chat');
    }

    public function fetchMessages()
    {
        return auth()->user()->messages;
    }

    public function sendMessage(Request $request)
    {
        $user = auth()->user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }
}
