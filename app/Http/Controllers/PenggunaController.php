<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function indexAdmin()
    {
        $user = User::where('roles', '=', 'pengguna')->get();
        return view('Admin.DataPengguna.index', compact('user'));
    }

    public function lihatAdmin($id)
    {
        $user = User::find($id);
        return view('Admin.DataPengguna.lihat', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('datapengguna.index');
    }

    public function verifikasi_pengguna($id)
    {
        $user = User::findorfail($id);
        $user->update([
            "is_verification" => 1
        ]);
        return redirect()->route('datapengguna.index');
    }
}
