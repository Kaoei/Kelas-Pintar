<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;

class ChatController extends Controller
{
    public function index() {
        $data['result'] = Chat::all();
        return view('chat.chat', $data);
    }

    public function create() {
        $data['user'] = User::pluck('nama');
        return view('chat.create', $data);
    }

    public function action(Request $request) {
        $data = [
            'user' => $request->user,
            'forum' => $request->forum,
            'message' => $request->message,
        ];
        $newChat = Chat::create($data);
        return redirect()->route('chat');
    }

    public function detail(Chat $detail) {
        $data['result'] = Chat::find($detail);
        return view('chat.detail', $data);
    }
}
