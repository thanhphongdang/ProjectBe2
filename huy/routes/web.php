<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailCarController;


Route::get('/', [ProductController::class, 'products'])->name('home');
Route::get('/product/{id}', [DetailCarController::class, 'show'])->name('product.detail');

Route::get('/buy-used-cars', function () {
    return view('car_project.buy-used-cars');
})->name('buy.used.cars'); // đặt tên cho route






/*
Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('car_project.index');
})->name('home');
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
