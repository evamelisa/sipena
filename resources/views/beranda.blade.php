<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
      @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>Beranda - SAMSAT Tanjungpinang</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

   <style>
    :root{
      --deep-1:#0b2a66;
      --deep-2:#163a8a;
      --bg:#f4f6fb;
      --card:#ffffff;
      --muted:#6b7a90;
    }
    *{box-sizing:border-box}
    body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;overflow-x:hidden;}
    html, body { font-size: 15px; } /* font lebih besar */

    .top-banner{
      background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
      color:#fff;
      padding:25px 0 50px;
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
      font-size:1.08rem;
      opacity:.98;
    }
   .nav-pills-centered .nav-link.active{
      background: rgba(255,255,255,0.12); 
    }
    .logo-row{
      display:flex;
      justify-content:flex-end;
      gap:12px;
      margin-top:-32px;
      margin-bottom:8px;
      padding-right:24px;
    }
    .logo-row img{height:36px;}
    .hero-title{
      text-align:center;
      font-size:3.0rem;
      font-weight:700;
      letter-spacing:.5px;
      margin-top:24px;
      margin-bottom:0;
    }
    .hero-sub{
      text-align:center;
      font-size:1.25rem;
      font-weight:600;
      margin-bottom:0;
      margin-top:8px;
    }
    .section-sejarah{
      background: none;
      margin:0 auto;
      width:1100px; /* diperlebar */
      margin-top:48px;
      margin-bottom:18px;
      position:relative;
      z-index:2;
    }
    .sejarah-card{
      background:var(--deep-2);
      color:#fff;
      border-radius:18px;
      padding:28px 28px 18px 28px; /* padding lebih besar */
      box-shadow:0 8px 32px rgba(11,42,102,0.12);
      font-size:1.08rem; /* font lebih besar */
      margin-bottom:0;
    }
    .sejarah-card h5{
      font-weight:700;
      font-size:1.25rem;
      margin-bottom:12px;
      text-align:center;
      color:#fff;
      letter-spacing:.5px;
    }
    .sejarah-card p{
      margin-bottom:12px;
      font-size:1.08rem;
      line-height:1.7;
      color:#eaf2ff;
      text-align:justify;
    }
    .layanan-title{
      text-align:center;
      font-weight:700;
      margin:32px 0 10px 0;
      font-size:1.15rem;
      letter-spacing:.5px;
    }
    .layanan-row{
      display:flex;
      justify-content:center;
      gap:32px;
      margin-bottom:8px;
      flex-wrap:wrap;
    }
    .layanan-list{
      font-size:1.08rem;
      color:#233;
      margin-bottom:0;
      padding-left:0;
      list-style:none;
    }
    .layanan-list li{
      margin-bottom:2px;
      font-weight:400;
    }
    .layanan-list .judul{
      font-weight:700;
      margin-bottom:6px;
      color:var(--deep-1);
      font-size:1.12rem;
      list-style:none;
    }
    .layanan-list .jenis{
      font-weight:700;
      margin-bottom:6px;
      color:var(--deep-2);
      font-size:1.12rem;
      list-style:none;
    }
    .icon-section{
      background: linear-gradient(180deg,var(--deep-1),var(--deep-2));
      border-radius:22px;
      margin:32px auto 0 auto;
      max-width:520px;
      padding:24px 0 10px 0;
      box-shadow:0 12px 32px rgba(11,42,102,0.12);
      display:flex;
      justify-content:center;
      gap:32px;
    }
    .icon-box{
      background:var(--card);
      border-radius:14px;
      padding:14px 10px 8px 10px;
      width:100px;
      text-align:center;
      box-shadow:0 8px 18px rgba(15,23,42,0.06);
      color:var(--deep-1);
      font-weight:600;
      font-size:1.08rem;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      gap:4px;
    }
    .icon-box img{
      width:36px;
      height:36px;
      margin-bottom:6px;
    }
    footer{
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
    footer div{ flex-basis:45%; min-width:220px; }
    footer p{ margin:.2rem 0; font-weight:400; color:var(--muted); }
    @media (max-width:900px){
      .section-sejarah{max-width:98vw;}
    }
    @media (max-width:600px){
      .icon-section{max-width:98vw;gap:12px;}
      .icon-box{width:80px;padding:10px 4px;}
      .layanan-row{gap:12px;}
      footer{flex-direction:column;gap:8px;}
    }
    .motif-bg{
      width:100%;
      height:120px;
      background:url('https://i.ibb.co/6s9gk2w/motif-samsat.png') center/cover no-repeat;
      margin-bottom:-60px;
      margin-top:0;
      position:relative;
      z-index:1;
    }
  </style>
  </style>
</head>
<body>

   <header class="top-banner" role="banner">

    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
        <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/lainnya') }}">Lainnya</a></li>
            </ul>
        </div>
    </div>

    <div class="hero-title">SAMSAT<br>TANJUNGPINANG</div>
    <div class="logo-row">
      <img src="https://i.ibb.co/tscFZBK/logo-korlantas.png" alt="Korlantas">
      <img src="https://i.ibb.co/Gtrh6nj/logo-polda-kepri.png" alt="Polda Kepri">
      <img src="https://i.ibb.co/xzJHDq7/logo-jsf.png" alt="JSF">
    </div>
  </header>

  <main class="stage" role="main">
    <section class="section-sejarah">
      <div class="sejarah-card">
        <h5>Sejarah SAMSAT</h5>
        <p>
            SAMSAT Tanjungpinang diresmikan pada tanggal 15 April 1982 yang merupakan SAMSAT Pemerintah Tk.I Provinsi Riau sebelum terbentuknya Provinsi Kepulauan Riau. Sejak tahun 2005 diambil alih Kantor Unit Pelayanan Teknis Tanjungpinang yang selanjutnya terjadi perubahan nama menjadi Unit Pelaksana Teknis (UPT) SAMSAT Tanjungpinang terdiri atas 3 (tiga) instansi yaitu Kepolisian Resor Kota Tanjungpinang, Dinas Pendapatan Daerah Propinsi Kepulauan Riau serta Jasa Raharja.
        </p>
        <p>
          Tujuan dibentuknya SAMSAT Tanjungpinang adalah untuk meningkatkan pelayanan dalam penerbitan STNK, TNKB dan Pemungutan PKB, BBN-KB serta SWDKLLJ, Kantor ini terletak diatas tanah seluas ± 5000 . Kantor tersebut berada diwilayah Kota Tanjungpinang pada Jl. Basuki Rahmat No.10 Km.4 Kota Tanjungpinang.
        </p>
      </div>
    </section>

    <div class="layanan-title">LAYANAN LENGKAP</div>
    <div class="layanan-row">
      <ul class="layanan-list">
        <li class="judul">Pelayanan pada Kantor Samsat Tanjungpinang<br>terdiri dari :</li>
        <li>1. Perpanjangan Pajak 1 Tahun</li>
        <li>2. Perpanjangan Pajak 5 Tahun</li>
        <li>3. Rubentina</li>
        <li>4. Balik Nama</li>
        <li>5. Cek Fisik</li>
        <li>6. Mutasi</li>
      </ul>
      <ul class="layanan-list">
        <li class="jenis">Jenis Layanan :</li>
        <li>1. Samsat Bergerak </li>
        <li>2. Samsat Keliling </li>
        <li>3. Samsat Corner</li>
        <li>4. Pelantar Emas</li>
        <li>5. Jadwal Samsat</li>
      </ul>
    </div>

    <section class="icon-section">
      <div class="icon-box">
        <img src="https://i.ibb.co/y5mTTBQ/icon-info.png" alt="Info Pelayanan" />
        <div>Info Layanan</div>
      </div>
      <div class="icon-box">
        <img src="https://i.ibb.co/cTqjZtX/icon-calendar.png" alt="Jadwal Samsat" />
        <div>Jadwal Samsat</div>
      </div>
      <div class="icon-box">
        <img src="https://i.ibb.co/4tSNT6Q/icon-announcement.png" alt="Laporan" />
        <div>Laporan</div>
      </div>
    </section>
  </main>

  <footer>
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