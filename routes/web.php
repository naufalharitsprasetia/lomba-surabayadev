<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/help', [HomeController::class, 'contact'])->name('contact');
Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [HomeController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/register', [HomeController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [HomeController::class, 'addUser'])->name('addUser')->middleware('guest');
// 
Route::post('/logout', [HomeController::class, 'logout'])->name('logout')->middleware('auth');
// Products
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/c/{id}', [ProductController::class, 'indexByCategory'])->name('product.indexByCategory');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/updateCart', [CartController::class, 'updateCart'])->name('cart.updateCart');
Route::post('/addToCart', [CartController::class, 'addToCart'])->name('cart.addToCart');
//
Route::get('/checkout', [CartController::class, 'tahap1'])->name('cart.checkout');
Route::get('/tahap1', [CartController::class, 'tahap1'])->name('cart.tahap1');
Route::get('/tahap2', [CartController::class, 'tahap2'])->name('cart.tahap2');
Route::get('/tahap3', [CartController::class, 'tahap3'])->name('cart.tahap3');
