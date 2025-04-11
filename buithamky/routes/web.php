<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('Demo');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';

// Route::get('Demo', [CustomerController::class, '/'])->name('user.Demo');

Route::get('profilekhachhang/{id}', [CustomerController::class, 'displayCustomer'])->name('user.profilekhachhang');


Route::get('nhapxe', [CustomerController::class, 'profilecustomer'])->name('user.nhapxe');