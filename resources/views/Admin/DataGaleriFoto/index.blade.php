@extends('Layouts.Admin.app', ['title' => 'Data Galeri'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Fotografer/Studio</th>
                            <th>Tempat Publish</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeriFoto as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_fotografer }}</td>
                                <td>{{ $item->publis }}</td>
                                <td> <img src="/datagaleriFoto/{{ $item->gambar }}" alt="" height="60px"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
