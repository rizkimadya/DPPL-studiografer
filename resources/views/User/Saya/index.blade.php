@extends('Layouts.User.app', ['title' => 'Saya'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <p class="align-self-center mb-0 ms-2 fw-semibold" style="color: #4F5665; font-size:14px;">Profil
                    </p>
                    <a href="{{ route('logout') }}" class="ms-auto">
                        <i class='bx bx-power-off btn btn-danger'></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title mb-2 text-center">Data Akun</p>
            <div class="mb-3">
                <label class="form-label subtitle">Email</label>
                <div class="form-control subtitle">{{ auth()->user()->email }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label subtitle">Nama Lengkap</label>
                <div class="form-control subtitle">{{ auth()->user()->nama_lengkap }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label subtitle">Nomor Whatsapp</label>
                <div class="form-control subtitle">{{ auth()->user()->no_wa }}</div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title mb-2 text-center">Testimoni</p>
            <form action="" method="POST">
                @csrf
                <input type="text" hidden value="{{ auth()->user()->nama_lengkap }}">
                <div class="mb-3">
                    <label for="studio_tujuan" class="form-label subtitle">Studio Tujuan</label>
                    <input type="text" name="studio_tujuan" id="studio_tujuan" class="form-control border subtitle"
                        style="padding: .375rem .75rem; border-radius: .375rem;" placeholder="Masukkan Studio Tujuan">
                </div>
                <div class="mb-3">
                    <label for="range" class="form-label subtitle">Studio Tujuan</label>
                    <select name="range" id="range" class="form-control subtitle">
                        <option selected disabled hidden>Range Nilai</option>
                        <option value="1,0">1,0</option>
                        <option value="1,5">1,5</option>
                        <option value="2,0">2,0</option>
                        <option value="2,5">2,5</option>
                        <option value="3,0">3,0</option>
                        <option value="3,5">3,5</option>
                        <option value="4,0">4,0</option>
                        <option value="4,5">4,5</option>
                        <option value="5,0">5,0</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="isi-testimoni" class="form-label">Isi Testimoni</label>
                    <textarea name="isi-testimoni" id="isi-testimoni" rows="3" class="form-control subtitle"
                        placeholder="Masukkan Isi Testimoni"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-login w-100 mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
