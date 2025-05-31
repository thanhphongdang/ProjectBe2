<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Thêm đoạn này để force HTTPS khi không phải môi trường local
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
