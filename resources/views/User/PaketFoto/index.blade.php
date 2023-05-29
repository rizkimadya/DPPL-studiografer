@extends('Layouts.User.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <input type="text" placeholder="Search Paket Foto....." class="w-100"
                        style="border: none; outline:none; font-size:14px;">
                    <button class="btn btn-cari ms-auto pb-0 pt-1 px-2" style="background-color: #8EA3F6;"><i
                            class='bx bx-search-alt text-light'></i></button>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title">Paket Foto</p>
            <p class="subtitle">Pilih Sesuai Keinginan Anda</p>
        </div>

        @foreach ($paketfoto as $item)
            <div class="col-6 mb-md-4 mb-3">
                <div class="card-user text-center">
                    <img src="/gambarPaketFoto/{{ $item->gambar }}" alt="" width="100%" lazy="load">
                    <p class="title-paket-foto">{{ $item->nama_paket }}</p>
                    <p class="harga-paket">Rp {{ number_format($item->harga_paket, 0, ',', '.') }}</p>
                    <a href="{{ route('paketfoto.detail') }}" class="btn btn-detail">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
