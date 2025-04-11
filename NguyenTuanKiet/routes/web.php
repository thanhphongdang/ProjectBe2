<?php

use App\Http\Controllers\CRUDController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('desgin.demo');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('sign', [CRUDController::class, 'Sign'])->name('Sign');
Route::post('sign', [CRUDController::class, 'postSign'])->name('post.Sign');

Route::get('login', [CRUDController::class, 'Login'])->name('Login');
Route::post('login', [CRUDController::class, 'authUser'])->name('user.authUser');

Route::get('admin', [ProductController::class, 'index'])->name('Demo');


Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');
Route::post('forgetPassword', [CRUDController::class, 'postUpdatePassword'])->name('user.postUpdatePassword');




// Route::get('product-add', [CRUDController::class, 'product'])->name('product-add');





// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
