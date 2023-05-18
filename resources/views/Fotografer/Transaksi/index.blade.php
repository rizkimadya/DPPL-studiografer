@extends('Layouts.Fotografer.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <table class="table table-responsive" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Transaksi</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
