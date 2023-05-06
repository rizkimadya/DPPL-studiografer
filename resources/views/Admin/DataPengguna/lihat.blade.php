@extends('Layouts.Admin.app', ['title' => 'Data Pengguna'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" disabled type="text" id="email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama</label>
                    <input class="form-control" disabled type="text" id="nama_lengkap" value="{{ $user->nama_lengkap }}">
                </div>
                <div class="mb-3">
                    <label for="no_wa" class="form-label">Nomor Whatsapp</label>
                    <input class="form-control" disabled type="number" id="no_wa" value="{{ $user->no_wa }}">
                </div>
                <div class="mb-3 d-flex justify-content-end gap-3">
                    <a href="{{ route('datapengguna.index') }}" class="btn btn-danger">Kembali</a>
                    <a href="{{ '/verifikasi_pengguna/' . $user->id }}" class="btn btn-success">Verifikasi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
