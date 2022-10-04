<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA LSP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    SIA LSP
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-white">Beranda</a></li>
                    <li><a href="/mahasiswa" class="nav-link px-2 text-white">Mahasiswa</a></li>
                    <li><a href="/dosen" class="nav-link px-2 text-white">Dosen</a></li>
                    <li><a href="/matakuliah" class="nav-link px-2 text-white">Matakuliah</a></li>
                    <li><a href="/ruang" class="nav-link px-2 text-white">Ruang</a></li>
                    <li><a href="/krs" class="nav-link px-2 text-white">KRS</a></li>
                    <li><a href="/jadwal" class="nav-link px-2 text-white">Jadwal</a></li>
                </ul>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
                        <span class="text-white">{{ \App\Helpers\Helper::getNameById(Cookie::get('id')) }}</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="container">