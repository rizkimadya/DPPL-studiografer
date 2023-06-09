<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function indexAdmin()
    {
        $transaksi = Transaksi::all();
        return view('Admin.DataTransaksi.index', compact('transaksi'));
    }

    public function index()
    {
        $transaksi = Transaksi::where('fotografer', '=', auth()->user()->nama_lengkap)->get();
        return view('Fotografer.Transaksi.index', compact('transaksi'));
    }

    public function store(Request $request)
    {
        $transaksi = new Transaksi();

        $transaksi->email_user = $request->email_user;
        $transaksi->no_telp_user = $request->no_telp_user;
        $transaksi->fotografer = $request->fotografer;
        $transaksi->no_fotografer = $request->no_fotografer;
        $transaksi->nama_paket = $request->nama_paket;
        $transaksi->harga = $request->harga;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->jam = $request->jam;
        $transaksi->status = $request->status;

        $transaksi->save();
        Alert::success('Sukses', 'Berhasil melakukan booking');
        return redirect('/transaksi');
    }


    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::where('id', $id)->firstOrFail();
        $transaksi->status = $request->status;

        $transaksi->save();

        Alert::success('Sukses', 'Berhasil mengupdate data transaksi');
        return redirect('/transaksifotografer');
    }
}
