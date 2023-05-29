@extends('Layouts.User.app', ['title' => 'Fotografer'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <input type="text" placeholder="Search Fotografer....." class="w-100"
                        style="border: none; outline:none; font-size:14px;">
                    <button class="btn btn-cari ms-auto pb-0 pt-1 px-2" style="background-color: #8EA3F6;"><i
                            class='bx bx-search-alt text-light'></i></button>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title">Fotografer</p>
            <p class="subtitle">Booking segera fotografer anda</p>
        </div>

        @foreach ($fotografer as $item)
            <div class="col-6 mb-md-4 mb-3">
                <div class="card-user text-center">
                    <img src="/storage/{{ $item->logo }}" alt="" width="100%" />
                    <p class="title-paket-foto">{{ $item->nama_lengkap }}</p>
                    <p class="harga-paket">{{ $item->alamat }}</p>
                    <a href="{{ route('fotografer.detail') }}" class="btn btn-detail">Detail Fotografer</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
