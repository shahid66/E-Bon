<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $rows = Product::get();
        return view('/users/home', compact('rows'));
    }
}
