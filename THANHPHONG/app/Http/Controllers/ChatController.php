<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($userId = null)
    {
        $messages = [];

        if ($userId) {
            $messages = Message::where(function ($q) use ($userId) {
                $q->where('from_user_id', Auth::id())->where('to_user_id', $userId);
            })->orWhere(function ($q) use ($userId) {
                $q->where('from_user_id', $userId)->where('to_user_id', Auth::id());
            })->orderBy('created_at')->get();
        }

        return view('desgin.chatKH', compact('messages', 'userId'));
    }

    public function send(Request $request)
    {
        Message::create([
            'from_user_id' => Auth::id(),
            'to_user_id' => $request->to_user_id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }

    public function showChat()
    {
        $messages = Message::where('from_user_id', Auth::id())
            ->orWhere('to_user_id', Auth::id())
            ->orderBy('created_at')
            ->get();

        return view('desgin.chatKH', compact('messages'));
    }
}
