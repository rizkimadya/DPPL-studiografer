@extends('Layouts.Admin.app', ['title' => 'Data Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Agency</th>
                            <th>Nama Paket Foto</th>
                            <th>Harga</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->fotografer }}</td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>{{ $item->harga }}</td>
                                <td class="text-center">{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
