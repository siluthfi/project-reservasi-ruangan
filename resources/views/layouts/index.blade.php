<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand navbar-light bg-light shadow">
        <div class="container">
        <a class="navbar-brand" href="/">Mencari Ruang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @if (auth())
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/ruangan">Ruangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/ruangan">Ruangan</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    <section class="main mb-5">
        @yield('container')
        
    </section>
    <footer class="bg-grey text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md text-center text-md-start mb-3">
                    <h3 style="margin-top: 5%">Mencari Ruang</h3>
                </div>
                <div class="col-md-4 ms-auto">
                    <p>No. Telp <span class="float-end">081208120812</span></p>
                    <p>Email <span class="float-end">mencariruang@gmail.com</span></p>
                    <p>No. Telp <span class="float-end">081208120812</span></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>