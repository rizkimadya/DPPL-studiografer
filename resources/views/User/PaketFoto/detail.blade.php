@extends('Layouts.User.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="title">Nama Paket</p>
            <p class="subtitle">Nama Studio atau Fotografer</p>
        </div>

        <div class="col-12">
            <div class="card p-md-4 p-3">
                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" width="60%" class="mx-auto pb-2"
                    lazy="load">
                <p class="title text-center mb-2">Include</p>
                <div class="d-flex mx-auto">
                    <i class='bx bx-badge-check text-success align-self-center me-1'></i>
                    <p class="subtitle mb-0 text-success">keterangan yang didapat</p>
                </div>
                <div class="d-flex mx-auto">
                    <i class='bx bx-badge-check text-success align-self-center me-1'></i>
                    <p class="subtitle mb-0 text-success">keterangan yang sdsd didapat</p>
                </div>

                <form action="" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Pilih Tanggal Booking</label>
                        <div class="input-groups">
                            <input type="date" id="tanggal" name="tanggal">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jam" class="form-label">Pilih Jam Booking</label>
                        <div class="input-groups">
                            <input type="time" id="jam" name="jam">
                        </div>
                    </div>
                    <button class="btn btn-login w-100">Booking</button>
                </form>
            </div>
        </div>
    </div>
@endsection
