<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::resource('products', 'ProductController'); // Product CRUD

Route::resource('cart', 'CartController'); // Cart CRUD

Route::get('/viderpanier', function () {
    \Gloudemans\Shoppingcart\Facades\Cart::destroy();
});

Route::get('search', 'ProductController@search')->name('products.search');
