@extends('Layouts.Admin.app', ['title' => 'Data Testimoni'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="mb-3">
                    <label for="fotografer_tujuan" class="form-label subtitle">Fotografer Tujuan</label>
                    <input type="text" name="fotografer_tujuan" id="fotografer_tujuan" class="form-control"
                        value="{{ $testimoni->fotografer_tujuan }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="range" class="form-label subtitle">Penilaian</label>
                    <select name="range" id="range" class="form-control subtitle" disabled>
                        <option>{{ $testimoni->range }}</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="isi_testimoni" class="form-label">Isi Testimoni</label>
                    <textarea name="isi_testimoni" id="isi_testimoni" rows="3" class="form-control" disabled>{{ $testimoni->isi_testimoni }}</textarea>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <a href="{{ route('datatestimoni.index') }}" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
