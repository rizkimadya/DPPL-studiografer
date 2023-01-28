<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | StudioGrafer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{ asset('assets/img/bglogin.svg') }}" alt="" width="100%">
                </div>
                <div class="col-md-6 col-12 form">
                    <p class="title">Daftar Akun</p>
                    <p class="keterangan">Selamat Datang diWebsite Studio Grafer <br>
                        Website Freelancer Fotografer</p>

                    <div class="px-5">
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if (session('wait'))
                            <p class="alert alert-danger">{{ session('wait') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                    </div>
                    <form action="" method="POST" class="px-5">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-input input" name="username"
                                placeholder="Masukkan Username">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-input input" name="password"
                                placeholder="Masukkan Email">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-input input" name="password"
                                placeholder="Masukkan Password">
                        </div>
                        <div class="mb-5 d-flex justify-content-end">
                            <button class="btn-login">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
