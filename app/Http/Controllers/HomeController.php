<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guest())
            return view('/guest/home');
        elseif (Auth::user()->role == "admin")
            return redirect('/admin/');
        elseif (Auth::user()->role == "operator")
            return redirect('/operator/');
        else
            return view('/admin/index');
    }
}
