<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Halaman Layanan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 2rem;
      background: #fff;
      color: #000;
    }

    /* Navigation Menu Container */
    .nav-container {
      max-width: 400px;
      margin: 0 auto 4rem auto;
      background-color: #0b1a5f;
      border-radius: 0 0 20px 20px;
      display: flex;
    }

    /* Menu Items */
    .nav-item {
      flex: 1;
      text-align: center;
      padding: 0.75rem 0;
      color: #c1c1c1;
      cursor: pointer;
      font-weight: 600;
      transition: color 0.3s ease;
      user-select: none;
      font-size: 1.1rem;
      border-radius: 0 0 20px 20px;
    }

    /* Active menu item */
    .nav-item.active {
      background: white;
      color: #0b1a5f;
      font-weight: 700;
      box-shadow: 0 2px 10px rgba(11, 26, 95, 0.5);
    }

    /* Layanan grid container */
    .layanan-container {
      max-width: 600px;
      margin: 0 auto 4rem auto;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.25rem;
    }

    /* Each layanan box */
    .layanan-box {
      background-color: #0b1a5f;
      color: white;
      padding: 2rem 1rem;
      font-weight: 700;
      text-align: center;
      border-radius: 15px;
      cursor: pointer;
      user-select: none;
      transition: background-color 0.3s ease;
      font-size: 0.9rem;
    }

    .layanan-box:hover {
      background-color: #152f9f;
    }

    /* Footer container */
    .footer-container {
      max-width: 900px;
      margin: 0 auto;
      padding: 1.5rem 2rem;
      border: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
      font-size: 0.9rem;
      line-height: 1.4;
      color: #333;
    }

    /* Footer columns */
    .footer-column {
      flex: 1;
    }

    .footer-column p {
      margin: 0.2rem 0;
    }

    /* Email style */
    .footer-email {
      margin-top: 0.5rem;
      font-style: italic;
      color: #0b1a5f;
    }

    /* Responsive for mobile */
    @media (max-width: 700px) {
      .layanan-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
      }
      .footer-container {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <nav class="nav-container" aria-label="Menu layanan">
    <div class="nav-item">Beranda</div>
    <div class="nav-item">Profil</div>
    <div class="nav-item active" aria-current="page">Layanan</div>
    <div class="nav-item">Lainnya</div>
  </nav>

  <section class="layanan-container">
    <div class="layanan-box">KANTOR SAMSAT</div>
    <div class="layanan-box">SAMSAT CORNER</div>
    <div class="layanan-box">SAMSAT BERGERAK</div>
    <div class="layanan-box">SAMSAT KELILING</div>
    <div class="layanan-box">PELANTAR EMAS</div>
    <div class="layanan-box">JADWAL SAMSAT</div>
  </section>

  <footer class="footer-container">
    <div class="footer-column">
      <p><strong>Hubungi Kami</strong></p>
      <p>UPTD PPD TANJUNGPINANG</p>
      <p>Jalan Basuki Rahmad, No.10, Tanjungpinang</p>
      <p>(0771) 21581</p>
    </div>
    <div class="footer-column">
      <p><strong>Jam Layanan</strong></p>
      <p>Senin - Jumat : 06.00 - 15.00</p>
      <p>Sabtu : 08.00 - 12.00</p>
      <p class="footer-email">uptdppdtpi@gmail.com</p>
    </div>
  </footer>
</body>
</html>
