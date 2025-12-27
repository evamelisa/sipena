<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Beranda Samsat Tanjungpinang</title>
</head>
<body>

<!-- Navigasi -->
  <nav class="nav-container">
    <ul class="nav-menu">
      <li class="active">Beranda</li>
      <li>Profil</li>
      <li>Layanan</li>
      <li>Lainnya</li>
    </ul>
  </nav>

<header class="header-main">
  <div class="header-title">
      SAMSAT<br />
      TANJUNGPINANG
    </div>
  <div class="logos">
    <img src="{{ asset('image/korlantas.png') }}" alt="Logo Korlantas">
    <img src="{{ asset('image/kepri.png') }}" alt="Logo Kepri">
    <img src="{{ asset('image/jrh.png') }}" alt="Logo JRH">
  </div>
</header>

<main>
  <p>
    <strong>Sejarah SAMSAT!</strong><br />
    SAMSAT Tanjungpinang diresmikan pada tanggal 15 April 1982 yang merupakan SAMSAT Pemerintah Tk.I Provinsi Riau sebelum terbentuknya Provinsi Kepulauan Riau. Sejak tahun 2005 diambil alih Kantor Unit Pelayanan Teknis Tanjungpinang yang selanjutnya terjadi perubahan nama menjadi Unit Pelaksana Teknis (UPT) SAMSAT Tanjungpinang terdiri atas 3 (tiga) instansi yaitu Kepolisian Resor Kota Tanjungpinang, Dinas Pendapatan Daerah Propinsi Kepulauan Riau serta Jasa Raharja.
  </p>
  <p>
    Tujuan dibentuknya SAMSAT Tanjungpinang adalah untuk meningkatkan pelayanan dalam penerbitan STNK, TNKB dan Pemungutan PKB, BBN-KB serta SWDKLLJ, Kantor ini terletak diatas tanah seluas ± 5000 . Kantor tersebut berada diwilayah Kota Tanjungpinang pada Jl. Basuki Rahmat No.10 Km.4 Kota Tanjungpinang.
  </p>
</main>

<section class="services">
  <div class="left">
    <h3>LAYANAN LENGKAP</h3>
    <p><strong>Pelayanan pada Kantor Samsat Tanjungpinang terdiri dari:</strong></p>
    <ol>
      <li>Perpanjangan Pajak 1 Tahun</li>
      <li>Perpanjangan Pajak 5 Tahun atau ganti STNK</li>
      <li>Rubentina</li>
      <li>Balik nama</li>
      <li>Cek Fisik</li>
      <li>Mutasi</li>
    </ol>
  </div>
  <div class="right">
    <h3>&nbsp;</h3>
    <p><strong>Jenis Layanan:</strong></p>
    <ul>
      <li>Samsat Bergerak (SAMBER)</li>
      <li>Samsat Keliling (SAMLING)</li>
      <li>Samsat Corner</li>
      <li>Pelantar Emas</li>
    </ul>
  </div>
</section>

<div class="white-square">
<section class="icons-section">
  <div class="icon-box">
   <img src="{{ asset('image/info.png') }}" alt="Logo Info">
    <p>Info Pelayanan</p> 
  </div>
  <div class="icon-box">
    <img src="{{ asset('image/kalender.png') }}" alt="Logo Kalender">
    <p>Jadwal Pelayanan</p>
  </div>
  <div class="icon-box">
    <img src="{{ asset('image/toa.png') }}" alt="Logo Toa">
    <p>Informasi Pengumuman</p>
  </div>
</section>
</div>

<footer>
  <div>
    <p><strong>Alamat</strong></p>
    <p>JL.BASUKI RAHMAD NO.10 TANJUNGPINANG</p>
    <p>UPTD PPD TANJUNG PINANG</p>
  </div>
  <div>
    <p><strong>Kontak</strong></p>
    <p>Telp: (0771) 1234567</p>
    <p>Email: info@samsat-tpi.go.id</p>
  </div>
</footer>

</body>
</html>