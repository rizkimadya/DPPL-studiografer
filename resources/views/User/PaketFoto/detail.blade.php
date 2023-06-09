@extends('Layouts.User.app', ['title' => 'Paket Foto'])

@section('content')
    <div class="row">
        <div class="col-12">
            <p class="title">{{ $paketFoto->nama_paket }}</p>
            <p class="subtitle">Studio {{ $paketFoto->nama_fotografer }}</p>
        </div>

        <div class="col-12">
            <div class="card p-md-4 p-3">
                <img src="/gambarPaketFoto/{{ $paketFoto->gambar }}" alt="" width="60%" class="mx-auto pb-2"
                    lazy="load">
                <div class="d-flex mb-3">
                    <p class="title">Include</p>
                    <p class="title text-danger ms-auto">
                        {{ 'Rp ' . number_format($paketFoto->harga_paket, 0, ',', '.') }}</p>
                </div>
                <div class="d-flex">
                    <i class='bx bx-badge-check text-success mt-1 me-1'></i>
                    <p class="subtitle mb-0 text-success">{{ $paketFoto->ket_paket }}</p>
                </div>

                <form action="{{ route('transaksi.store') }}" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="email_user" value="{{ auth()->user()->email }}">
                    <input type="hidden" name="no_telp_user" value="{{ auth()->user()->no_wa }}">
                    <input type="hidden" name="fotografer" value="{{ $paketFoto->nama_fotografer }}">
                    <input type="hidden" name="no_fotografer" value="{{ $paketFoto->no_fotografer }}">
                    <input type="hidden" name="nama_paket" value="{{ $paketFoto->nama_paket }}">
                    <input type="hidden" name="harga"
                        value="{{ 'Rp ' . number_format($paketFoto->harga_paket, 0, ',', '.') }}">
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
                    <input type="hidden" name="status" value="Belum dibayar">
                    <button class="btn btn-login w-100">Booking</button>
                </form>
            </div>
        </div>
    </div>
@endsection
