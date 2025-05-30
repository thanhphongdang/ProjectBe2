<?php
namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Reset_code_passwords;
use App\Models\ResetCodePassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetCodePasswordController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'code'     => 'required|string|exists:reset_code_passwords',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // find the code
        $passwordReset = Reset_code_passwords::firstWhere('code', $request->code);
        //Check if it has not expired: the time is one hour
        if ($passwordReset->created_at > now()->addHour()) {
            $passwordReset->delete();
            return response(['message' => trans('passwords.code_is_expire')], 422);
        }

        // find user's email
        $guest = User::firstWhere('email', $passwordReset->email);
        // update user password
        // $guest->update($request->only('password'));
        $guest->update([
            'password' => Hash::make($request->password),
        ]);

        // dd($guest->update($request->only('password')));
        // delete current code
        DB::table('reset_code_passwords')->where('email', $passwordReset->email)->delete();

        // return response(['message' => 'Mật khẩu đã được cập nhật lại'], 200);
        return redirect()->route('Login')->with('capnhatthanhcong', 'Mật khẩu đã được cập nhật lại thành công!');
    }
}