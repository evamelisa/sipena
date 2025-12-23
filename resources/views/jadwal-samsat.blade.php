<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="{{ asset('css/jadwal-samsat.css') }}?v=5" />
<link rel="stylesheet" href="{{ asset('css/top-banner.css') }}?v=5">

<title>JADWAL SAMSAT - UPTD SAMSAT TANJUNGPINANG</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

</head>
<body>
<header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Layanan / jadwal samsat">
        <h1>JADWAL SAMSAT</h1>
    <div class="samsat-links">
    <a href="{{ url('/samsat-keliling') }}">Samsat Keliling</a>
    <span>|</span>  
    <a href="{{ url('/samsat-corner') }}">Samsat Corner</a>
    <span>|</span>
    <a href="{{ url('/samsat-bergerak') }}">Samsat Bergerak</a>
    <span>|</span>
    <a href="{{ url('/kantor-samsat') }}">Kantor Samsat</a>
    <span>|</span>
    <a href="{{ url('/pelantar-emas') }}">Pelantar Emas</a>
    <span>|</span>
    <a href="{{ url('/jadwal-samsat') }}">Jadwal Samsat</a>
</div>
</div>
</header>
<section class="jadwal-section">


<div class="container-list">

    <div class="definisi-card">
    <h3 class="card-title text-center">KANTOR SAMSAT</h3>
    <p class="alamat text-center">📍 Jl. Basuki Rahmad No.10</p>
    <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
        <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
    </ul>
</div>

<div class="definisi-card">
    <h3 class="card-title text-center">SAMSAT CORNER</h3>
    <p class="alamat text-center">📍 Jl. DI Panjaitan Km.IX</p>
    <ul class="jadwal">
    <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
    <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
    </ul>
</div>

<div class="definisi-card">
    <h3 class="card-title text-center">SAMSAT BERGERAK 1</h3>
    <p class="alamat text-center">📍 Jl. DI Panjaitan Km 7</p>
    <ul class="jadwal">
        <li>🗓 Senin - Kamis <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Jumat - Sabtu <br> 08.30 - 12.00 WIB</li>
    </ul>
</div>

<div class="definisi-card">
    <h3 class="card-title text-center">SAMSAT BERGERAK 2</h3>
    <p class="alamat text-center">📍 Jl. Merdeka Pos Polisi Pasar</p>
    <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Sabtu <br> 08.30 - 12.00 WIB</li>
    </ul>
</div>


<div class="definisi-card center-card">
    <h3 class="card-title text-center">SAMSAT KELILING</h3>

    <div class="samling-grid">

        <!-- Kolom kiri: lokasi -->
        <div class="samling-left">
            <ul class="jadwal">
                <li>📍 Senin – Selasa <br> Dompak (Komplek Perkantoran Dompak)</li>
                <li>📍 Rabu – Jumat <br> Bundaran D’green City Km.8</li>
            </ul>
        </div>

        <!-- Kolom kanan: jam layanan -->
        <div class="samling-right">
            <ul class="jadwal">
                <li>🗓 Senin - Jumat <br> 08.30 - 13.30 WIB</li>
                <li>🗓 Sabtu <br> 08.30 - 12.00 WIB</li>
            </ul>
        </div>

    </div>
</div>
</section>

@include('footer')

</body>
</html>