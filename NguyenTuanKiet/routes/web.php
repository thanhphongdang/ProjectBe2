<?php

use App\Http\Controllers\CRUDController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('desgin.login');
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




Route::get('QL_Users', [CRUDController::class, 'QL_User'])->name('users');

// Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('users');

Route::get('QL_Users', [CRUDController::class, 'index'])->name('users');


Route::post('edit_user', [CRUDController::class, 'User_list'])->name('edit');
Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('edit');

Route::post('edit_user', [CRUDController::class, 'postUpdateUser'])->name('user.postUpdateUser');


Route::get('add_user', [CRUDController::class, 'Add'])->name('add_user');
Route::post('add_user', [CRUDController::class, 'addUsers'])->name('user.addUsers');





// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
