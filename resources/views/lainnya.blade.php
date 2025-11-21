<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>FAQs - UPTD SAMSAT TANJUNGPINANG</title>

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

    /* Header hero */
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

    .hero{ 
      text-align:center; 
      max-width:1100px; 
      margin:10px auto 0; p
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
      margin-top: 30px;
      max-width:820px; 
      color:rgba(255,255,255,0.92); 
      line-height:1.50; 
      font-size:1.1rem; 
    }

    .dec { position:absolute; border-radius:50%; filter:blur(8px); opacity:.12; z-index:1; pointer-events:none; }
    .dec.a { width:240px; height:240px; background:var(--accent); right:28px; top:-40px; transform:rotate(12deg); }
    .dec.b { width:120px; height:120px; background:rgba(255,255,255,0.08); left:18px; top:-20px; }

    /* content card */
    .stage{ max-width:1350px; margin:0 auto 48px; padding:18px; position:relative; }
    .info-card{
      background:var(--card);
      border-radius:14px;
      padding:26px;
      box-shadow:0 20px 48px rgba(15,23,42,0.08);
      margin-top: 30px;
      position:relative;
      z-index:5;
    }
    .faqs-title{ text-align:center; 
      color:var(--deep-1); 
      font-weight:700; 
      margin:6px 0 16px; 
    }
    .tanya-btn {
  display: block;
  width: fit-content;
  margin: 12px auto 32px;
  background: var(--deep-1);
  color: #fff;
  border: none;
  padding: 12px 38px;
  border-radius: 6px;
  font-weight: 700;
  text-decoration: none;
  text-align: center;
  font-size: 1rem;
}
.tanya-btn {
    display: block;
    width: fit-content;
    margin-bottom: 24px;
    text-decoration: none;
}
.tanya-btn:hover {
    background-color: #001f4f;
}


    .faq-container{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.5rem 1.8rem;
      margin-top:12px;
    }
    .faq-box {
  background: white;
  border: 1px solid rgba(11,26,95,0.06);
  border-radius: 12px;
  padding: 1rem 1.2rem;
  margin-bottom: 30px;
  font-size: .92rem;
  color: #0b1a5f;
  box-shadow: 0 8px 15px rgba(15, 23, 42, 0.25);
  white-space: pre-line;
  transition: transform .15s ease, box-shadow .15s ease;
}

/* Efek kecil saat hover untuk desktop */
@media (min-width: 700px) {
  .faq-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(15, 23, 42, 0.28);
  }
}
    .faq-box strong{ display:block; margin-bottom:.5rem; font-weight:700; }

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
          <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{ url('/lainnya') }}">Lainnya</a></li>
        </ul>
      </div>
    </div>

    <div class="hero" role="region" aria-label="Lainnya / FAQs">
      <p class="lead">Pertanyaan dan persyaratan yang sering ditanyakan tentang layanan SAMSAT Tanjungpinang.</p>
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="faqs-title">
      <h2 id="faqs-title" class="faqs-title">FAQs</h2>

<a href="{{ route('lainnya.tanya-kami') }}" class="tanya-btn">
    Tanya Kami
</a>

      <section class="faq-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan PKB Tahunan</strong>
          - Membawa KTP Alat Pemilik Kendaraan Bermotor  
          - STNK Asli   
          - BPKB  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan PKB 5 Tahun</strong>
          - KTP Alat Pemilik Kendaraan Bermotor  
          - STNK (Asli dan fotocopy)  
          - BPKB (Asli dan fotocopy) / Surat Kuasa Dari Leasing
          <strong>Badan Hukum</strong>
          Salinan Akte Pendirian, Keterangan Domisili dan Surat Kuasa  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan BBN KB</strong>
          - KTP Alat Pemilik Kendaraan Bermotor  
          - KTP penyertai kendaraan bermotor (KTP pembeli)  
          - STNK asli dan fotocopy  
          - BPKB asli dan fotocopy  
          - Kwitansi pembelian bermaterai  
          <strong>Badan Hukum</strong>
          Salinan Akte Pendirian, Keterangan Domisili dan Surat Kuasa  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Apakah bisa melakukan pembayaran PKB 5 Tahun secara Online?</strong>
          Untuk kepengurusan kendaraan bermotor 5 tahun, harus dilakukan di kantor Samsat Tanjung Pinang karena melibatkan proses yang tidak bisa dilakukan secara online.
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Bagaimana jika alamat saya sudah tidak di Tanjungpinang lagi?</strong>
          Sebaiknya melakukan Mutasi Kendaraan Keluar wilayah Tanjungpinang dengan melapor ke Kantor Samsat sesuai domisili STNK terlebih dahulu dengan membawa semua dokumen kepemilikan kendaraan.
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Berapa lama waktu yang diperlukan dalam proses pembayaran?</strong>
          - Pendaftaran RABENTAS 1 x 60 menit  
          - Mutasi Masuk (60 Menit)  
          - Mutasi Keluar (60 Menit)  
          - Pendaftaran 5 tahun (60 menit)  
          - Pemeliharaan STNK 6 Bulan (60 Menit)  
          - Perpanjangan BBNKB Asli (60 Menit)  
          - Perpanjangan STNK Tahunan (60 menit)
        </div>
      </section>
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