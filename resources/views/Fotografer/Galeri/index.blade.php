@extends('Layouts.Fotografer.app', ['title' => 'Galeri Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="ms-auto mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Data</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="d-flex mb-4">
                                        <h4 class="modal-title" id="exampleModalLabel">Form Tambah Data</h4>
                                        <button type="button" class="close ml-auto" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_fotografer" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="nama_fotografer"
                                            value="{{ auth()->user()->nama_lengkap }}">
                                        <div class="mb-3">
                                            <label for="gambar" class="form-label">Gambar</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control"
                                                required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tampilkan Gambar di</label>
                                            <select class="form-select" name="publis" aria-label="Default select example">
                                                <option selected>Pilih</option>
                                                <option value="beranda">Beranda</option>
                                                <option value="profil">Profil</option>
                                            </select>
                                        </div>

                                        <div class="mb-2 d-flex justify-content-end">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-responsive" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Tempat Publish</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeriFoto as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="/datagaleriFoto/{{ $item->gambar }}" alt="" height="60px">
                                </td>
                                <td>{{ $item->publis }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/galerifoto/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <form action="/galerifoto/{{ $item->id }}" method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
