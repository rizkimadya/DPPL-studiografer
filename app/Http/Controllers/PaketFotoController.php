<?php

namespace App\Http\Controllers;

use App\Models\PaketFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PaketFotoController extends Controller
{
    public function indexAdmin()
    {
        $paketfoto = PaketFoto::all();
        return view('Admin.PaketFoto.index', compact('paketfoto'));
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $paketfoto = PaketFoto::where('user_id', '=', $user_id)->get();
        return view('Fotografer.PaketFoto.index', compact('paketfoto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Fotografer.PaketFoto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => "required",
            'gambar' => 'required|mimes:jpeg,png,jpg,svg|max:5000',
            'nama_fotografer' => "required",
            'nama_paket' => 'required',
            'harga_paket' => 'required',
            'ket_paket' => 'required',
        ]);


        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambarPaketFoto/';
            $file->move($tujuan_upload, $nama_file);

            $paketFoto = new PaketFoto([
                'user_id' => $request->user_id,
                'gambar' => $nama_file,
                'nama_fotografer' => $request->nama_fotografer,
                'nama_paket' => $request->nama_paket,
                'harga_paket' => $request->harga_paket,
                'ket_paket' => $request->ket_paket,
            ]);

            $paketFoto->save();
        }

        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect('paketfotografer');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paketFoto = PaketFoto::where('id', $id)->firstOrFail();
        return view('Fotografer.PaketFoto.show', compact('paketFoto'));
    }

    public function showAdmin($id)
    {
        $paketFoto = PaketFoto::where('id', $id)->firstOrFail();
        return view('Admin.PaketFoto.show', compact('paketFoto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paketFoto = PaketFoto::where('id', $id)->firstOrFail();
        return view('Fotografer.PaketFoto.edit', compact('paketFoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paketFoto = PaketFoto::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('gambar')) {
            // Hapus gambar lama
            if (File::exists(public_path('gambarPaketFoto/' . $paketFoto->gambar))) {
                File::delete(public_path('gambarPaketFoto/' . $paketFoto->gambar));
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'gambarPaketFoto/';
            $file->move($tujuan_upload, $nama_file);
            $data['gambar'] = "$nama_file";
        } else {
            unset($data['gambar']);
        }

        $paketFoto->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate');
        return redirect('paketfotografer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paketFoto = PaketFoto::find($id);

        // hapus gambar
        if (File::exists(public_path('gambarPaketFoto/' . $paketFoto->gambar))) {
            File::delete(public_path('gambarPaketFoto/' . $paketFoto->gambar));
        }

        $paketFoto->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('paketfotografer');
    }
}
