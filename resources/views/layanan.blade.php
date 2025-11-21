<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Layanan - SAMSAT Tanjungpinang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

    <style>
        :root{
            --deep-1:#0b2a66;
            --deep-2:#163a8a;
            --accent:#6c7cf0;
            --bg:#f4f6fb;
            --card:#ffffff;
            --muted:#6b7a90;
        }
        *{box-sizing:border-box}
        body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;}
        /* Header / hero */
        .top-banner{
            background: linear-gradient(90deg,var(--deep-1) 0%, var(--deep-2) 100%);
            color:#fff;
            padding:28px 0 72px;
            margin-top: -13px;
            border-bottom-left-radius:88px;
            border-bottom-right-radius:88px;
            position:relative;
            overflow:hidden;
        }
        

        .hero{ 
            text-align:center; 
            max-width:1100px; 
            margin:10px auto 0; 
            padding:0 16px; 
            position:relative; 
            z-index:2; 
        }
        .hero h1{ 
            margin:8px 0; 
            margin-top: 30px;
            font-size:1.6rem; 
            font-weight:700; 
            color:#fff; 
        }
        .hero p.lead{ 
            margin:0 auto; 
            max-width:835px; 
            color:rgba(255,255,255,0.92); 
            line-height:1.5; 
            font-size:.95rem; 
        }

        .dec { 
            position:absolute; 
            border-radius:50%; 
            filter:blur(8px); 
            opacity:.12; 
            z-index:1; 
            pointer-events:none; 
        }
        .dec.a { 
            width:200px; 
            height:200px; 
            background:var(--accent); 
            right:28px; 
            top:-60px; 
            transform:rotate(12deg); 
        }
        .dec.b { 
            width:96px; 
            height:96px; 
            background:rgba(255,255,255,0.08); 
            left:18px; 
            top:-20px; 
        }

        /* Stage & cards */
        .stage{ 
            max-width:1100px; 
            margin:0 auto 48px; 
            padding:18px; 
            position:relative; 
        }
        .info-card{ 
            background:var(--card); 
            border-radius:14px; 
            padding:26px; 
            box-shadow:0 20px 48px rgba(15,23,42,0.08); 
            margin-top:30px; 
            position:relative; 
            z-index:5; 
        }
        .layanan-title{ text-align:center; 
        color:var(--deep-1); 
        font-weight:700; 
        margin:6px 0 16px; 
        }
        .info-left h2{ 
            color:var(--deep-1); 
            font-weight:700; 
            margin-bottom:.5rem; 
        }
        .info-left p{ 
            color:var(--muted); 
            line-height:1.6; 
            margin-bottom:.6rem; 
        }
        .contact-card{ 
            background:var(--card); 
            padding:16px; 
            border-radius:10px; 
            box-shadow:0 10px 26px rgba(15,23,42,0.04); 
        }

        .deep-block{ 
            margin-top:26px; 
            background: linear-gradient(180deg,var(--deep-1),var(--deep-2)); 
            color:#fff; border-radius:18px; 
            padding:26px; 
            box-shadow:0 22px 56px rgba(11,42,102,0.12); 
            position:relative; 
            overflow:hidden; 
        }
        .deep-inner{ 
            position:relative; 
            z-index:2; 
        }

        /* layanan grid */
        .services-grid{ 
            display:grid; 
            grid-template-columns:repeat(3,1fr); 
            gap:28px; 
            margin-top:-18px; 
            justify-items:center; 
        }
        .services-grid a{
    text-decoration:none !important;
    color:inherit !important;
}
        .service-tile{
            display:flex;
            align-items:center;
            justify-content:center;
            width:170px;
            height:170px;
            border-radius:18px;
            background:linear-gradient(180deg,var(--deep-1),var(--deep-2));
            color:#fff;
            font-weight:700;
            text-align:center;
            box-shadow: 0 12px 30px rgba(11,42,102,0.12);
            text-transform:uppercase;
            letter-spacing:.6px;
            font-size:1.35rem;
            margin:0 auto;
        }
        .service-caption{ text-align:center; margin-top:10px; color:var(--muted); font-size:.95rem; }

        /* Efek kecil saat hover untuk desktop */
@media (min-width: 700px) {
  .service-tile:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(15, 23, 42, 0.28);
  }
}
    .service-tile strong{ display:block; margin-bottom:.5rem; font-weight:700; }
    </style>
</head>
<body>

<header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="hero" role="region" aria-label="Layanan SAMSAT">
        @include('navbar')
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
            <div class="col-lg-8 mx-auto">
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