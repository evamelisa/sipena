<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>SAMSAT BERGERAK - UPTD SAMSAT TANJUNGPINANG</title>

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
    .samber-title{ text-align:center; 
      color:var(--deep-1); 
      font-weight:700; 
      margin:6px 0 16px; 
    }
    .content-box p { text-align: justify;
  font-size: 0.95rem;   /* lebih kecil */
  line-height: 1.55rem; /* biar tetap rapi */
}


    .samber-container{ 
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.5rem 1.8rem;
      margin-top:12px;
    }
    .samber-box{
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
    .samber-box strong{ display:block; margin-bottom:.5rem; font-weight:700; }

  </style>
</head>
<body>

  <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    @include('navbar')

    <div class="hero" role="region" aria-label="Layanan / samber">
  
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="samber-title">
      <h2 id="samber-title" class="samber-title">SAMSAT BERGERAK</h2>
      <P class="content-box">Samsat Bergerak adalah layanan mobile yang memanfaatkan kendaraan khusus yang dilengkapi dengan fasilitas pelayanan administrasi kendaraan bermotor. Layanan ini menjangkau masyarakat di berbagai lokasi, terutama di daerah-daerah yang jauh dari kantor Samsat utama atau daerah dengan akses terbatas. Berikut layanan yang ada pada Samsat Bergerak.</P>

      <section class="samber-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="samber-box" tabindex="0">
          <strong>Pembayaran Pajak Kendaraan Bermotor:</strong>
          Samsat Bergerak melayani pembayaran pajak tahunan kendaraan bermotor, termasuk penerbitan Surat Ketetapan Pajak Daerah (SKPD) dan tanda bukti pelunasan kewajiban pembayaran pajak.  
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pelayanan Cepat dan Efisien:</strong>
          Proses administrasi di Samsat Bergerak dirancang untuk meminimalisir waktu tunggu, sehingga masyarakat dapat menyelesaikan urusan mereka dengan cepat.  
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pelayanan di Lokasi Strategis:</strong>
          Samsat Bergerak ditempatkan di lokasi-lokasi strategis seperti pusat keramaian, pasar, atau area perkantoran untuk memudahkan akses masyarakat.
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pembayaran Non-Tunai:</strong>
          Untuk meningkatkan kenyamanan dan keamanan, Samsat Bergerak menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital.
        </div>
    </section>

  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>