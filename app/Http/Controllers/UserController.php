<?php

namespace App\Http\Controllers;

use App\Models\PaketFoto;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexPaket()
    {
        $paketfoto = PaketFoto::all();
        return view('User.PaketFoto.index', compact('paketfoto'));
    }

    public function detailPaket()
    {
        return view('User.PaketFoto.detail');
    }

    public function indexFotografer()
    {
        $fotografer = User::where('roles', '=', 'fotografer')->get();
        return view('User.Fotografer.index', compact('fotografer'));
    }

    public function detailFotografer()
    {
        return view('User.Fotografer.detail');
    }

    public function indexTransaksi()
    {
        return view('User.Transaksi.index');
    }

    public function indexProfile()
    {
        return view('User.Saya.index');
    }
}
