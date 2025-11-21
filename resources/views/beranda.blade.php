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
      --deep-1:#092a69;
      --deep-2:#163a8a;
      --bg:#f4f6fb;
      --card:#ffffff;
      --muted:#6b7a90;
    }
    *{box-sizing:border-box}
    body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;overflow-x:hidden;}
    

    .top-banner{
      background: linear-gradient(180deg,var(--deep-1),var(--deep-2));
      color:#fff;
      padding:25px 0 50px;
      position:relative;
      overflow:hidden;
      display:flex;
      flex-direction:column;
    }
    .banner-content{
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:0 70px;
      gap:40px;
    }
    .logo-row{
      display:flex;
      gap:20px;
      align-items:center;
      flex-shrink:0;
    }
    .logo-row img{height:110px;}

    .hero-title{
      text-align:left;
      font-size:44px;
      font-weight:700;
      letter-spacing:.5px;
      margin:0;
      padding:0;
      z-index: 1 !important;
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
      border-radius:50px;
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
      color:#091161;
      margin:32px 0 10px 0;
      font-size:1.35rem;
      letter-spacing:.5px;
    }
    .layanan-row{
      display:flex;
      justify-content:center;
      gap: 160px;
      margin-bottom:8px;
      flex-wrap:wrap;
    }
    .layanan-list{
      font-size:1.08rem;
      color:#091161;
      margin-bottom:0;
      padding-left:0;
      list-style:none;
      width:300px;  
    }
    .layanan-list:last-child{
      width:180px;
    }
    .layanan-list li{
      margin-bottom:2px;
      font-weight:400;
    }
    .layanan-list .judul{
      font-weight:700;
      margin-bottom:6px;
      color:#091161;
      font-size:1.12rem;
      list-style:none;
    }
    .layanan-list .jenis{
      font-weight:700;
      margin-bottom:6px;
      color:#091161;
      font-size:1.12rem;
      list-style:none;
    }
    .section-manfaat{
      background: none;
      margin:0 auto;
      width:1100px;
      margin-top:48px;
      margin-bottom:18px;
      position:relative;
      z-index:2;
    }
    
    .manfaat-card h5{
      font-weight:700;
      font-size:1.35rem;
      margin-bottom:16px;
      color:var(--deep-1);
      letter-spacing:.5px;
            padding: 0 1.5rem;
    }
    .manfaat-card p{
      margin-bottom:16px;
      font-size:1.08rem;
      line-height:1.7;
      color:#233;
      text-align:justify;
      padding: 0 1.5rem;
    }
    .manfaat-item{
      margin-bottom:18px;
      padding-bottom:18px;
            padding: 0 1.5rem;
    }
    .manfaat-item:last-of-type{
      border-bottom:none;
    }
    .manfaat-item h6{
      font-weight:700;
      font-size:1.12rem;
      color:var(--deep-1);
      margin-bottom:8px;
    }
    .manfaat-item p{
      margin-bottom:12px;
    }
    @media (max-width:900px){
      .section-manfaat{max-width:98vw;}
      .manfaat-card{padding:20px;}
    }
    .icon-section{
      background: linear-gradient(180deg,var(--deep-1),var(--deep-2));
      border-top-left-radius:50px;
      border-top-right-radius:50px;
      margin:50px auto 0 auto;
      padding:50px 0 50px 0;
      box-shadow:0 12px 32px rgba(11,42,102,0.12);
      display:flex;
      justify-content:center;
      gap:45px;
    }
    .icon-box{
      background:var(--card);
      border-radius:20px;
      width:160px;
      height:160px;
      text-align:center;
      box-shadow:0 8px 18px rgba(15,23,42,0.06);
      color:var(--deep-1);
      font-weight:600;
      font-size:16px;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      gap:8px;
    }
    .icon-box img{
      width:80px;
      height:80px;
    }
    .icon-box a.icon-link{
      display:inline-block;
      background:none;
      border:none;
      padding:0;
      color:inherit;
      text-decoration:none;
      font-weight:600;
      font-size:16px;
      line-height:1.1;
    }
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
</head>
<body>

  <header class="top-banner" role="banner">

    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    @include('navbar')
    <div class="banner-content">
      <div class="hero-title">SAMSAT <br> TANJUNGPINANG</div>
      <div class="logo-row">
        <img src="{{ asset('image/polantas.webp') }}" alt="Korlantas">
        <img src="{{ asset('image/logo-kepri.webp') }}" alt="Polda Kepri">
        <img src="{{ asset('image/jasa-raharja.webp') }}" alt="Jasa Raharja">
      </div>
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
        <li class="judul">Pelayanan pada Kantor Samsat<br>Tanjungpinang terdiri dari :</li>
        <li>1. Perpanjangan Pajak 1 Tahun</li>
        <li>2. Perpanjangan Pajak 5 Tahun<br>atau Ganti STNK</li>
        <li>3. Rubentina</li>
        <li>4. Balik Nama</li>
        <li>5. Cek Fisik</li>
        <li>6. Mutasi</li>
      </ul>
      <ul class="layanan-list">
        <li class="jenis">Jenis Layanan :</li>
        <li>1. Samsat Bergerak (SAMBER) </li>
        <li>2. Samsat Keliling (SAMLING) </li>
        <li>3. Samsat Corner</li>
        <li>4. Pelantar Emas</li>
      </ul>
    </div>

    <section class="section-manfaat">
      <div class="manfaat-card">
        <h5>Manfaat Bayar Pajak Kendaraan Tepat Waktu</h5>
        <p>Membayar pajak kendaraan tepat waktu memiliki berbagai manfaat yang sangat penting, baik untuk pemilik kendaraan maupun untuk kepentingan bersama. Berikut adalah beberapa manfaat utama dari membayar pajak kendaraan tepat waktu:</p>

        <div class="manfaat-item">
          <h6>1). Menghindari Denda dan Sanksi</h6>
          <p>Salah satu manfaat utama dari membayar pajak kendaraan tepat waktu adalah menghindari denda keterlambatan. Setiap keterlambatan dalam pembayaran pajak kendaraan akan dikenakan denda yang jumlahnya dapat bertambah seiring berjalannya waktu.</p>
          <p>Dengan membayar tepat waktu, Anda dapat menghemat biaya tambahan dan menghindari masalah hukum yang bisa timbul akibat kelalaian dalam pembayaran.</p>
        </div>

        <div class="manfaat-item">
          <h6>2). Memperoleh Kendaraan yang Terdaftar Secara Legal</h6>
          <p>Pajak kendaraan yang dibayar tepat waktu adalah salah satu syarat agar kendaraan tetap sah secara hukum dan terdaftar dengan baik di sistem kependudukan. Hal ini penting untuk memastikan kendaraan Anda memiliki dokumen yang lengkap dan legal.</p>
          <p>Kendaraan yang tidak membayar pajak atau pajaknya sudah kadaluarsa bisa menghadapi masalah seperti tidak bisa diperpanjang STNK (Surat Tanda Nomor Kendaraan) atau tidak dapat melakukan perpanjangan registrasi kendaraan.</p>
        </div>

        <div class="manfaat-item">
          <h6>3). Mendukung Pembangunan Infrastruktur dan Layanan Publik</h6>
          <p>Pajak kendaraan yang dibayarkan tepat waktu akan digunakan untuk mendanai berbagai proyek pembangunan infrastruktur, seperti perbaikan jalan raya, pembangunan jembatan, dan peningkatan fasilitas transportasi lainnya.</p>
          <p>Dengan membayar pajak kendaraan tepat waktu, Anda berkontribusi pada peningkatan kualitas infrastruktur dan fasilitas publik yang dapat meningkatkan kenyamanan dan keamanan bagi seluruh masyarakat.</p>
        </div>

        <div class="manfaat-item">
          <h6>4). Mencegah Kendaraan Ditahan atau Ditarik</h6>
          <p>Jika Anda terus-menerus menunggak pembayaran pajak kendaraan, kendaraan Anda dapat dikenakan tindakan tegas oleh pihak berwenang, seperti ditahan atau ditarik.</p>
          <p>Dengan membayar tepat waktu, Anda dapat menghindari potensi masalah ini dan memastikan kendaraan Anda tetap bisa digunakan tanpa gangguan.</p>
        </div>

        <p style="margin-top:20px; ">Secara keseluruhan, membayar pajak kendaraan tepat waktu tidak hanya menguntungkan pemilik kendaraan, tetapi juga memberikan dampak positif bagi masyarakat dan pemerintah dalam meningkatkan kualitas layanan dan pembangunan daerah.</p>
      </div>
    </section>

    <section class="icon-section">
      <div class="icon-box">
        <img src="{{ asset('image/icon-informasi.webp') }}" alt="Info Pelayanan" />
        <div><a href="{{ route('informasi') }}" class="icon-link">Informasi<br>Lebih Lanjut</a></div>
      </div>
      <div class="icon-box">
        <img src="{{ asset('image/icon-kalender.webp') }}" alt="Jadwal Samsat" />
        <div><a href="{{ route('layanan.jadwal-samsat') }}" class="icon-link">Jadwal<br>Samsat</a></div>
      </div>
      <div class="icon-box">
        <img src="{{ asset('image/icon-speaker.webp') }}" alt="Laporan" />
        <div><a href="{{ route('laporan') }}" class="icon-link">Laporan</a></div>
      </div>
    </section>
  </main>

  @include('footer')
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
