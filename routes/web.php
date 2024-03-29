<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
 
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{products}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{products}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

Route::delete('/cart/{item}/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
