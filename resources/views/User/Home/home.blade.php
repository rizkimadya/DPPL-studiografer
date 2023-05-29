@extends('Layouts.User.app', ['title' => 'Home'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <img src="{{ asset('assets/img/iconHy.png') }}" loading="lazy" width="20px" height="20px"
                        class="align-self-center">
                    <p class="align-self-center mb-0 ms-2" style="color: #4F5665; font-size:14px;">Hi,
                        {{ auth()->user()->nama_lengkap }}</p>
                    <a href="{{ route('saya.index') }}" class="ms-auto">
                        <img src="{{ asset('assets/img/user.png') }}" loading="lazy" width="30px">
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-4 mb-3">
            <p class="title mb-1">Selamat datang,</p>
            <p class="subtitle">Di Studio Grafer Layanan Untuk Mencari Fotografer dan Studio
                Foto sesuai keinginan anda, dan dapatkan promo nya disini</p>
        </div>


        <div class="col-4">
            <div class="card-user">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket">Paket Pernikahan</p>
            </div>
        </div>
        <div class="col-4">
            <div class="card-user">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket">Paket Wisuda</p>
            </div>
        </div>
        <div class="col-4">
            <div class="card-user">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket">Paket Keluarga</p>
            </div>
        </div>


        <div class="mt-5 mb-3">
            <p class="title">Paket Foto</p>
            <div class="d-flex">
                <p class="subtitle">Pilihan Paket Foto</p>
                <a href="#" class="ms-auto lihat">Lihat Semua<i class='bx bx-right-arrow-alt ms-1'></i></a>
            </div>
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
