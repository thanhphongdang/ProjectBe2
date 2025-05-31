<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle($request, Closure $next)
{
    
        if (!Auth::check()) {
            Log::warning('Middleware User: Người dùng chưa đăng nhập');
            return redirect()->route('Login')->with('error', 'Bạn phải đăng nhập trước.');
        }

        if (Auth::user()->role !== 0) {
            Log::warning('Middleware User: Người dùng không có quyền, role=' . Auth::user()->role);
            abort(403, 'Bạn không có quyền truy cập.');
        }

        Log::info('Middleware User: Người dùng role=0, cho phép truy cập');
        return $next($request);
    
}



}
