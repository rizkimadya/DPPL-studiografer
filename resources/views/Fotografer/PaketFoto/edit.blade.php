@extends('Layouts.Fotografer.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="{{ route('paketfotografer.update', ['id' => $paketFoto->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" id="gambar">
                            </div>
                            <div class="mb-3">
                                <label for="nama_paket" class="form-label">Nama Paket</label>
                                <input type="text" name="nama_paket" class="form-control" id="nama_paket"
                                    value="{{ $paketFoto->nama_paket }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Gambar Lama</label>
                                <div>
                                    <a href="#" class="btn btn-primary w-100" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Lihat Gambar</a>
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
                                <label for="harga_paket" class="form-label">Harga Paket</label>
                                <input type="number" name="harga_paket" class="form-control" id="harga_paket"
                                    value="{{ $paketFoto->harga_paket }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label id="ket_paket" class="form-label">Keterangan Paket</label>
                                <textarea class="form-control" name="ket_paket" id="ket_paket" rows="10">{{ $paketFoto->ket_paket }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('paketfotografer.index') }}" class="btn btn-danger">Kembali</a>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
