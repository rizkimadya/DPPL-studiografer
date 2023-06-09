@extends('Layouts.Admin.app', ['title' => 'Data Testimoni'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Fotografer Tujuan</th>
                            <th>Bintang</th>
                            <th>Isi Testimoni</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimoni as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_user }}</td>
                                <td>{{ $item->fotografer_tujuan }}</td>
                                <td>{{ $item->range }}</td>
                                <td>{{ Str::limit($item->isi_testimoni, '20') }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/datatestimoni/show/{{ $item->id }}" class="btn btn-primary btn-sm">Lihat
                                        </a>
                                        <form action="/datatestimoni/{{ $item->id }}" method="post">
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
