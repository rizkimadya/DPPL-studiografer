@extends('Layouts.User.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <p class="align-self-center mb-0 ms-2 fw-semibold" style="color: #4F5665; font-size:14px;">Transaksi
                    </p>
                    <a href="{{ route('saya.index') }}" class="ms-auto">
                        <img src="{{ asset('assets/img/user.png') }}" loading="lazy" width="30px">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title text-center mb-4">Data Transaksi</p>
            @foreach ($transaksi as $item)
                <div class="card p-md-4 mb-3 p-2 bg-success border-0">
                    <p class="text-white">{{ $item->nama_paket }}</p>
                    <div class="row text-white">
                        <div class="col-6">
                            <p class="mb-1">Harga</p>
                            <p class="mb-1">Tanggal Booking</p>
                            <p class="mb-1">Jam Booking</p>
                            <p class="mb-1">Status</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-1">{{ $item->harga }}</p>
                            <p class="mb-1">{{ $item->tanggal }}</p>
                            <p class="mb-1">{{ $item->jam }}</p>
                            <p class="mb-1">{{ $item->status }}</p>
                        </div>
                        <div class="col-12 mt-2">
                            <a href="https://api.whatsapp.com/send?phone=62{{ substr($item->no_fotografer, 1) }}&text=Halo%20saya%20ingin%20membuat%20booking%20Paket%20{{ $item->nama_paket }}%20dengan%20detail%20sebagai%20berikut%3A%0AHarga%3A%20{{ $item->harga }}%0ATanggal%20Booking%3A%20{{ $item->tanggal }}%0AJam%20Booking%3A%20{{ $item->jam }}"
                                class="btn btn-light w-100 text-success fw-semibold">Hubungi Fotografer</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
