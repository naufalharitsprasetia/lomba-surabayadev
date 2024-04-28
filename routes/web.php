<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [HomeController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/register', [HomeController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [HomeController::class, 'addUser'])->name('addUser')->middleware('guest');
// 
Route::post('/logout', [HomeController::class, 'logout'])->name('logout')->middleware('auth');
// Products
Route::get('/products', [ProductController::class, 'index'])->name('product.index');