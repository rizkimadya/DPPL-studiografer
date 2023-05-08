<?php

namespace App\Http\Controllers;

use App\Models\PaketFoto;
use Illuminate\Http\Request;

class PaketFotoController extends Controller
{
    public function indexAdmin()
    {
        // $paketfoto = PaketFoto::all();
        // return view('Admin.PaketFoto.index', compact('paketfoto'));
        return view('Admin.PaketFoto.index');
    }

    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function show(PaketFoto $paketFoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketFoto $paketFoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketFoto $paketFoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketFoto  $paketFoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketFoto $paketFoto)
    {
        //
    }
}
