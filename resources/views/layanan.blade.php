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
            border-bottom-left-radius:88px;
            border-bottom-right-radius:88px;
            position:relative;
            overflow:hidden;
        }
        .nav-pills-centered{ 
            display:inline-flex; 
            gap:.35rem; 
            background: rgba(255,255,255,0.06); 
            padding:6px 10px; 
            border-radius:999px; 
            box-shadow:0 8px 26px rgba(11,42,102,0.12); 
        }
        .nav-pills-centered .nav-link{ 
            color:#fff; 
            padding:.35rem .9rem; 
            border-radius:30px; 
            font-weight:600; 
            font-size:.9rem; 
            opacity:.98; 
        }
        .nav-pills-centered .nav-link.active{ 
            background: rgba(255,255,255,0.12); 
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
            font-size:1.6rem; 
            font-weight:700; 
            color:#fff; 
        }
        .hero p.lead{ 
            margin:0 auto; 
            max-width:820px; 
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
        .info-left h4{ 
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
        .service-card{ 
            background:var(--card); 
            border-radius:14px; 
            padding:18px; 
            box-shadow:0 12px 28px rgba(15,23,42,0.06); 
            display:flex; gap:12px; 
            align-items:center; 
            min-height:110px; 
            width:100%; 
            max-width:320px; 
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
            font-size:.95rem;
            margin:0 auto;
        }
        .service-caption{ text-align:center; margin-top:10px; color:var(--muted); font-size:.95rem; }

        .footer-info{
                max-width:900px;
                margin:32px auto 24px auto;
                display:flex;
                justify-content:space-between;
                gap:24px;
                flex-wrap:wrap;
                color:#222;
                font-weight:600;
                font-size:1.08rem;
            }
            .footer-info div{ flex-basis:45%; min-width:220px; }
            .footer-info p{ margin:.2rem 0; font-weight:400; color:var(--muted); }
            @media (max-width:900px){
                .section-definisi{max-width:98vw;}
            }
            @media (max-width:600px){
                .footer-info{flex-direction:column;gap:8px;}
                .visi-misi-row{grid-template-columns:1fr;}
            }

        /* responsive */
        @media (max-width:991px){
            .services-grid{ grid-template-columns:repeat(2,1fr); gap:18px; }
            .hero h1{ font-size:1.25rem; }
            .info-card{ margin-top:-48px; padding:18px; }
            .service-tile{ width:140px; height:140px; font-size:.88rem; }
        }
        @media (max-width:575px){
            .services-grid{ grid-template-columns:1fr; }
            .nav-pills-centered{ transform:scale(.95); }
            .hero p.lead{ font-size:.9rem; }
            .service-card{ max-width:520px; }
        }
    </style>
</head>
<body>

<header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
        <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/lainnya') }}">Lainnya</a></li>
            </ul>
        </div>
    </div>

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
            <div class="col-lg-8">
                <h4 id="layanan-title">Jenis Layanan</h4>
                <p class="mb-0">Pilih kategori layanan di bawah untuk melihat detail, persyaratan, dan alur pelayanan.</p>
            </div>

        <!-- layanan tiles (disesuaikan agar mirip desain yang dikirim) -->
        <div class="services-grid mt-4" role="list" aria-label="Daftar layanan utama">
            <a role="listitem" class="service-card" href="{{ route('layanan.kantor-samsat') }}" title="Kantor Samsat">
                <div class="service-tile" aria-hidden="true">KANTOR<br>SAMSAT</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-corner') }}" title="Samsat Corner">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>CORNER</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-bergerak') }}" title="Samsat Bergerak">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>BERGERAK</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.samsat-keliling') }}" title="Samsat Keliling">
                <div class="service-tile" aria-hidden="true">SAMSAT<br>KELILING</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.pelantar-emas') }}" title="Pelantar Emas">
                <div class="service-tile" aria-hidden="true">PELANTAR<br>EMAS</div>
            </a>

            <a role="listitem" class="service-card" href="{{ route('layanan.jadwal-samsat') }}" title="Jadwal Samsat">
                <div class="service-tile" aria-hidden="true">JADWAL<br>SAMSAT</div>
            </a>
        </div>

    </section>

    <!-- optional deep block for notes / prosedur -->
    <section class="deep-block mt-4" aria-label="Prosedur dan catatan">
        <div class="deep-inner">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-soft">
                        <div class="title">Prosedur Umum</div>
                            <li>Persiapkan dokumen KTP, STNK, BPKP bila perlu</li>
                            <li>Cek persyaratan spesifik tiap layanan</li>
                            <li>Ambil nomor antrian atau ajukan online (jika tersedia).</li>
                            <li>Selesaikan pembayaran dan ambil bukti layanan.</li>
                    </div>
                </div>
</main>

  <footer class="footer-info" aria-label="Informasi kontak dan jam layanan">
    <div>
      <p class=""><strong>Hubungi Kami</strong></p>
      <p>UPTD PPD TANJUNGPINANG</p>
      <p>Jalan Basuki Rahmad, No.10, Tanjungpinang</p>
      <p>(0771) 21581</p>
    </div>
    <div>
      <p><strong>Jam Layanan</strong></p>
      <p>Senin - Jumat : 08.00 - 15.00</p>
      <p>Sabtu : 08.00 - 12.00</p>
      <p>uptdppinang@gmail.com</p>
    </div>
  </footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>