@extends('layouts.user.app', ['title' => 'Home'])

@section('content')
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="title">Memories your create, and
                        <span>we capture</span>
                    </p>
                    <p class="subtitle">Lorem ipsum dolor sit amet consectetur. Gravida urna mauris nibh lorem donec
                        adipiscing
                        cras et egestas.
                        Eu turpis cursus vitae massa amet. </p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari ..."
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text btn btn-cari" id="basic-addon2">Cari <i class="bi bi-search ms-2"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bghero.svg') }}" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
@endsection
