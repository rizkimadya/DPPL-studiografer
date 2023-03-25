@extends('layouts.user.app', ['title' => 'Home'])

@section('content')
    <section id="home">
        <div class="container">
            <div class="row hero">
                <div class="col-md-6">
                    <p class="title">Memories your create, and
                        <span>we capture</span>
                    </p>
                    <p class="subtitle">Lorem ipsum dolor sit amet consectetur. Gravida urna mauris nibh lorem donec
                        adipiscing
                        cras et egestas.
                        Eu turpis cursus vitae massa amet. </p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari ..." aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text btn btn-cari" id="basic-addon2">Cari <i
                                class="bi bi-search ms-2"></i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bghero.svg') }}" alt="" width="100%">
                </div>
            </div>

            {{-- jumlah --}}
            <div class="row jumlah">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4 bor">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/user.png') }}" alt="">
                                    <div class="align-self-center ms-4">
                                        <p class="angka">90+</p>
                                        <p class="keterangan">Pengguna</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 bor">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/studiofoto.png') }}" alt="">
                                    <div class="align-self-center ms-4">
                                        <p class="angka">30+</p>
                                        <p class="keterangan">Studio Foto</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/img/fotografer.png') }}" alt="">
                                    <div class="align-self-center ms-4">
                                        <p class="angka">50+</p>
                                        <p class="keterangan">Fotografer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- about --}}
            <div class="row about">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bgabout.png') }}" alt="" width="100%">
                </div>
                <div class="col-md-6">
                    <p class="title">We Provide Many Picture You Can Memories</p>
                    <p class="subtitle">Photograf adalah cara untuk mengabadikan perasaan, sentuhan cinta.Apa yang telah
                        tertangkap di foto
                        akan abadi selamanya.Ini akan mengingatkan hal-hal kecil, ketika setelah Anda melupakan segalanya
                        <br> <br>
                        Dengan Pelayanan Meliputi:
                    </p>
                    <div class="layanan">
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <p class="mb-0 ms-2">Studio Photo Retail.</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <p class="mb-0 ms-2">Wedding Photography.</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <p class="mb-0 ms-2">Corporate Event Document.</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <p class="mb-0 ms-2">Exclusive Frame.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- paket --}}
        <div class="paket">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="title">Packet Photography</p>
                        <p class="subtitle">Let's choose the package that is best for you and explore it happily and <br>
                            cheerfully.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
