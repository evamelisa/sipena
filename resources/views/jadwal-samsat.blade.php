<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
@vite(['resources/css/app.css', 'resources/js/app.js'])

<title>JADWAL SAMSAT - UPTD SAMSAT TANJUNGPINANG</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

<style>
    :root {
    --deep-1: #1e3a8a;
    --deep-2: #3b82f6;
	}

	body {
    font-family: 'Poppins', sans-serif;
    background: #f5f8ff;
    color: #0b2a59;
	}
    .title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 40px;
    }
    .top-banner{
    background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
    color:#fff;
    padding:28px 0 72px;
    border-bottom-left-radius:88px;
    border-bottom-right-radius:88px;
    position:relative;
    overflow:hidden;
    }
    /* Ubah layout jadi 2 kolom */
    .container-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    max-width: 1300px;
    margin: auto;
    margin-top: 40px;
    }

    .card {
    background: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.08);
    border-left: 6px solid #1e3a8a;
    width: 100%;
    }
.definisi-card{
    background: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0,0,0,0.08);
    border-left: 6px solid #1e3a8a;
    width: 100%;

    /* POSISIKAN PAS DI TENGAH GRID */
    grid-column: span 2;
    justify-self: center;
    max-width: 750px;
}
.samling-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 10px;
}

.samling-left ul li,
.samling-right ul li {
    background: #f2f6ff;
    padding: 10px 14px;
    border-radius: 8px;
    margin-bottom: 8px;
}
    .card-title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 10px;
    }

    .alamat {
    font-weight: 600;
    margin-bottom: 12px;
    }

    .jadwal {
    list-style: none;
    padding: 0;
    }

    .jadwal li {
    background: #f2f6ff;
    padding: 10px 14px;
    border-radius: 8px;
    margin-bottom: 8px;
    font-size: 14px;
    text-align: left;
    }
</style>
</head>

<body>

<header class="top-banner" role="banner">
<div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>
    
    @include('navbar')
    <div class="container text-center">
        <h1 class="fw-bold mb-3 mt-3">JADWAL SAMSAT</h1>
        <p class="mb-0">Informasi jadwal operasional layanan SAMSAT di Tanjungpinang.</p>
    </div>
</header>
<section class="jadwal-section">


<div class="container-list">

    <div class="card">
    <h3 class="card-title text-center">KANTOR SAMSAT</h3>
    <p class="alamat text-center">📍 Jl. Basuki Rahmad No.10</p>
    <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
        <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
    </ul>
</div>

<div class="card">
    <h3 class="card-title">SAMSAT CORNER</h3>
    <p class="alamat">📍 Jl. DI Panjaitan Km.IX</p>
    <ul class="jadwal">
    <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
    <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
    </ul>
</div>

<div class="card">
    <h3 class="card-title">SAMSAT BERGERAK 1</h3>
    <p class="alamat">📍 Jl. DI Panjaitan Km 7</p>
    <ul class="jadwal">
        <li>🗓 Senin - Kamis <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Jumat - Sabtu <br> 08.30 - 12.00 WIB</li>
    </ul>
</div>

<div class="card">
    <h3 class="card-title">SAMSAT BERGERAK 2</h3>
    <p class="alamat">📍 Jl. Merdeka Pos Polisi Pasar</p>
    <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Sabtu <br> 08.30 - 12.00 WIB</li>
    </ul>
</div>


<div class="definisi-card">
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