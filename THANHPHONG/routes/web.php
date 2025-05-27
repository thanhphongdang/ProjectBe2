<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AccountAdminController;
use App\Http\Controllers\CustomerReviewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CRUDController;

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

// Hiển thị dữ liệu sản phẩm Trang chủ - Hotline
Route::get('/', [ProductController::class, 'products'])->name('trangChu');

// Lọc danh sách sản phẩm theo hãng xe
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/category/{category}', [ProductController::class, 'filterByCategory'])->name('products.category');

// Bản đồ
Route::get('/map', [MapController::class, 'index'])->name('map');
Route::post('/map/search', [MapController::class, 'search'])->name('map.search');

// Thông báo và theo dõi đơn hàng
Route::get('/orders/{oder}', [OderController::class, 'showTracking'])->name('orders.tracking');

// Đăng ký
Route::get('sign', [CRUDController::class, 'Sign'])->name('Sign');
Route::post('sign', [CRUDController::class, 'postSign'])->name('post.Sign');

// Đăng nhập
Route::get('login', [CRUDController::class, 'Login'])->name('Login');
Route::post('login', [CRUDController::class, 'authUser'])->name('user.authUser');

Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');
Route::post('forgetPassword', [CRUDController::class, 'postUpdatePassword'])->name('user.postUpdatePassword');

// Chat với Khách hàng
Route::middleware(['auth'])->group(function () {
    Route::get('/customer/chat', [MessageController::class, 'index'])->name('chat.customer');
    Route::post('/customer/chat/send', [MessageController::class, 'send'])->name('chat.customer.send');

    // Admin chat routes
    Route::get('/admin/chat', [MessageController::class, 'adminIndex'])->name('chat.admin');
    Route::post('/admin/chat/send', [MessageController::class, 'adminSend'])->name('chat.admin.send');
});

// Route::get('/', function () {
//     return view('desgin.QLMaGiamGia');
// })->name('home');

// Route::get('/', function () {
//     return Redirect::route('chat.customer');
// })->name('home');

require __DIR__.'/settings.php';
# require __DIR__.'/auth.php';
