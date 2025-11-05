<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Beranda Samsat Tanjungpinang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
      margin: 0;
      padding: 0;
      color: white;
    }
    header {
      background-color: #002a5c;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    header .title {
      font-weight: bold;
      font-size: 1.3rem;
      letter-spacing: 1.5px;
    }
    header .logos {
      display: flex;
      gap: 20px;
      align-items: center;
    }
    header .logos img {
      height: 50px;
      width: auto;
    }
    nav {
      background-color: #00387a;
      display: flex;
      justify-content: center;
      gap: 2rem;
      padding: 1rem 0;
      font-weight: bold;
    }
    nav a {
      color: white;
      text-decoration: none;
      font-size: 1rem;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #ffcc00;
    }
    main {
      background-color: #00387a;
      margin: 2rem auto;
      max-width: 960px;
      padding: 1rem 2rem;
      border-radius: 10px;
      line-height: 1.4;
      font-size: 0.9rem;
    }
    main p {
      margin: 0.8rem 0;
      text-align: justify;
    }
    .services {
      max-width: 960px;
      margin: 2rem auto;
      display: flex;
      gap: 2rem;
      color: white;
    }
    .services .left, .services .right {
      background-color: #002a5c;
      border-radius: 10px;
      padding: 1rem;
      flex: 1;
      font-size: 0.9rem;
    }
    .services h3 {
      text-align:center;
      font-weight: bold;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }
    .quote-section {
      background-color: #002a5c;
      max-width: 960px;
      margin: 2rem auto;
      padding: 1.5rem 2rem;
      border-radius: 10px;
      text-align: center;
      font-style: italic;
      letter-spacing: 0.5px;
      font-size: 0.9rem;
    }
    .icons-section {
      max-width: 960px;
      margin: 2rem auto 4rem auto;
      display: flex;
      justify-content: center;
      gap: 4rem;
    }
    .icon-box {
      background-color: #00387a;
      border-radius: 10px;
      padding: 1rem 1.5rem;
      width: 120px;
      text-align: center;
    }
    .icon-box img {
      width: 40px;
      height: 40px;
      margin-bottom: 0.5rem;
    }
    .icon-box p {
      font-size: 0.75rem;
      line-height: 1.2;
    }
    footer {
      max-width: 960px;
      margin: 0 auto 2rem auto;
      padding: 0 2rem;
      font-size: 0.75rem;
      color: #444;
      display: flex;
      justify-content: space-between;
      border-top: 1px solid #ccc;
    }
    footer div {
      padding: 0.5rem 0;
    }
    @media (max-width: 700px) {
      .services {
        flex-direction: column;
      }
      .icons-section {
        flex-direction: column;
        gap: 1.5rem;
      }
      footer {
        flex-direction: column;
        font-size: 0.7rem;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="title">SAMSAT TANJUNGPINANG</div>
  <div class="logos">
    <img src="https://i.ibb.co/tscFZBK/logo-korlantas.png" alt="Logo Korlantas" />
    <img src="https://i.ibb.co/Gtrh6nj/logo-polda-kepri.png" alt="Logo Polda Kepri" />
    <img src="https://i.ibb.co/xzJHDq7/logo-jsf.png" alt="Logo JSF" />
  </div>
</header>

<nav>
  <a href="#">Beranda</a>
  <a href="#">Profil</a>
  <a href="#">Layanan</a>
  <a href="#">Link</a>
</nav>

<main>
  <p>
    <strong>Selamat SAMSAT!</strong><br />
    SAMSAT Tanjungpinang merupakan UPT (Unit Pelaksana Teknis) yang berada di bawah Dinas Pendapatan Daerah Provinsi Kepulauan Riau, tepatnya di Kota Tanjungpinang, dengan fungsi utama sebagai pelaksana urusan bidang pendapatan daerah dari sektor Pajak Kendaraan Bermotor (PKB) dan Pajak Bahan Bakar Kendaraan Bermotor (PBBKB) dan Bea Balik Nama Kendaraan Bermotor (BBNKB).
  </p>
  <p>
    SAMSAT Tanjungpinang juga secara koordinator koordinasi dengan POLDA KEPRI dalam pelayanan penerbitan STNK, BPKB maupun Pelayanan Pajak Daerah lainnya.
  </p>
  <p>
    Dengan sistem pelayanan yang terintegrasi, memudahkan masyarakat dalam melakukan pembayaran pajak secara cepat, aman dan terpercaya.
  </p>
</main>

<section class="services">
  <div class="left">
    <h3>LAYANAN LENGKAP</h3>
    <p><strong>Pelayanan pada Kantor Samsat Tanjungpinang terdiri dari:</strong></p>
    <ol>
      <li>Pengurusan Pajak 1 Tahun</li>
      <li>Pengurusan Pajak 5 Tahun atau Lebih</li>
      <li>Registrasi Pajak</li>
      <li>Pengisian Data</li>
      <li>Gadai</li>
      <li>Mutasi</li>
    </ol>
  </div>
  <div class="right">
    <h3>&nbsp;</h3>
    <p><strong>Jenis Layanan:</strong></p>
    <ul>
      <li>Servis Kendaraan (Samsat)</li>
      <li>Samsat Keliling (Samsat)</li>
      <li>Samsat Online</li>
      <li>Kantor Samsat</li>
    </ul>
  </div>
</section>

<section class="quote-section">
  "Layanan Indahnya Badan Pendapatan Daerah sebagai Organisasi yang Profesional, Independen dan Akuntabel dalam rangka Peningkatan Pendapatan Daerah"
</section>

<section class="icons-section">
  <div class="icon-box">
    <img src="https://i.ibb.co/y5mTTBQ/icon-info.png" alt="Info Pelayanan" />
    <p>Info Pelayanan</p>
  </div>
  <div class="icon-box">
    <img src="https://i.ibb.co/cTqjZtX/icon-calendar.png" alt="Jadwal Pelayanan" />
    <p>Jadwal Pelayanan</p>
  </div>
  <div class="icon-box">
    <img src="https://i.ibb.co/4tSNT6Q/icon-announcement.png" alt="Informasi Pengumuman" />
    <p>Informasi Pengumuman</p>
  </div>
</section>

<footer>
  <div>
    <p><strong>Alamat</strong></p>
    <p>Jl. Yos Sudarso Km. 8 Tanjungpinang</p>
    <p>Provinsi Kepulauan Riau</p>
  </div>
  <div>
    <p><strong>Kontak</strong></p>
    <p>Telp: (0771) 1234567</p>
    <p>Email: info@samsat-tpi.go.id</p>
  </div>
</footer>

</body>
</html>
