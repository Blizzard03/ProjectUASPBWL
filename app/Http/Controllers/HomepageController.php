<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    //Route Homepage
    public function index(){
        return view('HomePage.Homepage');
    }
    
    //Route About Us
    public function about()
    {
        return view('HomePage.About');
    }

    //Route Contact
    public function contact(){
        return view('HomePage.Contact');
    }

    //Route Products
    public function katagori(){
        return view('HomePage.Kategori');
    }

    
}
