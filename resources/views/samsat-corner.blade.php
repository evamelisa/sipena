<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>SAMSAT CORNER - UPTD SAMSAT TANJUNGPINANG</title>

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
    body{
      font-family:'Poppins',sans-serif;
      background:var(--bg);
      margin:0;
      color:#233;
    }

    /* Header / hero */
    .top-banner{
      background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
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
    .dec { position:absolute; border-radius:50%; filter:blur(8px); opacity:.12; z-index:1; pointer-events:none; }
    .dec.a { width:240px; height:240px; background:var(--accent); right:28px; top:-40px; transform:rotate(12deg); }
    .dec.b { width:120px; height:120px; background:rgba(255,255,255,0.08); left:18px; top:-20px; }

    /* content card */
    .stage{ max-width:1350px; margin:0 auto 48px; padding:18px; position:relative; }
    .info-card{
      background:var(--card);
      border-radius:14px;
      padding:30px;
      box-shadow:0 20px 48px rgba(15,23,42,0.08);
      margin-top: 30px;
      position:relative;
      z-index:5;
    }
    .corner-title{ text-align:center; 
      color:var(--deep-1); 
      font-weight:700; 
      margin:6px 0 16px; 
    }
    .content-box p { text-align: justify;
  font-size: 0.95rem;   /* lebih kecil */
  line-height: 1.55rem; /* biar tetap rapi */
}


    .corner-container{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.5rem 1.8rem;
      margin-top:12px;
    }
    .corner-box{
      background: #163a8a;
      border: 1px solid rgba(11,26,95,0.06);
      border-radius:12px;
      padding:1rem 1.2rem;
      font-size:.92rem;
      text-align: justify;
      color:#fff;
      box-shadow:0 8px 18px #0b1a5f0a;
      white-space:pre-line;
    }
    .corner-box strong{ display:block; margin-bottom:.5rem; font-weight:700; }

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
  </style>
</head>
<body>

  <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
      <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
        <ul class="nav mb-0">
          <li class="nav-item"><a class="nav-link" href="{{ url('/beranda') }}">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('/layanan') }}">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ url('/lainnya') }}">Lainnya</a></li>
        </ul>
      </div>
    </div>

    <div class="hero" role="region" aria-label="Layanan / CORNER">
  
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="corner-title">
      <h2 id="corner-title" class="corner-title">SAMSAT CORNER</h2>
      <P class="content-box">Samsat Corner adalah layanan mini Samsat yang ditempatkan di lokasi-lokasi strategis seperti pusat perbelanjaan, kantor pemerintahan, dan area publik lainnya. Layanan ini dirancang untuk mendekatkan akses pembayaran pajak kendaraan bermotor kepada masyarakat, sehingga mereka tidak perlu repot mengunjungi kantor Samsat yang sering kali jauh dan penuh antrian. Fasilitas dan Layanan di Samsat Corner.</P>



      <section class="corner-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="corner-box" tabindex="0">
          <strong>Pembayaran Pajak Kendaraan Bermotor:</strong>
          Samsat Corner melayani pembayaran pajak tahunan kendaraan bermotor dengan cepat dan efisien. Proses pembayaran yang sederhana dan tidak memakan waktu lama menjadi salah satu keunggulan utama layanan ini.  
        </div>

        <div class="corner-box" tabindex="0">
          <strong>Informasi dan Konsultasi:</strong>
          Petugas yang ramah dan profesional siap memberikan informasi dan konsultasi terkait administrasi kendaraan bermotor, seperti cara perpanjangan STNK, perubahan data kepemilikan, dan lain-lain.  
        </div>

        <div class="corner-box" tabindex="0">
          <strong>Pembayaran Non-Tunai:</strong>
          Untuk meningkatkan kenyamanan, Samsat Corner menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital. Hal ini mempermudah masyarakat yang tidak membawa uang tunai.
        </div>
    </section>
  </main>

  <footer class="footer-info" aria-label="Informasi kontak dan jam layanan">
    <div>
      <p><strong>Hubungi Kami</strong></p>
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