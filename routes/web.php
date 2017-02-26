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

//Route::get('/', function () {
//    return view('welcome',['breadcrumbs'=>[]]);
//});
//Dashboard
Route::resource('/', 'DashboardController');
//Customers
Route::resource('customers', 'CustomersController');
//Product
Route::resource('product', 'ProductController');
//Merk
Route::resource('merk', 'MerkController');
//Jenis Produk
Route::resource('jenisproduk', 'JenisProdukController');
Route::get('/ajax/jenisproduk/load_table', ['uses' => 'JenisProdukController@loadTable']);
Route::get('/ajax/jenisproduk/load_data', ['uses' => 'JenisProdukController@loadDataTable']);
