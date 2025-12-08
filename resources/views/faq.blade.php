<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/faq.css') }}" />

  <title>FAQs - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>


</head>
<body>

  <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>
    
@include('navbar')
    <div class="hero" role="region" aria-label="Lainnya / FAQs">
      <p class="lead">Pertanyaan dan persyaratan yang sering ditanyakan tentang layanan SAMSAT Tanjungpinang.</p>
    </div>
  </header>

  <main class="stage" role="main">
    <section class="info-card" aria-labelledby="faqs-title">
      <h2 id="faqs-title" class="faqs-title">FAQs</h2>

<a href="{{ route('lainnya.tanya-kami') }}" class="tanya-btn">
    Tanya Kami
</a>

      <section class="faq-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">
        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan PKB Tahunan</strong>
          - Membawa KTP Alat Pemilik Kendaraan Bermotor  
          - STNK Asli   
          - BPKB  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan PKB 5 Tahun</strong>
          - KTP Alat Pemilik Kendaraan Bermotor  
          - STNK (Asli dan fotocopy)  
          - BPKB (Asli dan fotocopy) / Surat Kuasa Dari Leasing
          <strong>Badan Hukum</strong>
          Salinan Akte Pendirian, Keterangan Domisili dan Surat Kuasa  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Persyaratan pengurusan BBN KB</strong>
          - KTP Alat Pemilik Kendaraan Bermotor  
          - KTP penyertai kendaraan bermotor (KTP pembeli)  
          - STNK asli dan fotocopy  
          - BPKB asli dan fotocopy  
          - Kwitansi pembelian bermaterai  
          <strong>Badan Hukum</strong>
          Salinan Akte Pendirian, Keterangan Domisili dan Surat Kuasa  
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Apakah bisa melakukan pembayaran PKB 5 Tahun secara Online?</strong>
          Untuk kepengurusan kendaraan bermotor 5 tahun, harus dilakukan di kantor Samsat Tanjung Pinang karena melibatkan proses yang tidak bisa dilakukan secara online.
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Bagaimana jika alamat saya sudah tidak di Tanjungpinang lagi?</strong>
          Sebaiknya melakukan Mutasi Kendaraan Keluar wilayah Tanjungpinang dengan melapor ke Kantor Samsat sesuai domisili STNK terlebih dahulu dengan membawa semua dokumen kepemilikan kendaraan.
        </div>

        <div class="faq-box" tabindex="0">
          <strong>Berapa lama waktu yang diperlukan dalam proses pembayaran?</strong>
          - Pendaftaran RABENTAS 1 x 60 menit  
          - Mutasi Masuk (60 Menit)  
          - Mutasi Keluar (60 Menit)  
          - Pendaftaran 5 tahun (60 menit)  
          - Pemeliharaan STNK 6 Bulan (60 Menit)  
          - Perpanjangan BBNKB Asli (60 Menit)  
          - Perpanjangan STNK Tahunan (60 menit)
        </div>
      </section>
    </section>
  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@include('footer')
</body>
</html>