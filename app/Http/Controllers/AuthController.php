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
        return view('Auth.login');
    }

    public function pilihanRegis()
    {
        return view('Auth.pilihan');
    }

    public function regisPengguna()
    {
        return view('Auth.regisPengguna');
    }

    public function regisFotografer()
    {
        return view('Auth.regisFotografer');
    }
}
