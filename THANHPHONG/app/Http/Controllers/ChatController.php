<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function chatWithShop()
    {
        $admin = User::where('role', 'admin')->first();

        $messages = Message::where(function ($q) use ($admin) {
            $q->where('sender_id', Auth::id())->where('receiver_id', $admin->id);
        })->orWhere(function ($q) use ($admin) {
            $q->where('sender_id', $admin->id)->where('receiver_id', Auth::id());
        })->orderBy('created_at')->get();

        return view('chat.customer', compact('messages', 'admin'));
    }

    public function chatWithCustomer($customerId)
    {
        $messages = Message::where(function ($q) use ($customerId) {
            $q->where('sender_id', Auth::id())->where('receiver_id', $customerId);
        })->orWhere(function ($q) use ($customerId) {
            $q->where('sender_id', $customerId)->where('receiver_id', Auth::id());
        })->orderBy('created_at')->get();

        $customer = User::findOrFail($customerId);
        return view('chat.admin', compact('messages', 'customer'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
}
