<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/logos.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link href="{{ asset('assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.css') }}">
</head>

<body>

    <div id="app">

        {{-- sidebar --}}
        @include('Layouts.Admin.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @include('Layouts.Admin.navbar')

            <div class="header pb-8 pt-5 pt-md-8" style="background-color: #8EA3F6;">
                <div class="container-fluid">
                    <div class="header-body">
                        {{-- @include('sweetalert::alert') --}}
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('assets/js/databarang.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ asset('assets/js/datatables.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js') }}"></script>

    <!--   Core   -->
    <script src="{{ asset('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
    <!--   Argon JS   -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="{{ asset('https://cdn.trackjs.com/agent/v3/latest/t.js') }}"></script>

</body>

</html>
