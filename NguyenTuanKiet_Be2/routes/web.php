<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\EvaluteController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\MakeAnAppointmentController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CommentController;

use App\Models\MakeAnAppointment;

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

//index home
Route::get('index', [CRUDController::class, 'IndexHome'])->name('indexHome');

Route::get('/detail', [ProductController::class, 'detail'])->name('details');

Route::get('Buy/{id}', [ProductController::class, 'detail_Buy'])->name('Buy');


//chi tiet 
// Route::get('/product/{Id_Products}', [ProductController::class, 'detail'])->name('product.detail');


//index products list
Route::get('index', [ProductController::class, 'listProducts'])->name('indexHome');



//detail
Route::post('/detail', [CommentController::class, 'createComment'])->name('comments.create');
Route::get('listComment', [CommentController::class, 'Comment'])->name('list.comment');

Route::get('/listcomment', [CommentController::class, 'listComment']);



//Make_appointment
Route::get('make _appointment', [CRUDController::class, 'Make_appointment'])->name('appointment');

//evalues
Route::get('Evalues', [CRUDController::class, 'Evalutes'])->name('evalues');
Route::post('Evalues', [EvaluteController::class, 'createEvalutes'])->name('createEvalutes');


Route::get('forgetPassword', [CRUDController::class, 'ForgetPassword'])->name('forgetPassword.sign');

Route::post('forgetPassword', [CRUDController::class, 'resetPassword'])->name('user.postUpdatePassword');

//quen mat khau va gui ma xac thuc qua email
Route::get('OTP_password', [CRUDController::class, 'OTP_Password'])->name('OTP_password');
Route::post('OTP_password', [CRUDController::class, 'sendResetCode'])->name('forgot.password.send');




Route::get('QL_Users', [CRUDController::class, 'QL_User'])->name('users');

// Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('users');

Route::get('QL_Users', [CRUDController::class, 'index'])->name('users');


Route::post('edit_user', [CRUDController::class, 'User_list'])->name('edit');
Route::get('edit_user', [CRUDController::class, 'updateUser'])->name('edit');

Route::post('edit_user', [CRUDController::class, 'postUpdateUser'])->name('user.postUpdateUser');


Route::get('add_user', [CRUDController::class, 'Add'])->name('add_user');
Route::post('add_user', [CRUDController::class, 'addUsers'])->name('user.addUsers');
Route::get('delete_user', [CRUDController::class, 'deleteUser'])->name('user.delete');


//make apponitment

Route::post('make _appointment', [MakeAnAppointmentController::class, 'store'])->name('make.appointment');

//chatbox
// Route::post('/chat-ai', [\App\Http\Controllers\ChatController::class, 'chat']);


//trang thong ke doanh thu
Route::get('Statistics', [OrdersController::class, 'Statistics'])->name('Statistics');


Route::get('Buy', [CRUDController::class, 'listInBuy'])->middleware('auth');
//Buy
Route::get('Buy', [OrdersController::class, 'Orders'])->name('orders.buy');
// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';
