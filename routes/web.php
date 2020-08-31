<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'UserController@index');

Route::group(['prefix'=>'/admin', 'middleware'=>['auth', 'admin']], function() {
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('product_status', 'ProductController');
    Route::resource('order_status', 'ProductController');



    Route::get('/', ['as'=>'admin_dashboard', 'uses'=>'AdminController@dashboard']);
    Route::get('/products', ['as'=>'admin_products', 'uses'=>'AdminController@products']);
});

Route::group(['prefix'=>'/operator', 'middleware'=>['auth', 'operator']], function() {

});

Route::group(['prefix'=>'/user', 'middleware'=>['auth', 'user']], function() {

});

