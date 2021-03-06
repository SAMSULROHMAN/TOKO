<?php

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

Route::get('/', 'ViewController@index');

Route::get('/about', 'ViewController@about');

Route::get('/produk','ViewController@produk');

Route::get('/produk/{product}','ViewController@detail')->name('produk.detail');


Auth::routes([
    'register' => false,
   'reset' => false,
   'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product', 'ProdukController');
