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



Route::get('/', 'DashboardController@index')->name('home');
Auth::routes(['register' => true]);
Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
Route::resource('transactions', 'TransactionController');
Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');
Route::get('transactions/{id}/status', 'TransactionController@setStatus')
    ->name('transactions.status');
