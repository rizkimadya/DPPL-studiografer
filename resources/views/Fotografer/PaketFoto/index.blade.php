@extends('Layouts.Fotografer.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <div class="ms-auto mb-3">
                    <a href="{{ route('paketfotografer.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket Foto</th>
                                <th>Harga</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paketfoto as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_paket }}</td>
                                    <td>{{ $item->harga_paket }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="/paketfotografer/edit/{{ $item->id }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <a href="/paketfotografer/show/{{ $item->id }}"
                                                class="btn btn-sm btn-info">Lihat</a>
                                            <form action="/paketfotografer/{{ $item->id }}" method="post">
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
    </div>
@endsection
