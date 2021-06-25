<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackofficeController;
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

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);



Route::get('/carte', [CartController::class, 'index']);

Route::resource('backoffice/product', BackofficeController::class);

//Route::get('/', function () {
//    return view ('HelloWorld');
//});
//
//Route::get('/product', function () {
//    return ('Liste des produits');
//});
//
//Route::get('/product/{id}', function ($id) {
//    return ('Fiche du produit'.$id);
//});
//
//Route::get('/cart', function () {
//    return ('Panier');
//});
