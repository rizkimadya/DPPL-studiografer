<div class="fixed-bottom">
    {{-- kondisi layar besar --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="navbar">
                    <div class="isi-menu d-flex mx-auto">
                        <a href="{{ route('halaman-user') }}"
                            class="text-center nav-item {{ $title == 'Home' ? 'active' : '' }}">
                            <i class='bx bx-home'></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('paketfoto.index') }}"
                            class="text-center nav-item {{ $title == 'Paket Foto' ? 'active' : '' }}">
                            <i class='bx bx-aperture'></i>
                            <p class="mb-0" href="#">Paket Foto</p>
                        </a>
                        <a href="{{ route('fotografer.index') }}"
                            class="text-center nav-item {{ $title == 'Fotografer' ? 'active' : '' }}">
                            <i class='bx bx-camera'></i>
                            <p class="mb-0" href="#">Fotografer</p>
                        </a>
                        <a href="" class="text-center nav-item">
                            <i class='bx bx-wallet'></i>
                            <p class="mb-0" href="#">Transaksi</p>
                        </a>
                        <a href="" class="text-center nav-item">
                            <i class='bx bx-user'></i>
                            <p class="mb-0" href="#">Saya</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- kondisi layar kecil --}}
    <div class="mobile">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="navbar">
                    <div class="isi-menu d-flex mx-auto">
                        <a href="{{ route('halaman-user') }}"
                            class="text-center nav-item {{ $title == 'Home' ? 'active' : '' }}">
                            <i class='bx bx-home'></i>
                            <p class="mb-0" href="#">Home</p>
                        </a>
                        <a href="{{ route('paketfoto.index') }}"
                            class="text-center nav-item {{ $title == 'Paket Foto' ? 'active' : '' }}">
                            <i class='bx bx-aperture'></i>
                            <p class="mb-0" href="#">Paket Foto</p>
                        </a>
                        <a href="{{ route('fotografer.index') }}"
                            class="text-center nav-item {{ $title == 'Fotografer' ? 'active' : '' }}">
                            <i class='bx bx-camera'></i>
                            <p class="mb-0" href="#">Fotografer</p>
                        </a>
                        <a href="" class="text-center nav-item">
                            <i class='bx bx-wallet'></i>
                            <p class="mb-0" href="#">Transaksi</p>
                        </a>
                        <a href="" class="text-center nav-item">
                            <i class='bx bx-user'></i>
                            <p class="mb-0" href="#">Saya</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
