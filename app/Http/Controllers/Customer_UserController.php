<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer_UserController extends Controller
{
    //
    public function index() {
        $data = array('title' => 'User Profil');
        return view('User.index', $data);
    }

    public function setting() {
        $data = array('title' => 'Setting Profil');
        return view('User.setting', $data);
    }
}
