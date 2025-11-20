<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Samsat Corner - Layanan SAMSAT</title>

  <style>
    /* Reset dan font */
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #fefefe;
  color: #0b146b;
  user-select: text;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Navbar */
nav.navbar {
  max-width: 600px;
  margin: 3rem auto 4rem auto;
  display: flex;
  justify-content: center;
  gap: 0;
  background-color: #0b146b;
  border-radius: 0 0 40px 40px;
  box-shadow: 0 6px 18px rgba(11, 20, 107, 0.7);
  overflow: hidden;
  user-select: none;
}

nav.navbar a {
  flex: 1;
  padding: 0.8rem 0;
  text-align: center;
  color: #bfcaff;
  text-decoration: none;
  font-weight: 600;
  font-size: 1.1rem;
  transition: background-color 0.3s, color 0.3s;
  user-select: none;
}

nav.navbar a.active,
nav.navbar a:hover {
  background-color: #070d48;
  color: white;
  cursor: pointer;
}

nav.navbar a.active {
  font-weight: 700;
  cursor: default;
}

/* Judul layanan - tombol */
.service-title {
  max-width: 200px;
  margin: 0 auto 2rem auto;
  background-color: #0b146b;
  color: white;
  font-weight: 700;
  font-size: 1rem;
  padding: 0.4rem 1.8rem;
  border-radius: 25px;
  box-shadow: 0 5px 20px rgb(15 23 124 / 0.9);
  user-select: none;
}

/* Konten utama */
.content-box {
  background-color: #0b146b;
  max-width: 650px;
  margin: 0 auto 4rem auto;
  color: white;
  font-size: 0.92rem;
  line-height: 1.5;
  padding: 2.3rem 3rem;
  border-radius: 25px;
  box-shadow: 0 4px 15px rgb(10 15 70 / 0.8);
  text-align: justify;
  white-space: pre-line;
  user-select: text;
}

/* Footer */
footer[role="contentinfo"] {
  max-width: 600px;
  margin: 0 auto 3rem auto;
  display: flex;
  justify-content: space-around;
  background-color: white;
  padding: 1rem 2.75rem;
  border-radius: 24px;
  box-shadow: 0 7px 25px rgb(11 18 47 / 0.1);
  font-size: 0.81rem;
  color: #0b146b;
  font-weight: 600;
  user-select: text;
}

footer[role="contentinfo"] > div {
  width: 45%;
  text-align: center;
}

footer[role="contentinfo"] > div > strong {
  display: block;
  font-size: 0.9rem;
  margin-bottom: 0.6rem;
  font-weight: 700;
  user-select: none;
}

footer[role="contentinfo"] p {
  margin: 0.2rem 0;
}

/* Responsif */
@media (max-width: 600px) {
  nav.navbar {
    max-width: 90vw;
    border-radius: 0 0 25px 25px;
  }
  nav.navbar a {
    font-size: 1rem;
  }
  .service-title {
    max-width: 90vw;
    font-size: 1.05rem;
    padding: 0.6rem 2rem;
  }
  .content-box {
    max-width: 95vw;
    font-size: 0.9rem;
    padding: 2rem 1.5rem;
  }
  footer[role="contentinfo"] {
    flex-direction: column;
    gap: 1.25rem;
    padding: 1rem 1.5rem;
  }
  footer[role="contentinfo"] > div {
    width: 100%;
    text-align: center;
  }
}

  </style>
<body>

  <nav class="navbar" aria-label="Menu Navigasi Layanan SAMSAT">
    <a href="/beranda">Beranda</a>
    <a href="/profil">Profil</a>
    <a href="/layanan">Layanan</a>
    <a href="/lainnya">Lainnya</a>
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
      <p>Jalan Basuki Rahmat, No.10, Tanjungpinang</p>
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
