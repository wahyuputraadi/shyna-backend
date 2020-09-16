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

// menambahkan route halaman pertama = dasboard
Route::get('/', 'DasboardController@index' ) ->name('dashboard');

// Auth::routes();

// menonaktifkan register
Auth::routes(['register' => false]);

Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
// Route::get('/home', 'HomeController@index')->name('home');
