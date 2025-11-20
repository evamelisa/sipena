    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Profil SAMSAT Tanjungpinang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
        <style>
        :root{
            --deep-1:#0b2a66;
            --deep-2:#163a8a;
            --bg:#f4f6fb;
            --card:#ffffff;
            --muted:#6b7a90;
        }
        *{box-sizing:border-box}
        body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;overflow-x:hidden;}
        html, body { font-size: 15px; } /* font lebih besar */

        .top-banner{
            background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
            color:#fff;
            padding:25px 0 50px;
            border-bottom-left-radius:88px;
            border-bottom-right-radius:88px;
            position:relative;
            overflow:hidden;
        }
        
        .nav-pills-centered{ 
            display:inline-flex; 
            gap:.35rem; 
            background: rgba(255,255,255,0.06); 
            padding:6px 10px; 
            border-radius:999px; 
            box-shadow:0 8px 26px rgba(11,42,102,0.12); 
        }
        .nav-pills-centered .nav-link{
            color:#fff;
            padding:.35rem .9rem;
            border-radius:30px;
            font-weight:600;
            font-size:1.08rem;
            opacity:.98;
        }
        .nav-pills-centered .nav-link.active{
            background: rgba(255,255,255,0.12); 
        }
            
            .hero{ 
            text-align:center; 
            max-width:1100px; 
            margin:35px auto 0; 
            padding:0 16px; 
            position:relative; 
            z-index:2; 
        }
        .hero h1{ 
            margin:15px 0; 
            font-size:1.6rem; 
            font-weight:700; 
            color:#fff; 
        }
        .hero p.lead{ 
            margin-left: 40px; 
            margin-right: 40px;
            max-width:820px; 
            color:rgba(255,255,255,0.92); 
            line-height:1.5; 
            font-size:.95rem; 
        }
            .section-definisi{
                background: none;
                margin: 7rem;
                max-width:2000px;
                margin-top:8px;
                margin-bottom:18px;
                position:relative;
                z-index:2;
            }

            .definisi-card{
                background:var(--card);
                color:#233;
                border-radius:40px;
                margin:25px auto;
                padding:28px;
                box-shadow:0 8px 32px rgba(11,42,102,0.10);
                font-size:1.08rem;
                width:300%;
                max-width:1300px;
            
                margin-bottom:17px;
                font-size:1.08rem;
                line-height:1.7;
                color:#233;
                text-align:justify;
            }

            .definisi-card h5 {
                text-align: center;
                font-weight: 700;
            }


/* Bisa tambahkan styling berbeda jika mau */
.visi-box {
    border-left: 6px solid #163a8a;
}

.misi-box {
    border-left: 6px solid #4070b6;
}

            @media (max-width: 800px) {
                .content-box {
                    grid-template-columns: 1fr;
                    padding: 1.2rem;
                }
                .section h2 { margin-bottom: 12px; }
                .visi-text, .misi-list { text-align: left; }
            }

            .footer-info{
                max-width:900px;
                margin:32px auto 24px auto;
                display:flex;
                justify-content:space-between;
                gap:24px;
                flex-wrap:wrap;
                color:#222;
                font-weight:600;
                font-size:1.08rem;
            }
            .footer-info div{ flex-basis:45%; min-width:220px; }
            .footer-info p{ margin:.2rem 0; font-weight:400; color:var(--muted); }
            @media (max-width:900px){
                .section-definisi{max-width:98vw;}
            }
            @media (max-width:600px){
                .footer-info{flex-direction:column;gap:8px;}
                .visi-misi-row{grid-template-columns:1fr;}
            }
        </style>
    </head>
    <body>
        <header class="top-banner" role="banner">

    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
        <div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/profil') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/lainnya') }}">Lainnya</a></li>
            </ul>
        </div>
    </div>

            <div class="hero" role="region" aria-label="Layanan SAMSAT">
        <h1>Profil SAMSAT Tanjungpinang</h1>
        <p class="top">
            Samsat merupakan singkatan dari Sistem Administrasi Manunggal Satu Atap. Kantor ini membawahi tiga instansi di dalamnya. Instansi yang berada di dalam Samsat akan bertanggung jawab dengan lalu lintas, kendaraan, dan pemilik kendaraan tersebut. Ini dia instansi pemerintahan yang terdapat di dalam Samsat.
        </p>
    </div>
        </header>
            <section class="section-definisi">
                <div class="definisi-card">
                    <h5>Tentang SAMSAT</h5>
                    <p>Menurut Peraturan Presiden No 5 Tahun 2015 tentang Penyelenggaraan SAMSAT, SAMSAT sendiri merupakan sebuah rangkaian sistem yang bertujuan untuk menyelenggarakan tugas Bea Balik Nama Kendaraan Bermotor (BBNKB), registrasi serta identifikasi kendaraan bermotor, dan penagihan penerimaan pajak kendaraan bermotor dan biaya yang terkait.</p>
                    <p>Kepemilikan kendaraan bermotor wajib melakukan registrasi dan identifikasi kendaraan bermotor, membayar pajak kendaraan bermotor, dan membayar Sumbangan Wajib Dana Kecelakaan Lalu Lintas dan Angkutan Jalan (SWDKLLJ).</p>
                    <p>Registrasi dan identifikasi kendaraan bermotor dilakukan oleh Kepolisian Negara Republik Indonesia, pemungutan pajak kendaraan bermotor dan Bea Balik Nama Kendaraan Bermotor dilakukan oleh Pemerintah Daerah, dan pengelolaan SWDKLLJ dilakukan oleh PT Jasa Raharja (Persero) yang bertugas mengelola SWDKLLJ.</p>
                </div>
            </section>
            <div class="definisi-card visi-box">
            
                <h2>VISI</h2>
                <p>
                    Terwujudnya Badan Pendapatan Daerah sebagai Organisasi yang Profesional, Transparan, dan Akuntabel dalam rangka Peningkatan Pendapatan Daerah
                </p>
            </div>
            <div class="definisi-card misi-box">
                <h2>MISI</h2>
                <ol class="misi-list">
                    <li>Meningkatnya Profesionalisme Aparatur dalam Rangka Peningkatan Pendapatan Daerah.</li>
                    <li>Menciptakan Keterbukaan, Keadilan dan Kepastian Hukum dalam kegiatan penerimaan Pendapatan Daerah.</li>
                    <li>Meningkatnya Pengawasan terhadap Kegiatan Pendapatan Daerah.</li>
                    <li>Meningkan Pendapatan Daerah Melalui Ekstensifikasi dan Intensifikasi Pendapatan Daerah</li>
                </ol>
            </div>
        </div>
        </main>
        <footer class="footer-info">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>