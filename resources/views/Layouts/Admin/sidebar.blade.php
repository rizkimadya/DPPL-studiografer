 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
     <div class="container-fluid">
         <!-- Toggler -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
             aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <!-- Brand -->
         <a class="navbar-brand pt-0 " href="#">
             <img src="{{ asset('assets/img/logo.svg') }}" class="navbar-brand-img" alt="...">
         </a>
         <!-- User -->
         <ul class="nav align-items-center d-md-none">
             <li class="nav-item dropdown">
                 <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false">
                     <div class="media align-items-center">
                         <span class="avatar avatar-sm rounded-circle">
                             <img alt="Image placeholder" src="{{ asset('assets/img/teacher.png') }}">
                         </span>
                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                     <div class=" dropdown-header noti-title">
                         <h6 class="text-overflow m-0">Welcome!</h6>
                     </div>
                     <div class="dropdown-divider"></div>
                     <a href="{{ route('logout') }}" class="dropdown-item">
                         <i class="ni ni-user-run"></i>
                         <span>Logout</span>
                     </a>
                 </div>
             </li>
         </ul>
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
             <!-- Collapse header -->
             <div class="navbar-collapse-header d-md-none">
                 <div class="row">
                     <div class="col-6 collapse-brand">
                         <a href="#">
                             <img src="{{ asset('assets/img/logos.png') }}" class="navbar-brand-img" alt="...">
                         </a>
                     </div>
                     <div class="col-6 collapse-close">
                         <button type="button" class="navbar-toggler" data-toggle="collapse"
                             data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                             aria-label="Toggle sidenav">
                             <span></span>
                             <span></span>
                         </button>
                     </div>
                 </div>
             </div>

             <!-- Navigation -->
             <ul class="navbar-nav">
                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Dashboard Admin' ? 'active' : '' }}"
                         href="{{ route('dashboard-admin') }}">
                         <i class="ni ni-ruler-pencil text-primary mb-1"></i> Dashboard
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Paket Foto' ? 'active' : '' }}"
                         href="{{ route('datapaketfoto.index') }}">
                         <i class="ni ni-image text-red mb-1"></i> Paket Foto
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Fotografer' ? 'active' : '' }}"
                         href="{{ route('datafotografer.index') }}">
                         <i class="ni ni-camera-compact text-warning mb-1"></i> Fotografer
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Pengguna' ? 'active' : '' }}"
                         href="{{ route('datapengguna.index') }}">
                         <i class="ni ni-single-02 text-yellow mb-1"></i> Pengguna
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Transaksi' ? 'active' : '' }}"
                         href="{{ route('datatransaksi.index') }}">
                         <i class="ni ni-money-coins text-success mb-1"></i> Transaksi
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Testimoni' ? 'active' : '' }}"
                         href="{{ route('datatestimoni.index') }}">
                         <i class="ni ni-chat-round text-info mb-1"></i> Testimoni
                     </a>
                 </li>

                 <li class="nav-item mb-2">
                     <a class="nav-link {{ $title == 'Data Galeri' ? 'active' : '' }}"
                         href="{{ route('datagaleri.index') }}">
                         <i class="ni ni-camera-compact text-danger mb-1"></i> Galeri Foto
                     </a>
                 </li>

             </ul>
         </div>
     </div>
 </nav>
