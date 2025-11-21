
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Samsat Bergerak - Layanan SAMSAT</title>
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
    body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;overflow-x:hidden;}
    .top-banner{
      background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
      color:#fff;
      padding:0 0 0 0;
      border-bottom-left-radius:32px;
      border-bottom-right-radius:32px;
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
      margin-top:18px;
      justify-content:center;
      width:100%;
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
      background: rgba(255,255,255,0.18);
      border:2px solid #fff;
    }
    .hero-title{
      text-align:center;
      font-size:1.4rem;
      font-weight:700;
      letter-spacing:.5px;
      margin-top:32px;
      margin-bottom:0;
    }
    .section-definisi{
      background: none;
      margin:0 auto;
      max-width:700px;
      margin-top:48px;
      margin-bottom:18px;
      position:relative;
      z-index:2;
    }
    .definisi-card{
      background:var(--deep-2);
      color:#fff;
      border-radius:18px;
      padding:28px 28px 18px 28px;
      box-shadow:0 8px 32px rgba(11,42,102,0.10);
      font-size:1.08rem;
      margin-bottom:0;
    }
    .definisi-card h5{
      font-weight:700;
      font-size:1.25rem;
      margin-bottom:12px;
      text-align:center;
      color:#dbe9ff;
      letter-spacing:.5px;
    }
    .definisi-card p{
      margin-bottom:12px;
      font-size:1.08rem;
      line-height:1.7;
      color:#fff;
      text-align:justify;
    }
    .definisi-card ul{
      margin-bottom:12px;
      padding-left:18px;
      color:#fff;
    }
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
    }
  </style>
</head>
<body>
  <header class="top-banner" role="banner">
    <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
      <ul class="nav mb-0">
        <li class="nav-item"><a class="nav-link" href="/beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
        <li class="nav-item"><a class="nav-link active" href="/layanan">Layanan</a></li>
        <li class="nav-item"><a class="nav-link" href="/lainnya">Lainnya</a></li>
      </ul>
    </div>
    <div class="hero-title">SAMSAT BERGERAK</div>
  </header>
  <main class="stage" role="main">
    <section class="section-definisi">
      <div class="definisi-card">
        <h5>SAMSAT BERGERAK</h5>
        <p>Samsat Bergerak adalah layanan mobile yang memanfaatkan kendaraan khusus yang dilengkapi dengan fasilitas pelayanan administrasi kendaraan bermotor. Layanan ini menjangkau masyarakat di berbagai lokasi, terutama di daerah-daerah yang jauh dari kantor Samsat utama atau daerah dengan akses terbatas.</p>
        <p><strong>Fasilitas dan Layanan Samsat Bergerak:</strong></p>
        <ul>
          <li><strong>Pembayaran Pajak Kendaraan Bermotor:</strong><br>Samsat Bergerak melayani pembayaran pajak tahunan kendaraan bermotor, termasuk penerbitan Surat Ketetapan Pajak Daerah (SKPD) dan tanda bukti pelunasan kewajiban pembayaran pajak.</li>
          <li><strong>Pelayanan Cepat dan Efisien:</strong><br>Proses administrasi di Samsat Bergerak dirancang untuk meminimalisir waktu tunggu, sehingga masyarakat dapat menyelesaikan urusan mereka dengan cepat.</li>
          <li><strong>Pelayanan di Lokasi Strategis:</strong><br>Samsat Bergerak ditempatkan di lokasi-lokasi strategis seperti pasar, alun-alun, pusat perbelanjaan, dan area publik lainnya untuk memudahkan akses bagi masyarakat.</li>
          <li><strong>Pembayaran Non-Tunai:</strong><br>Untuk meningkatkan kenyamanan dan keamanan, Samsat Bergerak menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital.</li>
        </ul>
      </div>
    </section>
  </main>
  <footer class="footer-info">
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
