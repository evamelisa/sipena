<!DOCTYPE html>
<html lang="id">
<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
  <title>Beranda - SAMSAT Tanjungpinang</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>


</head>
<body>

  <header class="top-banner" role="banner">

    @include('navbar')
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

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

    <section class="layanan-section">
      <div class="layanan-title">LAYANAN LENGKAP</div>
      <div class="layanan-row">
        <div class="layanan-box">
          <h6>Pelayanan Kantor SAMSAT</h6>
          <ul>
            <li>Perpanjangan Pajak 1 Tahun</li>
            <li>Perpanjangan Pajak 5 Tahun atau Ganti STNK</li>
            <li>Rubentina</li>
            <li>Balik Nama</li>
            <li>Cek Fisik</li>
            <li>Mutasi</li>
          </ul>
        </div>
        <div class="layanan-box">
          <h6>Jenis Layanan</h6>
          <ul>
            <li>Samsat Bergerak (SAMBER)</li>
            <li>Samsat Keliling (SAMLING)</li>
            <li>Samsat Corner</li>
            <li>Pelantar Emas</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-manfaat">
      <div class="manfaat-card">
        <h5>Manfaat Bayar Pajak Kendaraan Tepat Waktu</h5>
        <p class="manfaat-intro">Membayar pajak kendaraan tepat waktu memiliki berbagai manfaat yang sangat penting, baik untuk pemilik kendaraan maupun untuk kepentingan bersama. Berikut adalah beberapa manfaat utama dari membayar pajak kendaraan tepat waktu:</p>

        <div class="manfaat-grid">
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
        </div>

        <div class="manfaat-footer">
          Secara keseluruhan, membayar pajak kendaraan tepat waktu tidak hanya menguntungkan pemilik kendaraan, tetapi juga memberikan dampak positif bagi masyarakat dan pemerintah dalam meningkatkan kualitas layanan dan pembangunan daerah.
        </div>
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