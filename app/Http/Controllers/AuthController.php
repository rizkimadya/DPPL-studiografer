<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PaketFoto;
use App\Models\Testimoni;
use App\Models\GaleriFoto;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function home()
    {
        $testimoni = Testimoni::all();
        $paketfoto = PaketFoto::latest()->take(3)->get();
        $momenFoto = GaleriFoto::all();
        return view('home', compact('testimoni', 'paketfoto', 'momenFoto'));
    }

    public function dashboard_admin()
    {
        return view('Admin.Dashboard.dashboard');
    }

    public function dashboard_fotografer()
    {
        return view('Fotografer.Dashboard.dashboard');
    }

    public function halaman_user()
    {
        $paketfoto = PaketFoto::latest()->take(4)->get();
        return view('User.Home.home', compact('paketfoto'));
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
    public function regisPenggunaAuth(Request $request)
    {
        $data = new User();

        $data->roles = $request->roles;
        $data->email = $request->email;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->no_wa = $request->no_wa;
        $data->password = Hash::make($request->password);

        $user = $data;

        $user->save();
        Alert::success('Sukses', 'Silahkan Login');
        return redirect('/login');
    }

    public function regisFotografer()
    {
        return view('Auth.regisFotografer');
    }
    public function regisFotograferAuth(Request $request)
    {
        $data = new User();

        $data->roles = $request->roles;
        $data->email = $request->email;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->no_wa = $request->no_wa;
        $data->password = Hash::make($request->password);
        $data->alamat = $request->alamat;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'fileLogo/';
            $file->move($tujuan_upload, $nama_file);
            $data->logo = $tujuan_upload . $nama_file;
        }

        if ($request->hasFile('surat_izin')) {
            $file = $request->file('surat_izin');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'fileSuratIzin/';
            $file->move($tujuan_upload, $nama_file);
            $data->surat_izin = $tujuan_upload . $nama_file;
        }

        $data->save();

        Alert::success('Sukses', 'Silahkan Login');
        return redirect('/login');
    }


    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->roles == 'admin') {
                return redirect()->route('dashboard-admin');
                return view('Admin.Dashboard.dashboard')->with('users', $request);
            } else {
                if (auth()->user()->roles == 'fotografer' && auth()->user()->is_verification == 1) {
                    return redirect()->route('dashboard-fotografer');
                    return view('Fotografer.Dashboard.dashboard')->with('users', $request);
                } else if (auth()->user()->roles == 'pengguna' && auth()->user()->is_verification == 1) {
                    return redirect()->route('halaman-user');
                    return view('User.Home.home')->with('users', $request);
                } else {
                    return back()->with('wait', 'akun anda belum di verifikasi oleh admin');
                }
            }
        }
        return back()->withErrors([
            'password' => 'Email atau Password anda salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
