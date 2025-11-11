<?php
// layanan.php
// Jika kamu punya file navbar terpisah, bisa aktifkan include berikut:
// include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Layanan SAMSAT</title>

</head>
<body>

  <nav class="navbar" aria-label="Menu Navigasi Layanan SAMSAT">
    <a href="/beranda">Beranda</a>
    <a href="/profil">Profil</a>
    <a href="/layanan">Layanan</a>
    <a href="/lainnya">Lainnya</a>
  </nav>

  <section class="layanan-container" aria-label="Pilihan layanan samsat">
    <div class="layanan-button" role="button" onclick="goToPage('{{ route('layanan.kantor-samsat') }}')">KANTOR SAMSAT</div>    
    <div class="layanan-button" role="button" onclick="goToPage('{{ route('layanan.samsat-corner') }}')">SAMSAT CORNER</div>    
    <div class="layanan-button" role="button" onclick="goToPage('{{ route('layanan.samsat-bergerak') }}')">SAMSAT BERGERAK</div>    
    <div class="layanan-button" role="button" onclick="goToPage('{{ route('layanan.samsat-keliling') }}')">SAMSAT KELILING</div>    
    <div class="layanan-button" role="button" onclick="goToPage('pelantar-emas.php')">PELANTAR EMAS</div>
    <div class="layanan-button" role="button" onclick="goToPage('jadwal-samsat.php')">JADWAL SAMSAT</div>
  </section>

  <div class="info-box" role="contentinfo">
    <div class="info-left">
      <strong>Hubungi Kami</strong>
      <p>UPTD PPD TANJUNGPINANG</p>
      <p>Jalan Basuki Rahmat, No.10, Tanjungpinang</p>
      <p><span class="icon icon-phone"></span>(0771) 21581</p>
    </div>

    <div class="info-right">
      <strong>Jam Layanan</strong>
      <p>Senin - Jumat : 08.00 - 15.00</p>
      <p>Sabtu : 08.00 - 12.00</p>
      <p><span class="icon icon-email"></span>uptppdpinang@gmail.com</p>
    </div>

    <div class="corner-top-right"></div>
    <div class="corner-bottom-left"></div>
  </div>

  <script>
    function goToPage(page){
      window.location.href = page;
    }
  </script>

</body>
</html>
