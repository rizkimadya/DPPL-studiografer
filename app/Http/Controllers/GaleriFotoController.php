<?php

namespace App\Http\Controllers;

use App\Models\GaleriFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $galeriFoto = GaleriFoto::all();
        return view('Admin.DataGaleriFoto.index', compact('galeriFoto'));
    }

    public function index()
    {
        $id = Auth::user()->id;
        $galeriFoto = GaleriFoto::where('id_fotografer', '=', $id)->get();
        return view('Fotografer.Galeri.index', compact('galeriFoto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('gambar')) {
            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'datagaleriFoto/';
            $file->move($tujuan_upload, $nama_file);

            $galeriFoto = new GaleriFoto([
                'id_fotografer' => $request->id_fotografer,
                'nama_fotografer' => $request->nama_fotografer,
                'gambar' => $nama_file,
                'publis' => $request->publis,
            ]);
        }

        $galeriFoto->save();
        Alert::success('Sukses', 'Data berhasil ditambahkan');
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GaleriFoto  $galeriFoto
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriFoto $galeriFoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GaleriFoto  $galeriFoto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeriFoto = GaleriFoto::where('id', $id)->firstOrFail();
        return view('Fotografer.Galeri.edit', compact('galeriFoto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GaleriFoto  $galeriFoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeriFoto = GaleriFoto::where('id', $id)->first();
        $data = $request->all();

        if ($request->has('gambar')) {
            // Hapus gambar lama
            if (File::exists(public_path('datagaleriFoto/' . $galeriFoto->gambar))) {
                File::delete(public_path('datagaleriFoto/' . $galeriFoto->gambar));
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'datagaleriFoto/';
            $file->move($tujuan_upload, $nama_file);
            $data['gambar'] = "$nama_file";
        } else {
            unset($data['gambar']);
        }

        $galeriFoto->update($data);
        Alert::success('Sukses', 'Data berhasil diupdate');
        return redirect('galerifoto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GaleriFoto  $galeriFoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeriFoto = GaleriFoto::find($id);

        // hapus gambar
        if (File::exists(public_path('datagaleriFoto/' . $galeriFoto->gambar))) {
            File::delete(public_path('datagaleriFoto/' . $galeriFoto->gambar));
        }

        $galeriFoto->delete();
        Alert::success('Sukses', 'Data berhasil dihapus');
        return redirect('galerifoto');
    }
}
