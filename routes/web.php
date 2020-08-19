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

Route::get('/', function () {
    return view('usersView/home');
});
Route::get('/a', function () {
    return view('usersView/checkOut');
});
Route::get('/b', function () {
    return view('usersView/profile');
});
Route::get('/admin', function () {
    return view('adminView/index');
});
Route::get('/product', function () {
    return view('adminView/product/index');
});
Route::get('/product/create', function () {
    return view('adminView/product/create');
});
Route::get('/product/show', function () {
    return view('adminView/product/show');
});
Route::get('/category', function () {
    return view('adminView/category/index');
});
Route::get('/category/create', function () {
    return view('adminView/category/create');
});