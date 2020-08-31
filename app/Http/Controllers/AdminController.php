<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/index');
    }

    public function products(){
        $rows = Product::get();
        return view('/admin/product/index', compact('rows'));
    }
}
