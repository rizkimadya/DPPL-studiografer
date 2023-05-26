@extends('Layouts.Fotografer.app', ['title' => 'Galeri Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="{{ route('galeri.update', ['id' => $galeriFoto->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Lama</label>
                                <img src="/datagaleriFoto/{{ $galeriFoto->gambar }}" alt="" width="30%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tampilkan Gambar di</label>
                                <select class="form-select" name="publis" aria-label="Default select example">
                                    <option value="{{ $galeriFoto->publis }}">{{ $galeriFoto->publis }}</option>
                                    <option value="beranda">Beranda</option>
                                    <option value="profil">Profile</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
