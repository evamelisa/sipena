<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Samsat Corner - Layanan SAMSAT</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 2rem auto 4rem auto;
      max-width: 800px;
      background: white;
      color: #000;
      padding: 0 1rem;
      text-align: center;
      user-select: text;
    }
    nav.navbar {
      display: inline-flex;
      background-color: #0b1a5f;
      border-radius: 0 0 20px 20px;
      overflow: hidden;
      margin-bottom: 3rem;
      box-shadow: 0 4px 6px rgba(11, 26, 95, 0.4);
    }
    nav.navbar a {
      padding: 0.75rem 2rem;
      color: #c1c1c1;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      border-radius: 0 0 20px 20px;
      transition: color 0.3s ease;
    }
    nav.navbar a:hover:not(.active) {
      color: #f0c600;
      cursor: pointer;
    }
    nav.navbar a.active {
      background: white;
      color: #0b1a5f;
      font-weight: 700;
      box-shadow: 0 2px 12px rgba(11, 26, 95, 0.7);
      cursor: default;
    }
    .service-title {
      background-color: #0b1a5f;
      border-radius: 20px;
      padding: 0.5rem 1.5rem;
      color: white;
      font-weight: 700;
      font-size: 1.2rem;
      display: inline-block;
      margin-bottom: 2rem;
      box-shadow: 0 4px 6px rgba(11, 26, 95, 0.6);
      user-select: none;
    }
    .content-box {
      background-color: #0b1a5f;
      border-radius: 30px;
      padding: 2rem 3rem;
      color: white;
      text-align: justify;
      line-height: 1.5;
      font-size: 1rem;
      box-shadow: 0 4px 10px rgba(11, 26, 95, 0.6);
      white-space: pre-line;
      margin-bottom: 6rem;
    }
    footer {
      border-top: 1px solid #ccc;
      padding: 1.5rem 2rem;
      color: #333;
      font-size: 0.9rem;
      display: flex;
      justify-content: space-between;
      max-width: 800px;
      margin: 0 auto 0 auto;
      user-select: text;
    }
    footer div {
      width: 45%;
      text-align: left;
    }
    footer strong {
      display: block;
      margin-bottom: 0.3rem;
      font-weight: 700;
    }
    @media (max-width: 700px) {
      nav.navbar {
        width: 100vw;
        justify-content: center;
      }
      .content-box {
        padding: 1.5rem 1.5rem;
      }
      footer {
        flex-direction: column;
        gap: 1rem;
        font-size: 0.85rem;
        text-align: center;
      }
      footer div {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar" aria-label="Navigasi Layanan SAMSAT">
    <a href="/samsat.corner.blade.php">Samsat Corner</a>
    <a href="/kantor.samsat.blade.php">Kantor Samsat</a>
  </nav>

  <div class="service-title">SAMSAT CORNER</div>

  <div class="content-box" tabindex="0">
Samsat Corner adalah layanan mini Samsat yang ditempatkan di lokasi-lokasi strategis seperti pusat perbelanjaan, kantor pemerintahan, dan area publik lainnya. Layanan ini dirancang untuk mendekatkan akses pembayaran pajak kendaraan bermotor kepada masyarakat, sehingga mereka tidak perlu repot mengunjungi kantor Samsat yang sering kali jauh dan penuh antrian. Fasilitas dan Layanan di Samsat Corner.

Pembayaran Pajak Kendaraan Bermotor:
Samsat Corner melayani pembayaran pajak tahunan kendaraan bermotor dengan cepat dan efisien. Proses pembayaran yang sederhana dan tidak memakan waktu lama menjadi salah satu keunggulan utama layanan ini.

Informasi dan Konsultasi:
Petugas yang ramah dan profesional siap memberikan informasi dan konsultasi terkait administrasi kendaraan bermotor, seperti cara perpanjangan STNK, perubahan data kepemilikan, dan lain-lain.

Pembayaran Non-Tunai:
Untuk meningkatkan kenyamanan, Samsat Corner menyediakan opsi pembayaran non-tunai melalui kartu debit/kredit dan aplikasi pembayaran digital. Hal ini mempermudah masyarakat yang tidak membawa uang tunai.
  </div>

  <footer role="contentinfo" aria-label="Kontak dan jam layanan">
    <div>
      <strong>Hubungi Kami</strong>
      <p>UPTD PPD TANJUNGPINANG</p>
      <p>Jalan Basuki Rahmad, No.10, Tanjungpinang</p>
      <p>(0771) 21581</p>
    </div>
    <div>
      <strong>Jam Layanan</strong>
      <p>Senin - Jumat : 06.00 - 15.00</p>
      <p>Sabtu : 08.00 - 12.00</p>
      <p>uptppdpinang@gmail.com</p>
    </div>
  </footer>

</body>
</html>
