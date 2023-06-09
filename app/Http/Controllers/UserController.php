<?php

namespace App\Http\Controllers;

use App\Models\PaketFoto;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexPaket()
    {
        $paketfoto = PaketFoto::latest()->get();
        return view('User.PaketFoto.index', compact('paketfoto'));
    }

    public function detailPaket($id)
    {
        $paketFoto = PaketFoto::where('id', $id)->firstOrFail();
        return view('User.PaketFoto.detail', compact('paketFoto'));
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
        $transaksi = Transaksi::where('email_user', auth()->user()->email)->latest()->get();
        return view('User.Transaksi.index', compact('transaksi'));
    }

    public function indexProfile()
    {
        return view('User.Saya.index');
    }
}
