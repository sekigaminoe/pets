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

Route::get('/', 'TopPageController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@show')->name('about');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/mycart', 'ShopController@myCart')->name('mycart')->middleware('auth');
Route::post('/mycart', 'ShopController@addMycart');
