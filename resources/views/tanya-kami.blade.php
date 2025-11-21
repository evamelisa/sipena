<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Layanan Aspirasi dan Pengaduan Rakyat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <style>
        :root{
            --deep-1:#0b2a66;
            --deep-2:#163a8a;
            --accent:#6c7cf0;
            --bg:#f4f6fb;
            --card:#ffffff;
            --muted:#6b7a90;
        }
        *{box-sizing:border-box}
        body{font-family:'Poppins',sans-serif;background:var(--bg);margin:0;color:#233;overflow-x:hidden;}
        .top-banner{
            background: linear-gradient(90deg,var(--deep-1),var(--deep-2));
            color:#fff;
            padding:28px 0 72px;
            border-bottom-left-radius:88px;
            border-bottom-right-radius:88px;
            position:relative;
            overflow:hidden;
        }
        .hero-title{
            text-align:center;
            font-size:1.85rem;
            font-weight:700;
            letter-spacing:.5px;
            margin-top:32px;
            margin-bottom:0;
            color: #0b2a66;
        }
        .section-form{
            margin:0 auto;
            max-width:1000px;
            margin-top:24px;
            margin-bottom:18px;
            position:relative;
            z-index:2;
        }
        .form-card{
            background:var(--deep-2);
            color:#ffffff;
            border-radius:18px;
            padding:28px 28px 18px 28px;
            box-shadow:0 8px 32px rgba(11,42,102,0.10);
            font-size:1.08rem;
            margin-bottom:0;
        }
        .form-card h5{
            font-weight:700;
            font-size:1.15rem;
            margin-bottom:18px;
            text-align:left;
            color:#fff;
            letter-spacing:.5px;
        }
        .form-label{font-weight:600;color:#fff;}
        .form-select, .form-control{
            border-radius:6px;
            border:1px solid #dbe9ff;
            margin-bottom:12px;
            font-size:1rem;
            background:#fff;
            color:#233;
        }
        .form-control:focus, .form-select:focus{
            border-color:var(--accent);
            box-shadow:0 0 0 2px #6c7cf0;
        }
        .form-btn{
            background:var(--deep-1);
            color:#fff;
            border:none;
            border-radius:6px;
            padding:8px 24px;
            font-weight:600;
            font-size:1rem;
            margin-top:8px;
            cursor:pointer;
            transition:background .2s;
        }
        .form-btn:hover{background:var(--accent);}
    </style>
</head>
<body>
    <header class="top-banner" role="banner">
    <div class="dec a" aria-hidden="true"></div>
    <div class="dec b" aria-hidden="true"></div>

    <div class="d-flex justify-content-center" style="padding-top:6px; position:relative; z-index:2;">
        @include('navbar')
    </div>
    </header>
    <main class="stage" role="main">
        <div class="hero-title">Layanan Aspirasi dan Pengaduan Rakyat</div>
        <div style="text-align:center;margin:8px 0 18px 0;font-size:1.5rem;color:var(--deep-2);">
        </div>
        <section class="section-form">
            <form class="form-card" method="POST" action="#">
                <h5>Sampaikan Laporan Anda</h5>
                <div class="mb-2">
                    <label for="klasifikasi" class="form-label">Pilih Klasifikasi Laporan</label>
                    <select id="klasifikasi" name="klasifikasi" class="form-select">
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Aspirasi">Aspirasi</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required />
                </div>
                <div class="mb-2">
                    <label for="judul" class="form-label">Judul Laporan Anda</label>
                    <input type="text" id="judul" name="judul" class="form-control" required />
                </div>
                <div class="mb-2">
                    <label for="isi" class="form-label">Ketik Isi Laporan Anda</label>
                    <textarea id="isi" name="isi" class="form-control" rows="4" required></textarea>
                </div>
                <div class="mb-2">
                    <label for="tanggal" class="form-label">Pilih Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required />
                </div>
                <div class="mb-2">
                    <label for="layanan" class="form-label">Pilih Layanan</label>
                    <select id="layanan" name="layanan" class="form-select">
                        <option value="Kantor Samsat">Kantor Samsat</option>
                        <option value="Samsat Corner">Samsat Corner</option>
                        <option value="Samsat Bergerak">Samsat Bergerak</option>
                        <option value="Samsat Bergerak">Samsat Keliling</option>
                        <option value="Pelantar Emas">Pelantar Emas</option>

                    </select>
                </div>
                <button type="submit" class="form-btn">Laporkan</button>
            </form>
        </section>
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
</head>
<body>  
</html>