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
            padding:28px 0 72px;
            margin-top: -35px;
            border-bottom-left-radius:88px;
            border-bottom-right-radius:88px;
            position:relative;
            overflow:hidden;
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
            font-size:1.7rem; 
            font-weight:800; 
            color:#fff; 
        }
        .hero p.lead{ 
            margin-left: 40px; 
            margin-right: 40px;
            max-width:820px; 
            color:rgba(255,255,255,0.92); 
            line-height:1.5; 
            font-size:1.0rem; 
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
        </style>
    </head>
    <body>
        <header class="top-banner" role="banner">
            <div class="dec a" aria-hidden="true"></div>
            <div class="dec b" aria-hidden="true"></div>

    <div class="hero" role="region" aria-label="Profil SAMSAT">
        @include('navbar')
    </div>
        </header>
            <section class="section-definisi">
                <div class="definisi-card">
                    <h5>PELANTAR EMAS</h5>
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