<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/layanan.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}" />
    <title>Layanan - SAMSAT Tanjungpinang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>


</head>
<body>

<header class="top-banner" role="banner">
    @include('navbar')
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>
    <div class="hero" role="region" aria-label="Layanan SAMSAT">
        <h1>Layanan SAMSAT Tanjungpinang</h1>
        <p class="lead">
            Layanan yang disediakan UPTD SAMSAT TANJUNGPINANG untuk masyarakat: pendaftaran kendaraan, penerbitan STNK, balik nama, pengurusan denda, dan layanan administrasi lainnya. Pilih layanan untuk informasi lebih lengkap.
        </p>
    </div>
</header>

<main class="stage" role="main">
    <!-- top white card -->
    <section class="info-card" aria-labelledby="layanan-title">
        <div class="row gx-4">
            <div class="col-lg-12 mx-auto text-center">
                    <h2 id="layanan-title" class="layanan-title">Jenis Layanan</h2>
                <p class="mb-0">Pilih kategori layanan di bawah untuk melihat detail, persyaratan, dan alur pelayanan.</p>
            </div>

        <!-- layanan tiles (disesuaikan agar mirip desain yang dikirim) -->
        <div class="services-grid mt-4" role="list" aria-label="Daftar layanan utama">
            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-keliling') }}" title="Kantor Samsat">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>KELILING</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-corner') }}" title="Samsat Corner">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>CORNER</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-bergerak') }}" title="Samsat Bergerak">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>BERGERAK</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.kantor-samsat') }}" title="Samsat Keliling">
                <div class="service-tile" aria-hidden="true">KANTOR<br>SAMSAT</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.pelantar-emas') }}" title="Pelantar Emas">
                <div class="service-tile" aria-hidden="true">PELANTAR<br>EMAS</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.jadwal-samsat') }}" title="Jadwal Samsat">
                <div class="service-tile" aria-hidden="true">JADWAL<br>SAMSAT</div>
            </a>
        </div>

    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>