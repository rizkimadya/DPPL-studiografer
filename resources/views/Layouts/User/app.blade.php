<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div id="app">
        {{-- header --}}
        @include('Layouts.User.header')
        {{-- main content --}}
        <div class="main-content" style="background-color: #F8F9FE;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card-main">
                            @include('sweetalert::alert')
                            @yield('content')

                            @if (
                                $title != 'Halaman Login' &&
                                    $title != 'Pilihan Registrasi' &&
                                    $title != 'Halaman Registrasi Fotografer' &&
                                    $title != 'Halaman Registrasi Pengguna')
                                @include('Layouts.User.footer')
                                @include('Layouts.User.navbar')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
