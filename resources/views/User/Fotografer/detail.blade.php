@extends('Layouts.User.app', ['title' => 'Fotografer'])

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="title">Profil Fotografer</p>
            <p class="subtitle">Alamat Fotografer</p>
            <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="60%" class="mx-auto d-flex"
                lazy="load">
        </div>

        <div class="col-12 mt-4">
            <p class="title">Paket Fotografer</p>
            <p class="subtitle">Berikut Paket fotografer yang ditawarkan nama fotografer</p>
        </div>

        <div class="col-6 mb-md-4 mb-3">
            <div class="card-user text-center">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket-foto">Paket Pernikahan</p>
                <p class="harga-paket">Rp. 100.000</p>
                <a href="" class="btn btn-detail">Lihat Detail</a>
            </div>
        </div>
        <div class="col-6 mb-md-4 mb-3">
            <div class="card-user text-center">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket-foto">Paket Wisuda</p>
                <p class="harga-paket">Rp. 100.000</p>
                <a href="" class="btn btn-detail">Lihat Detail</a>
            </div>
        </div>
        <div class="col-6 mb-md-4 mb-3">
            <div class="card-user text-center">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="100%" lazy="load">
                <p class="title-paket-foto">Paket Wisuda</p>
                <p class="harga-paket">Rp. 100.000</p>
                <a href="" class="btn btn-detail">Lihat Detail</a>
            </div>
        </div>
    </div>
@endsection
