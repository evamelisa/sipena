<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil SAMSAT Tanjungpinang</title>
    <link rel="stylesheet" href="{{ asset('css/Profil.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <header class="top-banner" role="banner">
        @include('navbar')

        <div class="hero" role="region" aria-label="Profil SAMSAT">
            <h1>Profil SAMSAT Tanjungpinang</h1>
            <p>
                Samsat merupakan singkatan dari Sistem Administrasi Manunggal Satu Atap. Kantor ini membawahi tiga instansi di dalamnya. Instansi yang berada di dalam Samsat akan bertanggung jawab dengan lalu lintas, kendaraan, dan pemilik kendaraan tersebut.
            </p>
        </div>
    </header>

    <main>
        <div class="content-wrapper">
            <!-- Tentang SAMSAT -->
            <div class="content-card">
                <h5>Tentang SAMSAT</h5>
                <p>
                    Menurut Peraturan Presiden No 5 Tahun 2015 tentang Penyelenggaraan SAMSAT, SAMSAT sendiri merupakan sebuah rangkaian sistem yang bertujuan untuk menyelenggarakan tugas Bea Balik Nama Kendaraan Bermotor (BBNKB), registrasi serta identifikasi kendaraan bermotor, dan penagihan penerimaan pajak kendaraan bermotor dan biaya yang terkait.
                </p>
                <p>
                    Kepemilikan kendaraan bermotor wajib melakukan registrasi dan identifikasi kendaraan bermotor, membayar pajak kendaraan bermotor, dan membayar Sumbangan Wajib Dana Kecelakaan Lalu Lintas dan Angkutan Jalan (SWDKLLJ).
                </p>
                <p>
                    Registrasi dan identifikasi kendaraan bermotor dilakukan oleh Kepolisian Negara Republik Indonesia, pemungutan pajak kendaraan bermotor dan Bea Balik Nama Kendaraan Bermotor dilakukan oleh Pemerintah Daerah, dan pengelolaan SWDKLLJ dilakukan oleh PT Jasa Raharja (Persero) yang bertugas mengelola SWDKLLJ.
                </p>
            </div>

            <!-- Visi -->
            <div class="content-card visi-box">
                <h2>VISI</h2>
                <p>
                    Terwujudnya Badan Pendapatan Daerah sebagai Organisasi yang Profesional, Transparan, dan Akuntabel dalam rangka Peningkatan Pendapatan Daerah
                </p>
            </div>

            <!-- Misi -->
            <div class="content-card misi-box">
                <h2>MISI</h2>
                <ol class="misi-list">
                    <li>Meningkatnya Profesionalisme Aparatur dalam Rangka Peningkatan Pendapatan Daerah.</li>
                    <li>Menciptakan Keterbukaan, Keadilan dan Kepastian Hukum dalam kegiatan penerimaan Pendapatan Daerah.</li>
                    <li>Meningkatnya Pengawasan terhadap Kegiatan Pendapatan Daerah.</li>
                    <li>Meningkatnya Pendapatan Daerah Melalui Ekstensifikasi dan Intensifikasi Pendapatan Daerah</li>
                </ol>
            </div>
        </div>
    </main>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>