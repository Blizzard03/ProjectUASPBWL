<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    //Route Dasboard
    public function index(){
        return view('Dasboard.index');
    }
}
