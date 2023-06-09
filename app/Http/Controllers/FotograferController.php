<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

        // Hapus gambar pertama jika ada
        if (File::exists(public_path('fileLogo/' . $user->logo))) {
            File::delete(public_path('fileLogo/' . $user->logo));
        }

        // Hapus gambar kedua jika ada
        if (File::exists(public_path('fileSuratIzin/' . $user->surat_izin))) {
            File::delete(public_path('fileSuratIzin/' . $user->surat_izin));
        }

        $user->delete();

        Alert::success('Sukses', 'Data Berhasil dihapus');
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
