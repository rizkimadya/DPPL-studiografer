@extends('Layouts.User.app', ['title' => 'Halaman Registrasi Fotografer'])

@section('content')
    <div class="card-main">
        <p class="title mb-md-5 mb-4">Registrasi Fotografer</p>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email Agency</label>
                <div class="input-groups">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" id="email" name="email" placeholder="Masukkan email agency">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Agency/Fotografer</label>
                <div class="input-groups">
                    <i class="bi bi-person-vcard-fill"></i>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        placeholder="Masukkan nama agency/nama fotografer">
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
                <label for="surat_izin" class="form-label">Surat Izin Pendirian Usaha</label>
                <div class="input-groups">
                    <i class="bi bi-file-earmark-pdf-fill"></i>
                    <input type="file" id="surat_izin" name="surat_izin">
                </div>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Agency</label>
                <div class="input-groups">
                    <i class="bi bi-pin-map-fill"></i>
                    <input type="text" id="lokasi" name="lokasi"
                        placeholder="Masukkan link lokasi Studio/Fotografer">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-groups">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                </div>
            </div>
            <button class="btn btn-login w-100 mt-3">Daftar</button>
        </form>
    </div>
@endsection
