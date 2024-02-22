<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\User;
use App\Models\Message;

class ChatController extends Controller
{
    public function index() {
        $data['page'] = 'Beranda';
        $data['result'] = Chat::all();
        return view('templates.header', $data)
            . view('chat.chat', $data)
            . view('templates.footer');
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
        $data['comments'] = Message::where('id_forum', $detail->id_chat)->get();
        return view('chat.detail', $data);
    }

    public function message(Request $request) {
        $data = [
            'id_forum' => $request->id_forum,
            'user' => $request->user,
            'message' => $request->message,
        ];
        $newMessage = Message::create($data);
    }
}
