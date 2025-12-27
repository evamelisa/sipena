<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/samsat-bergerak.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

  <title>SAMSAT BERGERAK - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

</head>
<body>

  <header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Layanan / samber">
      <h1>SAMSAT BERGERAK</h1>
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
    <section class="info-card" aria-labelledby="samber-title">
      <h2 id="samber-title" class="samber-title">SAMSAT BERGERAK</h2>
      <P class="content-box">Samsat Bergerak adalah layanan mobile yang memanfaatkan kendaraan khusus yang dilengkapi dengan fasilitas pelayanan administrasi kendaraan bermotor. Layanan ini menjangkau masyarakat di berbagai lokasi, terutama di daerah-daerah yang jauh dari kantor Samsat utama atau daerah dengan akses terbatas. Berikut layanan yang ada pada Samsat Bergerak.</P>

      <section class="samber-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="samber-box" tabindex="0">
          <strong>Pembayaran Pajak Kendaraan Bermotor:</strong>
          Samsat Bergerak melayani pembayaran pajak tahunan kendaraan bermotor, termasuk penerbitan Surat Ketetapan Pajak Daerah (SKPD) dan tanda bukti pelunasan kewajiban pembayaran pajak.  
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pelayanan Cepat dan Efisien:</strong>
          Proses administrasi di Samsat Bergerak dirancang untuk meminimalisir waktu tunggu, sehingga masyarakat dapat menyelesaikan urusan mereka dengan cepat.  
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pelayanan di Lokasi Strategis:</strong>
          Samsat Bergerak ditempatkan di lokasi-lokasi strategis seperti pusat keramaian, pasar, atau area perkantoran untuk memudahkan akses masyarakat.
        </div>

        <div class="samber-box" tabindex="0">
          <strong>Pembayaran Non-Tunai:</strong>
          Untuk meningkatkan kenyamanan dan keamanan, Samsat Bergerak menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital.
        </div>
    </section>

  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>