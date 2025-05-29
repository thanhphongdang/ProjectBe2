<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendCodeResetPassword;
use App\Models\Reset_code_passwords;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    //
     public function __invoke(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        // Delete all old code that the user sent before.
        Reset_code_passwords::where('email', $request->email)->delete();

        // Generate random code
        $data['code'] = mt_rand(100000, 999999);
        // $data['created_at'] = now()->timestamp;
        // dd($data);
        // Create a new code
        $codeData = Reset_code_passwords::create($data);
        // Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($codeData->code));
       
        return redirect()->route('forgetPassword.sign')->with('thanhcong', 'Chúng tôi đã gửi mã , bạn hãy kiểm tra gmail của bạn!');
    }
}
