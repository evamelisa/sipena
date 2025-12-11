<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/informasi.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
  <title>Informasi - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

</head>
<body>

  <header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Informasi">
      <h1>Panduan Administrasi Kendaraan</h1>
      <p class="lead">Panduan lengkap syarat dan proses pembayaran pajak, balik nama, mutasi kendaraan, duplikat STNK, serta perubahan bentuk atau warna kendaraan.</p>
    </div>
  </header>

  <main>
    <section class="section-card" aria-labelledby="bayar-1">
      <h4 id="bayar-1">Pembayaran Pajak 1 Tahunan</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP (asli)</li>
        <li>SKPD (notice pajak) (asli)</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Membawa kelengkapan berkas.</li>
        <li>Mengambil Nomor Antrian.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket Pendaftaran Ulang 1 Tahun untuk pendaftaran dan pendataan.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yang sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK dan SKPD di Loket Penyerahan.</li>
      </ul>
    </section>

    <section class="section-card" aria-labelledby="bayar-5">
      <h4 id="bayar-5">Pembayaran Pajak 5 Tahunan</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP (asli)</li>
        <li>SKPD (notice pajak) (asli)</li>
        <li>BPKB (asli dan fotocopy)</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai Berkas.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket Pendaftaran Ulang 5 Tahun untuk pendaftaran dan pendataan.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yang sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK, SKPD dan TNKB (Plat Nomor) di Loket Penyerahan.</li>
      </ul>
    </section>

    <section class="section-card" aria-labelledby="duplikat-stnk">
      <h4 id="duplikat-stnk">Proses Duplikat (Kehilangan) STNK</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>KTP (asli)</li>
        <li>BPKB (asli dan fotocopy)</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Mengambil berkas Arsip Kendaraan Bermotor (diambil di Gudang Arsip POLRI yang ada di SAMSAT dimana kendaraan terdaftar).</li>
        <li>Membawa Surat Kehilangan dari POLSEK setempat (diselesaikan terlebih dahulu).</li>
        <li>Membawa Surat Keterangan dari Biro OPS POLRES/POLRESTABES (diselesaikan terlebih dahulu).</li>
        <li>Membawa Berita Acara Pemeriksaan dari Reserse POLRES/POLRESTABES (diselesaikan terlebih dahulu).</li>
        <li>Membawa Surat Keterangan dari INFOLAHTA POLDA (diselesaikan terlebih dahulu).</li>
        <li>Membawa Kwitansi Iklan (iklan kehilangan kendaraan) dan potongan iklan di media cetak (Iklan di Media Cetak 2x tayangan) (diselesaikan terlebih dahulu).</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai berkas.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket Pendaftaran Duplikat untuk pendaftaran dan pendataan.</li>
        <li>Menunggu 14 hari dari tanggal iklan terakhir (iklan kehilangan kendaraan).</li>
        <li>Kembali ke Loket Pendaftaran Duplikat untuk konfirmasi dan mendaftar proses Duplikat.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yg sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK dan SKPD di Loket Penyerahan.</li>
      </ul>
    </section>

    <section class="section-card" aria-labelledby="mutasi-keluar">
      <h4 id="mutasi-keluar">Proses Mutasi Keluar (Cabut Berkas)</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP Pemilik baru (asli dan fotocopy)</li>
        <li>BPKB (asli dan fotocopy)</li>
        <li>Kwitansi pembelian kendaraan dari pemilik sebelumnya (bila ganti kepemilikan)</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Mengambil berkas Arsip Kendaraan Bermotor (diambil di Gudang Arsip POLRI yang ada di SAMSAT dimana kendaraan terdaftar).</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai berkas.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket Pendaftaran Mutasi Keluar untuk pendaftaran dan pendataan.</li>
        <li>Menunggu proses pengambilan berkas, pengecekan berkas dan Rekomendasi Mutasi dari POLDA setempat (sesuai waktu yang telah ditentukan petugas berwenang).</li>
        <li>Kembali ke Loket Pendaftaran Mutasi Keluar untuk konfirmasi dan mendaftar proses Mutasi Keluar.</li>
        <li>Melakukan pembayaran pajak di Loket Pembayaran apabila terdapat tunggakan sesuai dengan jumlah yg sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan seluruh berkas dan Fiskal Antar Daerah di Loket Mutasi Keluar.</li>
        <li>Menuju SAMSAT tujuan untuk selanjutnya melakukan Proses Pendaftaran Mutasi Masuk.</li>
      </ul>

    </section>

    <section class="section-card" aria-labelledby="mutasi-masuk">
      <h4 id="mutasi-masuk">Proses Mutasi Masuk</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP Pemilik baru (asli dan fotocopy)</li>
        <li>BPKB (asli dan fotocopy)</li>
        <li>Kwitansi pembelian kendaraan dari pemilik sebelumnya (bila ganti kepemilikan)</li>
        <li>Arsip Kendaraan Bermotor (dari SAMSAT asal kendaraan terdaftar)</li>
        <li>Fiskal Antar Daerah</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Menuju Loket Mutasi untuk mendapatkan Rekomendasi dari POLDA setempat dan membayar PNBP (biaya BPKB, STNK & Plat Nomor).</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai berkas.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket BPKB untuk melakukan pembayaran PNBP penggantian BPKB baru di Loket Bank dan menyerahkan BPKB asli dan fotocopy berkas untuk selanjutnya diproses penggantian BPKB baru atas nama pemilik baru.</li>
        <li>Apabila Mutasi Masuk Atas Nama Tetap hanya akan dilakukan pencatatan dan registrasi pada BPKB tanpa ada penggantian BPKB baru.</li>
        <li>Menuju Loket Pendaftaran Mutasi Masuk untuk pendaftaran dan pendataan.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yg sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK, SKPD dan TNKB (Plat Nomor) di Loket Penyerahan.</li>
        <li>Kembali ke Loket BPKB untuk pengambilan BPKB baru sesuai tanggal pengambilan BPKB.</li>
      </ul>
    </section>

    <section class="section-card" aria-labelledby="balik-nama">
      <h4 id="balik-nama">Proses Balik Nama Kendaraan</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP Pemilik Baru (asli)</li>
        <li>SKPD (notice pajak) (asli)</li>
        <li>BPKB (asli dan fotocopy)</li>
        <li>Kwitansi pembelian kendaraan dari pemilik sebelumnya</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Mengambil berkas Arsip Kendaraan Bermotor (diambil di Gudang Arsip POLRI yang ada di SAMSAT dimana kendaraan terdaftar).</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai berkas.</li>
        <li>Menuju Loket Mutasi Dalam Kota untuk mendapatkan Rekomendasi pindah wilayah dari POLDA dan membayar biaya PNBP (BPKB, STNK & Plat).</li>
        <li>Menuju Loket Progresif untuk mengetahui Progresif Kendaraan.</li>
        <li>Menuju Loket BPKB untuk melakukan pembayaran PNBP penggantian BPKB baru di Loket Bank dan menyerahkan BPKB asli dan fotocopy berkas untuk selanjutnya diproses penggantian BPKB baru atas nama pemilik baru.</li>
        <li>Menuju Loket Pendaftaran BBN II untuk pendaftaran dan pendataan.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yg sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK, SKPD dan TNKB (Plat Nomor) di Loket Penyerahan.</li>
        <li>Kembali ke Loket BPKB untuk pengambilan BPKB baru sesuai tanggal pengambilan BPKB.</li>
      </ul>
    </section>

    <section class="section-card" aria-labelledby="rubah-bentuk">
      <h4 id="rubah-bentuk">Rubah Bentuk dan/atau Ganti Warna</h4>
      <h5>Persyaratan</h5>
      <ol class="section-list">
        <li>STNK (asli)</li>
        <li>KTP (asli)</li>
        <li>SKPD (notice pajak) (asli)</li>
        <li>BPKB (asli dan fotocopy)</li>
      </ol>
      <h5>Proses</h5>
      <ul class="section-list">
        <li>Menuju tempat Cek Fisik lalu bawa hasil Cek Fisik tersebut (kendaraan wajib dibawa untuk proses penggesekan nomor rangka dan nomor mesin yang disahkan oleh petugas yang berwenang).</li>
        <li>Mengambil berkas Arsip Kendaraan Bermotor (diambil di Gudang Arsip POLRI yang ada di SAMSAT dimana kendaraan terdaftar).</li>
        <li>Mengambil Keterangan Rubah Bentuk dan/atau Ganti Warna dari Bengkel (Bengkel yang memiliki NPWP dan SIUP) tempat perubahan bentuk dan atau warna kendaraan bersangkutan.</li>
        <li>Foto kendaraan sebelum dan sesudah perubahan.</li>
        <li>Mengambil Formulir Pendaftaran di Loket Formulir dan mengisi data sesuai berkas.</li>
        <li>Menuju Loket Progresif untuk mengetahui progresif kendaraan.</li>
        <li>Menuju Loket Pendaftaran Rubentina untuk pendaftaran dan pendataan.</li>
        <li>Menunggu panggilan untuk pembayaran pajak dan melakukan pembayaran pajak di Loket Pembayaran sesuai dengan jumlah yg sudah ditetapkan.</li>
        <li>Menunggu panggilan untuk pengambilan STNK, SKPD dan TNKB (Plat Nomor) di Loket Penyerahan.</li>
      </ul>
    </section>
      @include('footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>