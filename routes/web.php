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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/create', 'ProductsController@create')->name('product.create');
Route::post('/product/store', 'ProductsController@store')->name('product.store');
Route::get('/product/edit/{id}', 'ProductsController@edit')->name('product.edit');
Route::get('/product/delete/{id}', 'ProductsController@destroy')->name('product.delete');
Route::post('/product/update/{id}', 'ProductsController@update')->name('product.update');
