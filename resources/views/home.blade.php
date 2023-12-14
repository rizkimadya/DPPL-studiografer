<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studiografer.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
</head>


<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top py-3 bg-white" style="box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.25);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="" height="34px" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paket">Paket Foto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#momen">Momen Foto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex gap-3">
                    <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- beranda --}}
    <section id="beranda">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center order-md-0 order-2">
                    <p class="title">Layanan Booking Fotografer dan Studio Foto
                    </p>
                    <p class="subtitle">Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah,
                        bahkan ketika orang-orang yang ada di dalamnya sudah berubah</p>
                    <a href="{{ route('pilihan.regis') }}" class="btn btn-daftar">Daftar Sekarang</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bgheroo.png') }}" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>


    {{-- tentang --}}
    <section id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="title">Tentang</p>
                    <p class="subtitle">Apa itu Studio Grafer</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/bgabout.png') }}" alt="" width="100%" loading="lazy">
                </div>
                <div class="col-md-6">
                    <p class="keterangan"> <span class="fw-semibold">Studiografer</span> merupakan sebuah platform
                        website yang berorientasi pada bidang
                        atau layanan studio foto dan fotografer yang akan mempermudah kita dalam melakukan pemesanan
                        (booking), bukan hanya itu saja di studiografer anda dapat mendaftar sebagai fotografer atau
                        studio foto sehingga anda dapat menjual jasa foto anda.</p>
                    <div class="isi">
                        <div class="d-flex gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <p class="mb-0 align-self-center">Foto Wisuda</p>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <p class="mb-0 align-self-center">Foto Pernikahan</p>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <p class="mb-0 align-self-center">Foto Studio</p>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <p class="mb-0 align-self-center">Event dan lain-lain</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- paket foto --}}
    <section id="paket">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="title">Paket Foto</p>
                    <p class="subtitle">Beberapa paket yang disediakan studiografer</p>
                </div>
            </div>

            <div class="row mt-5">
                @foreach ($paketfoto as $item)
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="card p-3">
                            <img src="/gambarPaketFoto/{{ $item->gambar }}" alt="">
                            <p class="jenis-paket">{{ $item->nama_paket }}</p>
                            <p class="harga-paket">Rp
                                {{ number_format($item->harga_paket, 0, ',', '.') }}</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-detail" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $item->id }}">
                                Lihat Detail
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Fotografer</label>
                                                <input type="text" disabled class="form-control"
                                                    value="{{ $item->nama_fotografer }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nomor Fotografer</label>
                                                <input type="text" disabled class="form-control"
                                                    value="{{ $item->no_fotografer }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Paket</label>
                                                <input type="text" disabled class="form-control"
                                                    value="{{ $item->nama_paket }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Harga Paket</label>
                                                <input type="text" disabled class="form-control"
                                                    value="Rp {{ number_format($item->harga_paket, 0, ',', '.') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Keterangan Paket</label>
                                                <div class="d-flex">
                                                    <i class='bx bx-badge-check text-success mt-1 me-1'></i>
                                                    <p class="subtitle mb-0 text-success">{{ $item->ket_paket }}
                                                    </p>
                                                </div>
                                                <a href="/paketfoto/detail/{{ $item->id }}"
                                                    class="btn btn-detail w-100">Pesan Paket</a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- momen foto --}}
    <section id="momen">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <p class="title">Momen Foto</p>
                    <p class="subtitle">Potretan momen foto dari studiografer</p>
                </div>
            </div>
            <div class="carousel" data-flickity='{ "groupCells": true }'>
                @foreach ($momenFoto as $item)
                    <div class="carousel-cell">
                        <img src="/datagaleriFoto/{{ $item->gambar }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- testimoni --}}
    <section id="testimoni">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <p class="title">Testimoni</p>
                    <p class="subtitle">Apa kata pengguna Studiografer</p>
                </div>
            </div>
            <div class="carousel" data-flickity='{ "groupCells": true }'>
                @foreach ($testimoni as $item)
                    <div class="carousel-cell">
                        <div class="card">
                            <div class="d-flex">
                                <img src="{{ asset('assets/img/bgheroo.png') }}" alt="">
                                <div class="ms-3 align-self-center mb-4">
                                    <p class="mb-0 nama">{{ $item->nama_user }}</p>
                                    <p class="studio mb-0">{{ $item->fotografer_tujuan }}</p>
                                </div>
                                <div class="ms-auto align-self-center d-flex">
                                    <p class="me-2">{{ $item->range }}</p>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                            </div>
                            <p>"{{ $item->isi_testimoni }}"</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- footer --}}
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p class="title">Studio Grafer</p>
                    <div>
                        <a href="#beranda" class="d-block mb-3"><i class="bi bi-house-door-fill me-1"></i>
                            Beranda</a>
                        <a href="#tentang" class="d-block mb-3"><i class="bi bi-dash-square-fill me-1"></i>
                            Tentang</a>
                        <a href="#paket" class="d-block mb-3"><i class="bi bi-camera-reels-fill me-1"></i> Paket
                            Foto</a>
                        <a href="#momen" class="d-block mb-3"><i class="bi bi-telegram me-1"></i> Momen Foto</a>
                        <a href="#testimoni" class="d-block mb-3"><i class="bi bi-quote"></i> Testimoni</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="title">Sosial Media</p>
                    <div>
                        <a href="https://www.instagram.com/studiografer.id/" class="d-block mb-3"><i
                                class="bi bi-instagram me-1"></i>
                            Studiografer.id</a>
                        {{-- <a href="" class="d-block mb-3"><i class="bi bi-envelope me-1"></i>
                            Email@gmail.com</a> --}}
                        <a href="#" class="d-block mb-3"><i class="bi bi-whatsapp me-1"></i> +628236831592</a>
                        <a href="https://www.facebook.com/profile.php?id=100093373329143&mibextid=LQQJ4d"
                            class="d-block mb-3"><i class="bi bi-facebook me-1"></i> StudioGrafer</a>
                        {{-- <a href="" class="d-block mb-3"><i class="bi bi-twitter me-1"></i>
                            Studiografer.ac.id</a> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="title">Lokasi</p>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7946.745873946761!2d119.49924378068847!3d-5.203940931052616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3af7c88b9df%3A0xfb25811c623366e5!2skampus%202%20UIN%20SAMATA!5e0!3m2!1sid!2sid!4v1681450470846!5m2!1sid!2sid"
                            width="100%" height="180" style="border:0; border-radius:8px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <hr style="color: #8ea3f6;">
                    <p class="text-center copyright">
                        <i class="bi bi-c-circle"> Studio Grafer 2023</i>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
