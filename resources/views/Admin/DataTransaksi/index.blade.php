@extends('Layouts.Admin.app', ['title' => 'Data Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <table class="table table-responsive" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Agency</th>
                            <th>Nama Paket Foto</th>
                            <th>Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
