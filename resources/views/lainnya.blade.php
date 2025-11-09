<?php
// beranda.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beranda SAMSAT</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem 1rem 4rem 1rem;
      background-color: #fff;
      color: #0b1a5f;
      text-align: center;
      user-select: none;
    }

    /* Navbar */
    nav.navbar {
      display: inline-flex;
      background-color: #0b1a5f;
      border-radius: 0 0 30px 30px;
      overflow: hidden;
      user-select: none;
      box-shadow: 0 6px 10px rgba(11, 26, 95, 0.6);
      margin: 0 auto 3rem auto;
      font-size: 1rem;
      font-weight: 600;
    }
    nav.navbar a {
      color: #cfcfcf;
      padding: 0.75rem 1.8rem;
      text-decoration: none;
      border-radius: 0 0 30px 30px;
      transition: color 0.3s;
    }
    nav.navbar a:not(.active):hover {
      color: #fff;
      cursor: pointer;
    }
    nav.navbar a.active {
      background-color: #101c61;
      color: white;
      font-weight: 700;
      border-radius: 0 0 30px 30px;
      cursor: default;
      box-shadow: inset 0 -5px 10px rgba(255, 255, 255, 0.3);
    }

    /* Heading FAQs */
    h2.faqs-title {
      color: #0b1a5f;
      font-weight: 700;
      margin-bottom: 1.5rem;
      user-select: none;
    }

    /* Tanya Kami button */
    button.tanya-kami {
      background-color: #0b1a5f;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 0.8rem 4rem;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      margin-bottom: 3rem;
      transition: background-color 0.3s ease;
      user-select: none;
      box-shadow: 0 4px 8px rgba(11, 26, 95, 0.5);
    }
    button.tanya-kami:hover {
      background-color: #152f9f;
    }

    /* Container for FAQ boxes */
    .faq-container {
      max-width: 980px;
      margin: 0 auto 4rem auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem 2rem;
      user-select: text;
    }

    /* Individual FAQ box */
    .faq-box {
      background-color: white;
      border: 1px solid #0b1a5f;
      border-radius: 8px;
      padding: 1rem 1.3rem;
      font-size: 0.83rem;
      text-align: left;
      color: #0b1a5f;
      box-shadow: 0 2px 5px rgba(11, 26, 95, 0.15);
      white-space: pre-line;
    }
    .faq-box strong {
      display: block;
      margin-bottom: 7px;
      font-weight: 700;
    }

    /* Footer info container */
    footer.footer-info {
      max-width: 980px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      font-size: 0.85rem;
      color: #222;
      font-weight: 600;
      user-select: text;
      gap: 3rem;
      flex-wrap: wrap;
    }
    footer.footer-info div {
      flex-basis: 45%;
      text-align: left;
      min-width: 280px;
    }
    footer.footer-info p {
      margin: 0.2rem 0;
      font-weight: 400;
      line-height: 1.3;
    }

    /* Responsive */
    @media (max-width: 1020px) {
      .faq-container {
        grid-template-columns: repeat(2, 1fr);
      }
      footer.footer-info {
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
      }
      footer.footer-info div {
        flex-basis: 100%;
        text-align: center;
      }
    }
    @media (max-width: 540px) {
      nav.navbar {
        flex-wrap: wrap;
      }
      nav.navbar a {
        flex-basis: 100%;
        padding: 0.8rem 0;
      }
      button.tanya-kami {
        width: 80%;
        padding: 0.8rem 0;
        font-size: 1.1rem;
      }
      .faq-container {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar" aria-label="Navigasi utama">
    <a href="/beranda">Beranda</a>
    <a href="/profil">Profil</a>
    <a href="/layanan">Layanan</a>
    <a href="/lainnya">Lainnya</a>
  </nav>
  </nav>

  <!-- FAQs heading -->
  <h2 class="faqs-title">FAQs</h2>

  <!-- Tanya Kami button -->
  <button class="tanya-kami" onclick="window.location.href='kontak.php'">Tanya Kami</button>

  <!-- Persyaratan dan Pertanyaan -->
  <section class="faq-container" aria-label="Persyaratan pengurusan dan pertanyaan umum">

    <div class="faq-box" tabindex="0">
      <strong>Persyaratan pengurusan PKB Tahunan</strong>
      Membawa KTP Alat Pemilik Kendaraan Bermotor  
      STNK Asli   
      BPKB  
    </div>

    <div class="faq-box" tabindex="0">
      <strong>Persyaratan pengurusan PKB 5 Tahun</strong>
      KTP Alat Pemilik Kendaraan Bermotor  
      STNK (Asli dan fotocopy)  
      BPKB (Asli dan fotocopy)  
      Surat Kuasa Dari Leasing / Badan Hukum  
      - Salinan Akte Pendirian  
      - Keterangan Domisili  
      - Surat Kuasa  
    </div>

    <div class="faq-box" tabindex="0">
      <strong>Persyaratan pengurusan BBN KB</strong>
      KTP Alat Pemilik Kendaraan Bermotor  
      KTP penyertai kendaraan bermotor (KTP pembeli)  
      STNK asli dan fotocopy  
      BPKB asli dan fotocopy  
      Kwitansi pembelian bermaterai  
      Badan Hukum  
      - Salinan Akte Pendirian  
      - Keterangan Domisili  
      - Surat Kuasa  
    </div>

    <div class="faq-box" tabindex="0">
      <strong>Apakah bisa melakukan pembayaran PKB 5 Tahun secara Online?</strong>
      Untuk kepengurusan kendaraan bermotor 5 tahun, harus dilakukan di kantor Samsat Tanjung Pinang karena prosesnya cukup kompleks.
    </div>

    <div class="faq-box" tabindex="0">
      <strong>Bagaimana jika alamat saya sudah tidak di Tanjungpinang lagi?</strong>
      Sebaiknya melakukan Mutasi Kendaraan Keluar wilayah Tanjungpinang dengan melapor ke Kantor Samsat sesuai domisili STNK terlebih dahulu dengan membawa semua dokumen kepemilikan kendaraan.
    </div>

    <div class="faq-box" tabindex="0">
      <strong>Berapa lama waktu yang diperlukan dalam proses pembayaran?</strong>
      Pendaftaran RABENTAS 1 x 60 menit  
      Mutasi Masuk (60 Menit)  
      Mutasi Keluar (60 Menit)  
      Pendaftaran 5 tahun (60 menit)  
      Pemeliharaan STNK 6 Bulan (60 Menit)  
      Perpanjangan BBNKB Asli (60 Menit)  
      Perpanjangan STNK Tahunan (60 menit)
    </div>

  </section>

  <!-- Footer -->
  <footer class="footer-info" aria-label="Informasi kontak dan jam layanan">
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

</body>
</html>
