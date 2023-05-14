@extends('Layouts.User.app', ['title' => 'Pilihan Registrasi'])

@section('content')
    <div class="">
        <p class="title">Halaman Registrasi</p>

        <img loading="lazy" class="d-block my-5 mx-auto" src="{{ asset('assets/img/img-login.png') }}" alt=""
            width="290px">
        <div class="text-center btn-pilihan">
            <a href="{{ route('regis.fotografer') }}" class="btn btn-daftar">Daftar Sebagai Fotografer</a>
            <i class="d-block">Atau</i>
            <a href="{{ route('regis.pengguna') }}" class="btn btn-daftar">Daftar Sebagai Pengguna</a>
        </div>
    </div>
@endsection
