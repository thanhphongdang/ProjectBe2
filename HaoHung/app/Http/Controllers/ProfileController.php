<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRUDController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function update(Request $request)
{
    $user = Auth::user();

    $validated = $request->validate([
        'userName'     => 'required|string|max:255',
        'email'        => 'required|email|max:255|unique:users,email,' . $user->id,
        'number'       => 'required|string|max:15',
        'address'      => 'required|string|max:255',
        'newPassword'  => 'nullable|string|min:6',
    ]);

    // Kiểm tra thay đổi
    $isChanged = false;

    if ($validated['userName'] !== $user->name) $isChanged = true;
    if ($validated['email'] !== $user->email) $isChanged = true;
    if ($validated['number'] !== $user->phone) $isChanged = true;
    if ($validated['address'] !== $user->address) $isChanged = true;
    if ($request->filled('newPassword')) $isChanged = true;

    if (!$isChanged) {
        return redirect()->back()->with('error', 'Cần Chỉnh Sửa Để Cập Nhật');
    }

    // Cập nhật dữ liệu
    $user->name    = $validated['userName'];
    $user->email   = $validated['email'];
    $user->phone   = $validated['number'];
    $user->address = $validated['address'];

    if ($request->filled('newPassword')) {
        $user->password = Hash::make($request->newPassword);
    }

    $user->save();

    return redirect()->back()->with('success', 'Cập nhật hồ sơ thành công!');
}


}