<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>SAMSAT KELILING - UPTD SAMSAT TANJUNGPINANG</title>

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
    .samling-title{ text-align:center; 
      color:var(--deep-1); 
      font-weight:700; 
      margin:6px 0 16px; 
    }
    .content-box p { text-align: justify;
  font-size: 0.95rem;   /* lebih kecil */
  line-height: 1.55rem; /* biar tetap rapi */
}


    .samling-container{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.5rem 1.8rem;
      margin-top:12px;
    }
    .samling-box{
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
    .samling-box strong{ display:block; margin-bottom:.5rem; font-weight:700; }

  </style>
</head>
<body>

  <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    @include('navbar')

    <div class="hero" role="region" aria-label="Layanan / samling">
  
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="samling-title">
      <h2 id="samling-title" class="samling-title">SAMSAT KELILING</h2>
      <P class="content-box">Samsat Keliling adalah layanan mobile yang menggunakan kendaraan khusus untuk memberikan pelayanan pembayaran pajak kendaraan bermotor dan administrasi terkait. Layanan ini beroperasi dengan mendatangi berbagai lokasi strategis di wilayah tertentu, sehingga memudahkan masyarakat dalam mengakses layanan Samsat tanpa harus datang ke kantor pusat. Berikut layanan yang ada pada Samsat Keliling.</P>



      <section class="samling-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="samling-box" tabindex="0">
          <strong>Pembayaran Pajak Kendaraan Bermotor:</strong>
          Layanan ini menyediakan fasilitas untuk pembayaran pajak tahunan kendaraan bermotor. Masyarakat dapat langsung melunasi kewajiban pajak mereka di lokasi Samsat Keliling.  
        </div>

        <div class="samling-box" tabindex="0">
          <strong>Penggantian STNK Hilang atau Rusak:</strong>
           Selain perpanjangan, layanan ini membantu penggantian STNK yang hilang atau rusak, sehingga masyarakat tidak perlu mengunjungi kantor Samsat utama.
        </div>

        <div class="samling-box" tabindex="0">
          <strong>Penerbitan SKPD:</strong>
           Surat Ketetapan Pajak Daerah (SKPD) juga dapat diterbitkan langsung di lokasi Samsat Keliling, memudahkan masyarakat dalam mendapatkan bukti pembayaran pajak.
        </div>

        <div class="samling-box" tabindex="0">
            <strong>Pembayaran Non-Tunai:</strong>
            Untuk kenyamanan dan keamanan, Samsat Keliling menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital.
        </div>
    </section>

  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>