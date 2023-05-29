<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FotograferController extends Controller
{
    public function indexAdmin()
    {
        $user = User::where('roles', '=', 'fotografer')->get();
        return view('Admin.DataFotografer.index', compact('user'));
    }

    public function lihatAdmin($id)
    {
        $user = User::find($id);
        return view('Admin.DataFotografer.lihat', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('datafotografer.index');
    }

    public function verifikasi_fotografer($id)
    {
        $user = User::findorfail($id);
        $user->update([
            "is_verification" => 1
        ]);
        Alert::success('Sukses', 'Verifikasi Berhasil');
        return redirect()->route('datafotografer.index');
    }
}
