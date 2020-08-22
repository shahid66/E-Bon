<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users/home');
});
Route::get('/a', function () {
    return view('users/checkOut');
});
Route::get('/b', function () {
    return view('users/profile');
});
Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/product', function () {
    return view('admin/product/index');
});
Route::get('/product/create', function () {
    return view('admin/product/create');
});
Route::get('/product/show', function () {
    return view('admin/product/show');
});
Route::get('/category', function () {
    return view('admin/category/index');
});
Route::get('/category/create', function () {
    return view('admin/category/create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
