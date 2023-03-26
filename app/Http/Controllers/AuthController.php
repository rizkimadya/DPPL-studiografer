<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function home()
    {
        return view('User.home');
    }

    public function login()
    {
        return view('');
    }
}
