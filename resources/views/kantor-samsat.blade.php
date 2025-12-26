<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/kantor-samsat.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

    <title>Kantor Samsat - Layanan Pajak Kendaraan Lengkap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
</head>
<body>
   <header class="top-banner" role="banner">
    @include('navbar')
    <div class="hero" role="region" aria-label="Layanan / kantor samsat">
        <h1>KANTOR SAMSAT</h1>
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

    <div class="container" id="regulasi">
        <h2><strong>Regulasi Pajak Kendaraan</strong></h2>
        <p>Berikut adalah beberapa regulasi penting terkait pajak kendaraan bermotor di Indonesia:</p>
        <ul class="regulations">
            <li><strong>Undang-Undang No. 22 Tahun 2009:</strong> Tentang Lalu Lintas dan Angkutan Jalan, yang mengatur pajak kendaraan.</li>
            <li><strong>Peraturan Pemerintah No. 60 Tahun 2016:</strong> Tentang Jenis dan Tarif atas Jenis Penerimaan Negara Bukan Pajak yang berlaku pada Kementerian Dalam Negeri.</li>
            <li><strong>Peraturan Daerah:</strong> Setiap daerah memiliki peraturan daerah (Perda) yang mengatur tarif pajak kendaraan, seperti PKB (Pajak Kendaraan Bermotor).</li>
            <li><strong>Denda Keterlambatan:</strong> Denda sebesar 2% per bulan dari pokok pajak yang belum dibayar, maksimal 24 bulan.</li>
            <li><strong>SWDKLLJ:</strong> Sumbangan Wajib Dana Kecelakaan Lalu Lintas Jalan, yang wajib dibayar saat membayar pajak.</li>
        </ul>
    </div>

    <div class="container container-wide" id="galeri">
        <h2><strong>Galeri</strong></h2>
        <div class="gallery">
                <figure class="gallery-item">
                    <a href="{{ asset('image/kantorSamsat.webp') }}" class="gallery-link" data-src="{{ asset('image/kantorSamsat.webp') }}" aria-label="Buka gambar Kantor Samsat (di halaman)">
                        <img src="{{ asset('image/kantorSamsat.webp') }}" alt="kantor samsat">
                    </a>
                    <figcaption>Kantor Samsat</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/pelayanann.webp') }}" class="gallery-link" data-src="{{ asset('image/pelayanann.webp') }}" aria-label="Buka gambar Layanan Pajak (di halaman)">
                        <img src="{{ asset('image/pelayanann.webp') }}" alt="Layanan Informasi">     
                    </a>
                    <figcaption>Infomasi</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/ruang tunggu.webp') }}" class="gallery-link" data-src="{{ asset('image/ruang tunggu.webp') }}" aria-label="Buka gambar Pendaftaran Kendaraan (di halaman)">
                        <img src="{{ asset('image/ruang tunggu.webp') }}" alt="Ruang Tunggu">
                    </a>
                    <figcaption>Ruang Tunggu</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/mutasi.webp') }}" class="gallery-link" data-src="{{ asset('image/mutasi.webp') }}" aria-label="Buka gambar Mutasi Kendaraan (di halaman)">
                        <img src="{{ asset('image/mutasi.webp') }}" alt="Mutasi Kendaraan">
                    </a>
                    <figcaption>Mutasi Kendaraan</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/bayar pajak.webp') }}" class="gallery-link" data-src="{{ asset('image/bayar pajak.webp') }}" aria-label="Buka gambar Pengurusan SIM (di halaman)">
                        <img src="{{ asset('image/bayar pajak.webp') }}" alt="Pengurusan pajak kendaraan">
                    </a>
                    <figcaption>Loket Pelayanan Pajak Kendaraan</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/bpkb.webp') }}" class="gallery-link" data-src="{{ asset('image/bpkb.webp') }}" aria-label="Buka gambar Konsultasi (di halaman)">
                        <img src="{{ asset('image/bpkb.webp') }}" alt="Konsultasi">
                    </a>
                    <figcaption>Pengurusan BPKB</figcaption>
                </figure>
                    <figure class="gallery-item">
                    <a href="{{ asset('image/STNK.webp') }}" class="gallery-link" data-src="{{ asset('image/STNK.webp') }}" aria-label="Buka gambar ruang tunggu anak (di halaman)">
                        <img src="{{ asset('image/STNK.webp') }}" alt="Ruang Tunggu Anak">
                    </a>
                    <figcaption>Pengurusan STNK</figcaption>
                    </figure>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/kasir.webp.jpeg') }}" class="gallery-link" data-src="{{ asset('image/kasir.webp.jpeg') }}" aria-label="Buka gambar Loket Pembayaran (di halaman)">
                        <img src="{{ asset('image/kasir.webp.jpeg') }}" alt="Loket Pembayaran">
                    </a>
                    <figcaption>Loket Pembayaran</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/pojok baca.webp') }}" class="gallery-link" data-src="{{ asset('image/pojok baca.webp') }}" aria-label="Buka gambar pojok bacaan (di halaman)">
                        <img src="{{ asset('image/pojok baca.webp') }}" alt="Pojok Bacaan">
                    </a>
                    <figcaption>Pojok Bacaan</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/tmpt bermain.webp') }}" class="gallery-link" data-src="{{ asset('image/tmpt bermain.webp') }}" aria-label="Buka gambar tempat bermain anak (di halaman)">
                        <img src="{{ asset('image/tmpt bermain.webp') }}" alt="tempat bermain anak">
                    </a>
                    <figcaption>Tempat Bermain Anak</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/pengaduan.webp') }}" class="gallery-link" data-src="{{ asset('image/pengaduan.webp') }}" aria-label="Buka gambar ruangan menyusui (di halaman)">
                        <img src="{{ asset('image/pengaduan.webp') }}" alt="Ruangan Menyusui">
                    </a>
                    <figcaption> Ruang pengaduan</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/cek fisik.webp') }}" class="gallery-link" data-src="{{ asset('image/cek fisik.webp') }}" aria-label="Buka gambar cek fisik roda 2 (di halaman)">
                        <img src="{{ asset('image/cek fisik.webp') }}" alt="cek fisik roda 2">
                    </a>
                    <figcaption>Cek Fisik Roda 2</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/Parkir_Grid.webp') }}" class="gallery-link" data-src="{{ asset('image/Parkir_Grid.webp') }}" aria-label="Buka gambar parkiran roda 2 (di halaman)">
                        <img src="{{ asset('image/Parkir_Grid.webp') }}" alt="parkiran roda 2">
                    </a>
                    <figcaption>Parkiran Roda 2</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/parkir roda 4 & cek fisik .webp') }}" class="gallery-link" data-src="{{ asset('image/parkir roda 4 & cek fisik .webp') }}" aria-label="Buka gambar parkiran roda 4 & cek fisik (di halaman)">
                        <img src="{{ asset('image/parkir roda 4 & cek fisik .webp') }}" alt="parkiran roda 4 dan cek fisik">
                    </a>
                    <figcaption>Parkiran Roda 4 & cek fisik</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/Musholaa.webp') }}" class="gallery-link" data-src="{{ asset('image/Musholaa.webp') }}" aria-label="Buka gambar mushola (di halaman)">
                        <img src="{{ asset('image/Musholaa.webp') }}" alt="mushola">
                    </a>
                    <figcaption>Mushola</figcaption>
                </figure>
                <figure class="gallery-item">
                    <a href="{{ asset('image/Toilet_Grid.webp') }}" class="gallery-link" data-src="{{ asset('image/Toilet_Grid.webp') }}" aria-label="Buka gambar toilet umum (di halaman)">
                        <img src="{{ asset('image/Toilet_Grid.webp') }}" alt="Toilet umum">
                    </a>
                    <figcaption>Toilet umum</figcaption>
                </figure>
                
        </div>
    </div>
    
    <!-- Lightbox modal -->
    <div id="lightbox" class="lightbox" aria-hidden="true">
        <div class="lightbox-overlay" data-close></div>
        <div class="lightbox-dialog" role="dialog" aria-modal="true">
            <button class="lightbox-close" aria-label="Tutup">×</button>
            <img class="lightbox-img" src="" alt="">
            <div class="lightbox-caption"></div>
        </div>
    </div>

    <script>
        (function(){
            const links = document.querySelectorAll('.gallery-link');
            const lightbox = document.getElementById('lightbox');
            const lbImg = lightbox.querySelector('.lightbox-img');
            const lbCaption = lightbox.querySelector('.lightbox-caption');
            const lbClose = lightbox.querySelector('.lightbox-close');
            const lbOverlay = lightbox.querySelector('[data-close]');

            function open(src, caption){
                lbImg.src = src;
                lbImg.alt = caption || '';
                lbCaption.textContent = caption || '';
                lightbox.classList.add('open');
                lightbox.setAttribute('aria-hidden', 'false');
                lbClose.focus();
            }
            function close(){
                lightbox.classList.remove('open');
                lightbox.setAttribute('aria-hidden', 'true');
                lbImg.src = '';
            }

            links.forEach(a => {
                a.addEventListener('click', function(e){
                    e.preventDefault();
                    const src = this.getAttribute('data-src') || this.href;
                    const caption = this.closest('figure')?.querySelector('figcaption')?.textContent || '';
                    open(src, caption);
                });
            });

            lbClose.addEventListener('click', close);
            lbOverlay.addEventListener('click', close);
            document.addEventListener('keydown', function(e){
                if(e.key === 'Escape' && lightbox.classList.contains('open')) close();
            });
        })();
    </script>
    @include('footer')
</body>
</html>