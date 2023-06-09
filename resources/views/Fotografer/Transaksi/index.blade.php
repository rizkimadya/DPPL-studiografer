@extends('Layouts.Fotografer.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-4 table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email Pelanggan</th>
                            <th>Nomor Pelanggan</th>
                            <th>Nama Paket Foto</th>
                            <th>Harga</th>
                            <th>Tanggal Booking</th>
                            <th>Jam Booking</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->email_user }}</td>
                                <td>{{ $item->no_telp_user }}</td>
                                <td>{{ $item->nama_paket }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jam }}</td>
                                <td class="text-center">{{ $item->status }}</td>
                                <td class="text-center">
                                    @if ($item->status != 'Sudah dibayar')
                                        <form action="/transaksifotografer/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="Sudah dibayar">

                                            <button type="submit" class="btn btn-primary btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi pembayaran?')">Konfirmasi
                                                Pembayaran</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
