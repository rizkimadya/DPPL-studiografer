<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('Admin.Testimoni.index', compact('testimoni'));
    }

    public function store(Request $request)
    {
        $request->all();
        $testimoni = new Testimoni();

        $testimoni->nama_user = auth()->user()->nama_lengkap;
        $testimoni->fotografer_tujuan = $request->fotografer_tujuan;
        $testimoni->range = $request->range;
        $testimoni->isi_testimoni = $request->isi_testimoni;

        $testimoni->save();
        return redirect('saya');
    }

    public function show($id)
    {
        $testimoni = Testimoni::find($id);
        return view('Admin.Testimoni.lihat', compact('testimoni'));
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect()->route('datatestimoni.index');
    }
}
