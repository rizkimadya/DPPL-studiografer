@extends('Layouts.Admin.app', ['title' => 'Data Pengguna'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email Pengguna</th>
                            <th>Nama</th>
                            <th>No WA</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->no_wa }}</td>
                                <td>
                                    <span class="text-success"
                                        {{ $item->is_verification == '1' ? '' : 'hidden' }}>Aktif</span>
                                    <span class="text-danger" {{ $item->is_verification == '0' ? '' : 'hidden' }}>Tidak
                                        Aktif</span>
                                </td>
                                <td class="d-flex justify-content-center gap-1">
                                    <a href="/datapengguna/show/{{ $item->id }}" class="btn btn-primary btn-sm">Lihat
                                    </a>

                                    <form action="/datapengguna/{{ $item->id }}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
