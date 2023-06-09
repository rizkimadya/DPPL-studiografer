@extends('Layouts.Admin.app', ['title' => 'Data Fotografer'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" disabled type="text" id="email"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Agency</label>
                                <input class="form-control" disabled type="text" id="nama_lengkap"
                                    value="{{ $user->nama_lengkap }}">
                            </div>
                            <div class="mb-3">
                                <label for="no_wa" class="form-label">Nomor Whatsapp</label>
                                <input class="form-control" disabled type="number" id="no_wa"
                                    value="{{ $user->no_wa }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="surat_izin" class="form-label">Surat Izin</label>
                                <button type="button" class="btn btn-info form-control" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Lihat Foto
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="/{{ $user->surat_izin }}" width="100%" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto_barang" class="form-label">Logo Agency</label>
                                <button type="button" class="btn btn-info form-control" data-toggle="modal"
                                    data-target="#exampleModal2">
                                    Lihat Foto
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="/{{ $user->logo }}" alt="" width="100%" />
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning"
                                                    data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-end gap-3">
                                <a href="{{ route('datafotografer.index') }}" class="btn btn-danger">Kembali</a>
                                <a href="{{ '/verifikasi_fotografer/' . $user->id }}" class="btn btn-success">Verifikasi</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
