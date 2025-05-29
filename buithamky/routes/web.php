<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\DetailCarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MakeAnAppointmentController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('Function.datlichxemxe');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';

//Trang Nhap Xe
Route::get('nhapxe', [WarehouseController::class, 'showNhapXe'])->name('admin.nhapxe');

//Trang Add vao Nhap Xe
Route::get('add-product',[WarehouseController::class,'addProduct'])->name('addProduct');
Route::post('postproduct',[WarehouseController::class,'postAddproduct'])->name('post.product');
//Xoa Product
Route::get('delete', [WarehouseController::class,'deleteProduct'])->name('product.delete');
//Upadte Product
Route::get('edit-product/{id}', [WarehouseController::class,'updateProduct'])->name('update.product');
Route::post('postupdate/{id}', [WarehouseController::class,'postUpdateProduct'])->name('post.update');

//Trang ProfileKhachHang
Route::get('profilekhachhang/{id}', [CustomerController::class, 'displayCustomer'])->name('user.profilekhachhang');

//Trang index
Route::get('index', [ProductController::class,'showIndex'])->name('user.index');

//Trang detail
Route::get('detail/{id}', [DetailCarController::class,'showDetail'])->name('user.detail');

//Trang Dat lich xem xe
Route::post('post_datlichxemxe', [MakeAnAppointmentController::class,'postAdd'])->name('post.datlichxemxe');
Route::get('datlichxemxe', [MakeAnAppointmentController::class,'showForm'])->name('user.datlichxemxe');


//Search
Route::get('search', [SearchController::class,'search'])->name('user.search');