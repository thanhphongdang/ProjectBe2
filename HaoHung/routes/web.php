<?php

use App\Http\Controllers\CRUDController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('desgin.demo');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });


//Sign
Route::get('sign', [CRUDController::class, 'Sign'])->name('Sign');
Route::post('sign', [CRUDController::class, 'postSign'])->name('post.Sign');
//Login
Route::get('login', [CRUDController::class, 'Login'])->name('Login');
Route::post('login', [CRUDController::class, 'authUser'])->name('user.authUser');
//lay danh sach
Route::get('admin', [CRUDController::class, 'index'])->name('Demo');
Route::get('user-list', [CRUDController::class,'user_list'])->name('user.list');
// Xoa User
Route::get('delete', [CRUDController::class,'deleteUser'])->name('user.delete');
//Upadte User
Route::get('update', [ CRUDController::class,'updateUser'])->name('update.user');
Route::post('update', [CRUDController::class,'postUpdateUser'])->name('post.update');
// add User
Route::get('add-user', [CRUDController::class,'Add'])->name('user.add');
Route::post('add-user', [CRUDController::class,'postAdd'])->name('post.add');

//Chi thong tin lay mot minh admin
// Route::get('admin-user', [CRUDController::class,'Profile'])->name('admin');
// Route::get('admin-user', [CRUDController::class,'profileAdmin'])->name('helo');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
