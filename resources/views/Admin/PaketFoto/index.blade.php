@extends('Layouts.Admin.app', ['title' => 'Data Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Fotografer</th>
                            <th>Nama Paket Foto</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paketfoto as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_fotografer }}</td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>{{ $item->harga_paket }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/datapaketfoto/show/{{ $item->id }}"
                                            class="btn btn-sm btn-info">Lihat</a>
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
