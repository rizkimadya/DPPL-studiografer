@extends('Layouts.Fotografer.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="{{ route('paketfotografer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        </div>
                        <input type="hidden" name="nama_fotografer" value="{{ auth()->user()->nama_lengkap }}">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_paket" class="form-label">Nama Paket</label>
                                <input type="text" name="nama_paket" class="form-control" id="nama_paket"
                                    placeholder="Masukkan Nama Paket">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="harga_paket" class="form-label">Harga Paket</label>
                                <input type="number" name="harga_paket" class="form-control" id="harga_paket"
                                    placeholder="Masukkan Harga Paket">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="ket_paket" class="form-label">Keterangan Paket</label>
                                <textarea name="ket_paket" id="ket_paket" class="form-control" rows="10" placeholder="Masukkan Keterangan Paket"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('paketfotografer.index') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
