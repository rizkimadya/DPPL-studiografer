@extends('Layouts.User.app', ['title' => 'Halaman Registrasi Pengguna'])

@section('content')
    <div class="card-main">
        <p class="title mb-md-5 mb-4">Registrasi Pengguna</p>

        <form action="{{ route('pengguna.auth') }}" method="POST">
            @csrf
            <input type="text" name="roles" value="pengguna" hidden>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-groups">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" id="email" name="email" placeholder="Masukkan email anda">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <div class="input-groups">
                    <i class="bi bi-person-vcard-fill"></i>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap">
                </div>
            </div>
            <div class="mb-3">
                <label for="no_wa" class="form-label">Nomor Whatsapp </label>
                <div class="input-groups">
                    <i class="bi bi-whatsapp"></i>
                    <input type="number" id="no_wa" name="no_wa" placeholder="Masukkan nomor whatsapp">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-groups">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                </div>
            </div>
            <button type="submit" class="btn btn-login w-100 mt-3">Daftar</button>
        </form>
    </div>
@endsection
