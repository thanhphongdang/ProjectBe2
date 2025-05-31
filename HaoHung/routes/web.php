<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\CustomerController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DetailCarController;
use App\Http\Controllers\MinMapController;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\MakeAnAppointmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerReviewsController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetCodePasswordController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('demo');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('navbar', [CRUDController::class, 'navbar']);
Route::get('footer', [CRUDController::class, 'footer']);
Route::get('/header', [CRUDController::class, 'header'])->middleware('auth');


//Sign
Route::get('sign', [CRUDController::class, 'Sign'])->name('Sign');
Route::post('sign', [CRUDController::class, 'postSign'])->name('post.Sign');
//Login
Route::get('login', [CRUDController::class, 'Login'])->name('Login');
Route::post('login', [CRUDController::class, 'authUser'])->name('user.authUser');
//lay danh sach
Route::get('admin', [CRUDController::class, 'index'])->name('Demo');
Route::get('user-list', [CRUDController::class, 'user_list'])->name('user.list');
// Xoa User
// Route::get('delete', [CRUDController::class,'deleteUser'])->name('user.delete');
// Route sử dụng phương thức DELETE
Route::delete('user/{id}', [CRUDController::class, 'deleteUser'])->name('user.delete');

//Upadte User
Route::get('update', [CRUDController::class, 'updateUser'])->name('update.user');
Route::post('update', [CRUDController::class, 'postUpdateUser'])->name('post.update');
// add User
Route::get('add-user', [CRUDController::class, 'Add'])->name('user.add');
Route::post('add-user', [CRUDController::class, 'postAdd'])->name('post.add');

Route::post('/logout', [CRUDController::class, 'destroy'])->name('logout');

Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');
// Route::post('forgetPassword', [CRUDController::class, 'postUpdatePassword'])->name('user.postUpdatePassword');
Route::get('OTP_password', [CRUDController::class, 'OTPEmails'])->name('OTP.sign');

Route::post('forgetPassword', [ResetCodePasswordController::class, '__invoke'])->name('user.postUpdatePassword');
//otp
Route::post('OTP_password', [ForgotPasswordController::class, '__invoke'])->name('forgot.password.send');

Route::post('updateimage', [CRUDController::class, 'updateAvatar'])->name('update.profile');
// Route::get('admin', [CRUDController::class,'header'])->name('helo');

//Chi thong tin lay mot minh admin
// Route::get('admin-user', [CRUDController::class,'Profile'])->name('admin');
Route::get('admin/{id?}', [CRUDController::class, 'Profile'])->name('heloo');
Route::get('admin-user/{id?}', [CRUDController::class, 'ProfileUser'])->name('helo');

Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('add-product', [ProductController::class, 'store'])->name('post.product');
Route::get('Index', [ProductController::class, 'products'])->name('product');
Route::get('product/{id}', [ProductController::class, 'moveToProduct'])->name('warehouse.move');

Route::get('/products', [ProductController::class, 'products'])->name('products.index');
Route::get('/products/category/{category}', [ProductController::class, 'filterByCategory'])->name('products.category');
Route::get('update-product', [ProductController::class, 'updateProduct'])->name('update.product');
Route::post('update-product', [ProductController::class, 'postUpdateProduct'])->name('product.update');

Route::get('list-product/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');

// Warehouse

Route::get('list-product', [WarehouseController::class, 'listProduct'])->name('listproduct');
Route::post('post-warehouse', [WarehouseController::class, 'addInwarehouse'])->name('post.warehouse');
Route::get('tax/{id}', [WarehouseController::class, 'showTax'])->name('tax');

//sale
Route::get('voucher', [SaleController::class, 'sale_List'])->name('sale.list');
Route::get('add-voucher', [SaleController::class, 'index'])->name('list.get');
Route::post('QLMaGiamGia', [SaleController::class, 'postAdd'])->name('PostQLMaGiamGia');
Route::get('voucher/{id}', [SaleController::class, 'deleteSale'])->name('sale.deleteSale');

Route::get('edit', [SaleController::class, 'updateSale'])->name('update.sale');
Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');
// Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');

Route::get('/checkout', [CRUDController::class, 'showCheckout'])->name('checkout');



// Details

Route::get('detail', [DetailCarController::class, 'detailAdd'])->name('detail.add');
Route::post('detail', [DetailCarController::class, 'postAddDetails'])->name('add.detail');

//map 
Route::get('/map', [MinMapController::class, 'index'])->name('map');
Route::post('/map/search', [MinMapController::class, 'search'])->name('map.search');


//login  Facebook
// web.php

Route::get('/auth/facebook', [SocialController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/callback', [SocialController::class, 'handleFacebookCallback']);

//make appointment
Route::get('make-appointment', [MakeAnAppointmentController::class, 'Make_appointment'])->name('makeappointment');
Route::post('make-appointment', [MakeAnAppointmentController::class, 'store'])->name('make.appointment');

Route::middleware(['auth'])->group(function () {
    Route::get('/customer/chat', [MessageController::class, 'index'])->name('chat.customer');
    Route::post('/customer/chat/send', [MessageController::class, 'send'])->name('chat.customer.send');

    // Admin chat routes

});
Route::get('chat', [MessageController::class, 'adminIndex'])->name('chat.admin');
Route::post('/admin/chat/send', [MessageController::class, 'adminSend'])->name('chat.admin.send');
// Cart
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.view');
Route::post('cart/delete/{id}', [CartController::class, 'deleteCart'])->name('cart.delete');
//xoa het tat ca trong gio hang
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');







// Hiển thị dữ liệu Customer Reviews
Route::get('AdminTraLoiDanhGia', [CustomerReviewsController::class, 'customerReviews'])->name('home');

Route::post('/admin/customer-reviews/reply', [CustomerReviewsController::class, 'reply'])->name('customerReviews.reply');

// Thông báo và theo dõi đơn hàng
Route::get('/orders/{oder}', [OderController::class, 'showTracking'])->name('orders.tracking');



   

// Route::post('/customer-reviews/reply', [CustomerReviewController::class, 'reply'])->name('customerReviews.reply');

Route::delete('delete/{id}', [CustomerReviewsController::class, 'deleteCustomerReviews'])->name('review.deleteCustomerReviews');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';


//bieu do 
Route::get('/statistic', [StatisticController::class, 'showChart'])->name('page.statistic');


//comment admin
Route::get('add-comments',[CommentsController::class,'listProductsComment'])->name('add-comments'); 
Route::post('comments.store', [CommentsController::class,'createComment'])->name('comments.store');
// Cách 1: Sử dụng URL dễ nhớ
Route::get('page/add-comments', [CommentsController::class, 'listProductsComment'])->name('page.add-comments');

//list
// Route::get('list-comments', [CommentsController::class, 'ListAdminComment'])->name('page.list-comments');
Route::get('/comments', [CommentsController::class, 'ListAdminComment'])->name('page.list-comments');

Route::delete('/list-comments/{id}', [CommentsController::class, 'destroy'])->name('comments.destroy');

//Pay  QR
use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'form']);
Route::post('/payment', [PaymentController::class, 'generateQR']);

Route::get('/payment/QR', function () {
    return view('page.QR-code');
}); 

//Trang Dat lich xem xe
Route::post('post_datlichxemxe', [MakeAnAppointmentController::class,'postAdd'])->name('post.datlichxemxe');
Route::get('datlichxemxe', [MakeAnAppointmentController::class,'showForm'])->name('user.datlichxemxe');

//Search
Route::get('search', [ProductController::class,'search'])->name('user.search');

//Profile-User
Route::post('/update-profile', [ProfileController::class, 'update'])->name('profile.update');
