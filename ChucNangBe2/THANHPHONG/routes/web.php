<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SaleController;

Route::get('add', [SaleController::class, 'sale_List'])->name('sale.list');
Route::post('QLMaGiamGia', [SaleController::class, 'postAdd'])->name('PostQLMaGiamGia');

Route::get('delete', [SaleController::class, 'deleteSale'])->name('sale.deleteSale');

Route::get('edit', [SaleController::class, 'updateSale'])->name('update');
Route::post('edit', [SaleController::class, 'postUpdateSale'])->name('sale.postUpdateSale');

// Route::get('edit', [SaleController::class, 'viewEdit'])->name('viewEdit');

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('desgin.QLMaGiamGia');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
