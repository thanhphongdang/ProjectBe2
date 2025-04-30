<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AccountAdminController;
use App\Http\Controllers\CustomerReviewsController;
use App\Http\Controllers\ProductController;

// Hiển thị dữ liệu thông tin của Admin
Route::get('profileAdmin/{id}', [AccountAdminController::class, 'displayAdmin'])->name('admin.profileAdmin');

// Admin Thêm, Xóa, Sửa Mã Giảm Giá
Route::get('add', [SaleController::class, 'sale_List'])->name('sale.list');
Route::post('QLMaGiamGia', [SaleController::class, 'postAdd'])->name('PostQLMaGiamGia');

Route::get('delete', [SaleController::class, 'deleteSale'])->name('sale.deleteSale');

Route::get('edit', [SaleController::class, 'updateSale'])->name('update');
Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');


// Hiển thị dữ liệu Customer Reviews
Route::get('AdminTraLoiDanhGia', [CustomerReviewsController::class, 'customerReviews'])->name('home');

Route::post('/admin/customer-reviews/reply', [CustomerReviewsController::class, 'reply'])->name('customerReviews.reply');
// Route::post('/customer-reviews/reply', [CustomerReviewController::class, 'reply'])->name('customerReviews.reply');

Route::delete('delete/{id}', [CustomerReviewsController::class, 'deleteCustomerReviews'])->name('review.deleteCustomerReviews');

// Hiển thị duwxlieeuj sản phẩm Trang chủ - Hotline
Route::get('/', [ProductController::class, 'products'])->name('trangChu');

// Route::get('/', function () {
//     // return Inertia::render('welcome');
//     return view('desgin.QLMaGiamGia');
// })->name('home');


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';