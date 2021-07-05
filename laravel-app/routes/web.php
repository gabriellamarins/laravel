<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [HomeController::class, 'index']);

Route::resource('product', ProductController::class);

//Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/carte', [CartController::class, 'index']);

Route::resource('backoffice', BackofficeController::class);

Route::resource('customer', CustomerController::class);

Route::resource('category', CategoryController::class);

Route::resource('cart', CartController::class);
