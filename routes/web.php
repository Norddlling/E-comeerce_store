<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\RatingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin_panel', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/edit/{product:product_name}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::patch('/product/update/{product:product_name}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::patch('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
});

Route::middleware(['auth',])->group(function () {
    Route::post('product/rate/{product}', [RatingController::class, 'rateProduct'])->name('product.rateProduct');
});

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/product/{product:product_name}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search/product', [SearchController::class, 'findProducts'])->name('search.searchProduct');
Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
Route::post('/basket/store/{product}', [BasketController::class, 'store'])->name('basket.store');
Route::delete('/basket/delete/{basket}', [BasketController::class, 'destroy'])->name('basket.destroy');
Route::post('/session/{basket}', [BasketController::class, 'destroySession'])->name('basket.destroySession');
Route::delete('/basket/buy', [BasketController::class, 'buyProducts'])->name('basket.buyProducts');
Route::post('/basket/buy', [BasketController::class, 'buyProductsWithoutAuth'])->name('basket.buyProductsWithoutAuth');