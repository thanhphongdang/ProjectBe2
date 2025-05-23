<?php

use App\Http\Controllers\CRUDController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\DetailCarController;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('demo');
})->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('navbar',[CRUDController::class, 'navbar']);
Route::get('footer',[CRUDController::class, 'footer']);
Route::get('header',[CRUDController::class, 'header']);


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
// Route::get('delete', [CRUDController::class,'deleteUser'])->name('user.delete');
// Route sử dụng phương thức DELETE
Route::delete('user/{id}', [CRUDController::class, 'deleteUser'])->name('user.delete');

//Upadte User
Route::get('update', [ CRUDController::class,'updateUser'])->name('update.user');
Route::post('update', [CRUDController::class,'postUpdateUser'])->name('post.update');
// add User
Route::get('add-user', [CRUDController::class,'Add'])->name('user.add');
Route::post('add-user', [CRUDController::class,'postAdd'])->name('post.add');

Route::post('/logout', [CRUDController::class, 'destroy'])->name('logout');

Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');
Route::post('forgetPassword', [CRUDController::class, 'postUpdatePassword'])->name('user.postUpdatePassword');


// Route::get('admin', [CRUDController::class,'header'])->name('helo');

//Chi thong tin lay mot minh admin
// Route::get('admin-user', [CRUDController::class,'Profile'])->name('admin');
Route::get('admin-user/{id?}', [CRUDController::class,'Profile'])->name('helo');
Route::get('admin-user/{id?}', [CRUDController::class,'ProfileUser'])->name('helo');

Route::get('add-product',[ProductController::class,'addProduct'])->name('addProduct');
Route::post('add-product',[ProductController::class,'store'])->name('post.product');
Route::get('Index',[ProductController::class,'products'])->name('product');
Route::get('product/{id}', [ProductController::class, 'moveToProduct'])->name('warehouse.move');

Route::get('/products', [ProductController::class, 'products'])->name('products.index');
Route::get('/products/category/{category}', [ProductController::class, 'filterByCategory'])->name('products.category');
Route::get('update-product', [ ProductController::class,'updateProduct'])->name('update.product');
Route::post('update-product', [ProductController::class,'postUpdateProduct'])->name('product.update');

Route::get('list-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');

// Warehouse

Route::get('list-product',[WarehouseController::class,'listProduct'])->name('listproduct');
Route::post('post-warehouse',[WarehouseController::class,'addInwarehouse'])->name('post.warehouse');

//sale
Route::get('voucher', [SaleController::class, 'sale_List'])->name('sale.list');
Route::get('add-voucher', [SaleController::class, 'index'])->name('list.get');
Route::post('QLMaGiamGia', [SaleController::class, 'postAdd'])->name('PostQLMaGiamGia');
Route::get('sale-delete', [SaleController::class, 'deleteSale'])->name('sale.deleteSale');

Route::get('edit', [SaleController::class, 'updateSale'])->name('update.sale');
Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');
// Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');

Route::get('/checkout', [CRUDController::class, 'showCheckout'])->name('checkout');



// Details

Route::get('detail',[DetailCarController::class, 'detailAdd'])->name('detail.add');
Route::post('detail',[DetailCarController::class, 'postAddDetails'])->name('add.detail');
// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
