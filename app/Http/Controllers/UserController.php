<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexPaket()
    {
        return view('User.PaketFoto.index');
    }

    public function detailPaket()
    {
        return view('User.PaketFoto.detail');
    }

    public function indexFotografer()
    {
        return view('User.Fotografer.index');
    }

    public function detailFotografer()
    {
        return view('User.Fotografer.detail');
    }

}
