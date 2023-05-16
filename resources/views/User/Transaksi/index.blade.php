@extends('Layouts.User.app', ['title' => 'Transaksi'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3 border-0 shadow">
                <div class="d-flex">
                    <p class="align-self-center mb-0 ms-2 fw-semibold" style="color: #4F5665; font-size:14px;">Transaksi
                    </p>
                    <a href="{{ route('saya.index') }}" class="ms-auto">
                        <img src="{{ asset('assets/img/user.png') }}" loading="lazy" width="30px">
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <p class="title text-center">Data Transaksi</p>
        </div>
    </div>
@endsection
