<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function users(){
    	return view('dashboard.users');
    }

    public function sales(){
    	return view('dashboard.sales');
    }

    public function products(){
    	return view('dashboard.products');
    }

    public function stocks(){
    	return view('dashboard.stock');
    }
}
