@extends('Layouts.User.app', ['title' => 'Halaman Login'])

@section('content')
    <div class="">
        <p class="title">Selamat datang,</p>
        <p class="subtitle">Masuk dan pilih paket foto sesuai keinginan anda</p>

        <img loading="lazy" class="d-block mx-auto my-4" src="{{ asset('assets/img/img-login.png') }}" alt=""
            width="290px">

        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if (session('wait'))
            <p class="alert alert-danger">{{ session('wait') }}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif

        <form action="{{ route('login.auth') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-groups">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" id="email" name="email" placeholder="Masukkan email anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-groups">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                </div>
            </div>
            <button class="btn btn-login d-block ms-auto">Login</button>
        </form>

        <p class="text-daftar">Belum punya akun?
            <a href="{{ route('pilihan.regis') }}">Daftar</a>
        </p>
    </div>
@endsection
