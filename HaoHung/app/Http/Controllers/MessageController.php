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
        
        $admin = User::where('role', 1)->first();
        //  dd($admin);
        if (!$admin) {
            
            abort(404, 'Admin user not found. Please create an admin user with role "admin".');
        }
        // dd('ra ngoai');
        $messages = Message::where(function ($query) use ($userId, $admin) {
            $query->where('sender_id', $userId)->where('receiver_id', $admin->id);
        })->orWhere(function ($query) use ($userId, $admin) {
            $query->where('sender_id', $admin->id)->where('receiver_id', $userId);
        })->orderBy('created_at')->get();

        return view('page.user-chat', compact('messages'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $admin = User::where('role', 1)->first();

        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $admin->id,
            'message' => $request->message,
        ]);

        return redirect()->route('chat.customer');
    }

    // public function adminIndex()
// {
//     $user = Auth::user();

    //     if (!$user || $user->role !== 1) {
//         abort(403, 'Unauthorized access.');
//     }

    //     // Nhận tất cả các tin nhắn liên quan đến admin
//     $messages = Message::where('sender_id', $user->id)
//         ->orWhere('receiver_id', $user->id)
//         ->orderBy('created_at')
//         ->get();

    //     // Lấy khách hàng đầu tiên đã gửi tin nhắn cho quản trị viên
//     $firstCustomerId = Message::where('receiver_id', $user->id)
//         ->orderBy('created_at')
//         ->value('sender_id');

    //     return view('page.admin-chat', compact('messages', 'firstCustomerId'));
// }

    public function adminIndex(Request $request)
    {

        // // dd('hello');
        $admin = Auth::user();

        if (!$admin || $admin->role !== 1) {
            abort(403, 'Unauthorized access.');
        }

        // Lấy danh sách khách hàng đã từng nhắn với admin (distinct theo sender_id)
        $customers = Message::where('receiver_id', $admin->id)
            ->with('sender')
            ->select('sender_id')
            ->distinct()
            ->get()
            ->map(fn($msg) => $msg->sender)
            ->filter(); // lọc bỏ null nếu có

        // Lấy ID khách hàng được chọn (nếu có)
        $customerId = $request->get('customer_id') ?? $customers->first()?->id;

        $messages = [];
        $selectedCustomer = null;

        if ($customerId) {
            $selectedCustomer = User::find($customerId);

            $messages = Message::where(function ($query) use ($admin, $customerId) {
                $query->where('sender_id', $admin->id)->where('receiver_id', $customerId);
            })->orWhere(function ($query) use ($admin, $customerId) {
                $query->where('sender_id', $customerId)->where('receiver_id', $admin->id);
            })->orderBy('created_at')->get();
        }

         return view('page.cc', compact('admin', 'customers', 'messages', 'selectedCustomer'));
        // return view('page.cc');
    }


    // public function adminSend(Request $request)
    // {
    //     $user = Auth::user();

    //     if (!$user || $user->role !== 1) {
    //         abort(403, 'Unauthorized access.');
    //     }

    //     $request->validate([
    //         'message' => 'required|string',
    //         'receiver_id' => 'required|integer|exists:users,id',
    //     ]);

    //     Message::create([
    //         'sender_id' => $user->id,
    //         'receiver_id' => $request->receiver_id,
    //         'message' => $request->message,
    //     ]);

    //     return redirect()->route('chat.admin');
    // }
    public function adminSend(Request $request)
    {
        $admin = Auth::user();

        if (!$admin || $admin->role !== 1) {
            abort(403, 'Unauthorized access.');
        }

        $request->validate([
            'message' => 'required|string',
            'receiver_id' => 'required|integer|exists:users,id',
        ]);

        Message::create([
            'sender_id' => $admin->id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return redirect()->route('chat.admin', ['customer_id' => $request->receiver_id]);
    }

}