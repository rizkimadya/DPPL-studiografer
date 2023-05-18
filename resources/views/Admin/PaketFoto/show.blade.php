@extends('Layouts.Admin.app', ['title' => 'Data Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Gambar Lama</label>
                            <div>
                                <button class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal">
                                    Lihat Gambar</button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="d-flex mb-4">
                                                <h4 class="modal-title" id="exampleModalLabel">Gambar Lama</h4>
                                                <a href="#" class="close ml-auto" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                            </div>
                                            <img src="/gambarPaketFoto/{{ $paketFoto->gambar }}" alt=""
                                                width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Fotografer</label>
                            <input type="text" disabled class="form-control" value="{{ $paketFoto->nama_fotografer }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Paket</label>
                            <input type="text" disabled class="form-control" value="{{ $paketFoto->nama_paket }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Paket</label>
                            <input type="number" disabled class="form-control" value="{{ $paketFoto->harga_paket }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Keterangan Paket</label>
                            <textarea class="form-control" disabled rows="10">{{ $paketFoto->ket_paket }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('datapaketfoto.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
