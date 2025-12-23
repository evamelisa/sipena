<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/samsat-corner.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

  <title>SAMSAT CORNER - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

</head>
<body>

  <header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Layanan / CORNER">
      <h1>SAMSAT CORNER</h1>
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