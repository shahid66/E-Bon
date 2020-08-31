<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'OrderController@index');

Route::group(['prefix'=>'/admin', 'middleware'=>['auth', 'admin']], function() {
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('product_status', 'ProductController');
    Route::resource('order_status', 'ProductController');
    


    Route::get('/', ['as'=>'admin_dashboard', 'uses'=>'AdminController@dashboard']);
});

Route::group(['prefix'=>'/admin', 'middleware'=>['auth', 'operator']], function() {

});

Route::group(['prefix'=>'/admin', 'middleware'=>['auth', 'user']], function() {

});
