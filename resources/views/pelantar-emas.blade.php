<!DOCTYPE html>
<html lang="id">
<head>  
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" href="{{ asset('css/pelantar-emas.css') }}">
<link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

<title>Pelantar Emas - SAMSAT Tanjungpinang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

    </head>
    <body>
        <header class="top-banner" role="banner">
            @include('navbar')
            <div class="hero" role="region" aria-label="Pelantar Emas">
                <h1>PELANTAR EMAS</h1>
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
        <section class="content-wrapper">
            <div class="content-card">
                <h5>Pelantar Emas</h5>
                <p>Penerapan inovasi Pelantar Emas Tanjungpinang (Pelayanan Antar Jemput SAMSAT Tanjungpinang) dilaksanakan di Kota Tanjungpinang yang memfasilitasi wajib pajak kendaraan bermotor untuk menjemput pajak kendaraan bermotor tahunan melalui pembayaran non tunai (Aplikasi E-samsat Kepri) dan pembayaran tunai dijemput langsung dengan armada Samsat Bergerak Pelantar Emas Tanjungpinang.</p>
                <p>Permasalahan jarak, keterbatasan waktu, keterbatasan gerak (kaum rentan) serta keterbatasan transportasi yang dimiliki setiap individu merupakan beberapa faktor hambatan masyarakat untuk membayar pajak. Hal inilah yang kemudian menjadi bahan pemikiran UPTD PPD Tanjungpinang untuk menciptakan strategi-strategi yang tepat, jelas dan terukur dalam meningkatkan kualitas pelayanan yang lebih baik. Strategi dan inovasi tentu saja untuk menarik minat dan kesadaran masyarakat dalam membayar Pajak Kendaraan Bermotor (PKB) khususnya PKB Tahunan.</p>
                <p>Dengan penerapan strategi dan inovasi ini tentu diharapkan dapat meningkatkan kesadaran masyarakat dalam melakukan kewajiban membayar Pajak Kendaraan Bermotor. Tidak hanya itu, inovasi Pelantar EmasTanjungpinang merupakan juga bagian dari program mensosialisasikan Pajak dimana petugas pajak dari UPT PPD Tanjungpinang secara pro aktif mendatangi wajib pajak untuk memberikan informasi sekaligus langsung memberlakukan pembayaran pajak kendaraan bermotor di tempat. Inovasi Pelantar Emas Tanjungpinang ini dibuat memang untuk memudahkan masyarakat dalam membayar pajak kendaraan bermotor, karena tidak perlu datang ke kantor SAMSAT untuk pembayaran pajak kendaraan bermotor (PKB).</p>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @include('footer')
</body>
</html>