<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-grey shadow-sm">
        <div class="container">
        <a class="navbar-brand" href="/">Mencari Ruang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @if (auth())
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 'Ruangan' ? 'active' : '' }}" href="/ruangan">Ruangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 'Login' ? 'active' : '' }}" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 'Register' ? 'active' : '' }}" href="/daftar">Daftar</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ $active == 'Ruangan' ? 'active' : '' }}" href="/ruangan">Ruangan</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>
    <section class="main">
        @yield('container')
        
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#77b9fa" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,122.7C384,128,480,160,576,176C672,192,768,192,864,181.3C960,171,1056,149,1152,138.7C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>