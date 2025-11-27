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

  </style>
</head>
<body>

  <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    @include('navbar')

    <div class="hero" role="region" aria-label="Layanan / CORNER">
  
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="corner-title">
      <h2 id="corner-title" class="corner-title">SAMSAT CORNER</h2>
      <P class="content-box">Samsat Corner merupakan layanan mini Samsat yang ditempatkan di lokasi-lokasi strategis seperti pusat perbelanjaan, kantor pemerintahan, dan area publik lainnya. Layanan ini dirancang untuk mendekatkan akses pembayaran pajak kendaraan bermotor kepada masyarakat, sehingga mereka tidak perlu repot mengunjungi kantor Samsat yang sering kali jauh dan penuh antrian. Berikut layanan yang ada pada Samsat Corner.</P>



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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>