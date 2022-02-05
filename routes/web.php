<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'register'=>false,
    'reset'=>false,
]);

Route::get('/', 'MainController@index');

// Login
Route::get('/home', 'HomeController@index');


// About
Route::get('/about', 'AboutController@index');
Route::get('/about/create', 'AboutController@create')->name('about.create');
Route::post('/about', 'AboutController@store')->name('about.store');
Route::post('/about/delete/{id}', 'AboutController@destroy')->name('about.destroy');
Route::get('/about/edit/{id}', 'AboutController@edit')->name('about.edit');
Route::post('/about/{id}', 'AboutController@update')->name('about.update');

// Produk
Route::get('/produk', 'ProdukController@index');
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::post('/produk', 'ProdukController@store')->name('produk.store');
Route::post('/produk/delete/{id}', 'ProdukController@destroy')->name('produk.destroy');
Route::get('/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
Route::post('/produk/{id}', 'ProdukController@update')->name('produk.update');
Route::get('/produk/search', 'ProdukController@search')->name('produk.search');

// Dokumentasi
Route::get('/dok', 'DokController@index');
Route::get('/dok/create', 'DokController@create')->name('dok.create');
Route::post('/dok', 'DokController@store')->name('dok.store');
Route::post('/dok/delete/{id}', 'DokController@destroy')->name('dok.destroy');
Route::get('/dok/edit/{id}', 'DokController@edit')->name('dok.edit');
Route::post('/dok/{id}', 'DokController@update')->name('dok.update');

// Maps
Route::get('/maps', 'MapsController@index');
Route::get('/maps/create', 'MapsController@create')->name('maps.create');
Route::post('/maps', 'MapsController@store')->name('maps.store');
Route::post('/maps/delete/{id}', 'MapsController@destroy')->name('maps.destroy');
Route::get('/maps/edit/{id}', 'MapsController@edit')->name('maps.edit');
Route::post('/maps/{id}', 'MapsController@update')->name('maps.update');

// WhatsApp
Route::get('/wa', 'WaController@index');
Route::get('/wa/create', 'WaController@create')->name('wa.create');
Route::post('/wa', 'WaController@store')->name('wa.store');
Route::post('/wa/delete/{id}', 'WaController@destroy')->name('wa.destroy');
Route::get('/wa/edit/{id}', 'WaController@edit')->name('wa.edit');
Route::post('/wa/{id}', 'WaController@update')->name('wa.update');

// Reviews
Route::get('/review', 'ReviewController@index');
Route::get('/review/create', 'ReviewController@create')->name('review.create');
Route::post('/review', 'ReviewController@store')->name('review.store');
Route::post('/review/delete/{id}', 'ReviewController@destroy')->name('review.destroy');
Route::get('/review/edit/{id}', 'ReviewController@edit')->name('review.edit');
Route::post('/review/{id}', 'ReviewController@update')->name('review.update');

// FAQ
Route::get('/faq', 'FaqController@index');
Route::get('/faq/create', 'FaqController@create')->name('faq.create');
Route::post('/faq', 'FaqController@store')->name('faq.store');
Route::post('/faq/delete/{id}', 'FaqController@destroy')->name('faq.destroy');
Route::get('/faq/edit/{id}', 'FaqController@edit')->name('faq.edit');
Route::post('/faq/{id}', 'FaqController@update')->name('faq.update');

// Email
Route::get('/email', 'EmailController@index');
Route::get('/email/create', 'EmailController@create')->name('email.create');
Route::post('/email', 'EmailController@store')->name('email.store');
Route::post('/email/delete/{id}', 'EmailController@destroy')->name('email.destroy');
Route::get('/email/edit/{id}', 'EmailController@edit')->name('email.edit');
Route::post('/email/{id}', 'EmailController@update')->name('email.update');

// Detail Produk
Route::get('/detail', 'DetailController@index');
Route::get('/detail/create', 'DetailController@create')->name('detail.create');
Route::post('/detail', 'DetailController@store')->name('detail.store');
Route::get('/detail/edit/{id}', 'DetailController@edit')->name('detail.edit');
Route::post('/detail/update/{id}', 'DetailController@update')->name('detail.update');
Route::post('/detail/delete/{id}', 'DetailController@destroy')->name('detail.destroy');
Route::get('/detail/search', 'DetailController@search')->name('detail.search');


// Detail Produk View
Route::get('/detail-produk/{jenis}', 'ProdukController@detpro')->name('detail.produk');

