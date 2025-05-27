<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
public function index()
{
    $userId = Auth::id();

    $admin = User::where('role', 'admin')->first();

    if (!$admin) {
        abort(404, 'Admin user not found. Please create an admin user with role "admin".');
    }

    $messages = Message::where(function ($query) use ($userId, $admin) {
        $query->where('sender_id', $userId)->where('receiver_id', $admin->id);
    })->orWhere(function ($query) use ($userId, $admin) {
        $query->where('sender_id', $admin->id)->where('receiver_id', $userId);
    })->orderBy('created_at')->get();

return view('desgin.customer-chat', compact('messages'));
}

public function send(Request $request)
{
    $request->validate([
        'message' => 'required|string',
    ]);

    $admin = User::where('role', 'admin')->first();

    Message::create([
        'sender_id' => Auth::id(),
        'receiver_id' => $admin->id,
        'message' => $request->message,
    ]);

    return redirect()->route('chat.customer');
}

public function adminIndex()
{
    $user = Auth::user();

    if (!$user || $user->role !== 'admin') {
        abort(403, 'Unauthorized access.');
    }

    // Nhận tất cả các tin nhắn liên quan đến admin
    $messages = Message::where('sender_id', $user->id)
        ->orWhere('receiver_id', $user->id)
        ->orderBy('created_at')
        ->get();

    // Lấy khách hàng đầu tiên đã gửi tin nhắn cho quản trị viên
    $firstCustomerId = Message::where('receiver_id', $user->id)
        ->orderBy('created_at')
        ->value('sender_id');

    return view('desgin.admin-chat', compact('messages', 'firstCustomerId'));
}

public function adminSend(Request $request)
{
    $user = Auth::user();

    if (!$user || $user->role !== 'admin') {
        abort(403, 'Unauthorized access.');
    }

    $request->validate([
        'message' => 'required|string',
        'receiver_id' => 'required|integer|exists:users,id',
    ]);

    Message::create([
        'sender_id' => $user->id,
        'receiver_id' => $request->receiver_id,
        'message' => $request->message,
    ]);

    return redirect()->route('chat.admin');
}
}
