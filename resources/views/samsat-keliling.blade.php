<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/samsat-keliling.css') }}">  
  <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

  <title>SAMSAT KELILING - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

</head>
<body>

  <header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Layanan / samling">
      <h1>SAMSAT KELILING</h1>
      <div class="samsat-links">
        <a href="{{ url('/samsat-keliling') }}">Samsat Keliling</a>
        <span>|</span>  
        <a href="{{ url('/samsat-corner') }}">Samsat Corner</a>
        <span>|</span>
        <a href="{{ url('/samsat-bergerak') }}">Samsat Bergerak</a>
        <span>|</span>
        <a href="{{ url('/kantor-samsat') }}">Kantor Samsat</a>
        <span>|</span>
        <a href="{{ url('/pelantar-emas') }}">Pelantar Emas</a>
        <span>|</span>
        <a href="{{ url('/jadwal-samsat') }}">Jadwal Samsat</a>
      </div>
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="samling-title">
      <h2 id="samling-title" class="samling-title">SAMSAT KELILING</h2>
      <div class="content-box">
        <p>Samsat Keliling adalah layanan mobile yang menggunakan kendaraan khusus untuk memberikan pelayanan pembayaran pajak kendaraan bermotor dan administrasi terkait. Layanan ini beroperasi dengan mendatangi berbagai lokasi strategis di wilayah tertentu, sehingga memudahkan masyarakat dalam mengakses layanan Samsat tanpa harus datang ke kantor pusat. Berikut layanan yang ada pada Samsat Keliling.</p>
      </div>

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