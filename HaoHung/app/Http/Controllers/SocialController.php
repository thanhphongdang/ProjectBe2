<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class SocialController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

public function handleFacebookCallback()
{
    try {
        Log::info('Bắt đầu xử lý callback Facebook...');
        
        // Dùng stateless nếu đang test với ngrok hoặc không dùng session
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        
        // Log::info('Facebook user:', (array) $facebookUser);
        
        $email = $facebookUser->getEmail() ?? ($facebookUser->getId() . '@facebook.fake');
        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'name' => $facebookUser->getName(),
                'password' => bcrypt('@Haohung@081025#'),
                'address' => 'hdhahdhahd',
                'phone' => '0215367820',
                'image' => 'demo.jpg'
            ]
        );

        Auth::login($user);
        Log::info('Đăng nhập thành công');

        return redirect('Index');
    } catch (\Throwable $e) {
        Log::error('Lỗi Facebook Login: ' . $e->getMessage());
        dd('Lỗi chi tiết:', $e->getMessage()); // In lỗi ra màn hình để debug
    }
}
}
