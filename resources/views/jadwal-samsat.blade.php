<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Jadwal SAMSAT</title>
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
			padding:0 0 0 0;
			border-bottom-left-radius:32px;
			border-bottom-right-radius:32px;
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
			margin-top:18px;
			justify-content:center;
			width:100%;
		}
		.nav-pills-centered .nav-link{
			color:#fff;
			padding:.35rem .9rem;
			border-radius:30px;
			font-weight:600;
			font-size:.9rem;
			opacity:.98;
		}
		.nav-pills-centered .nav-link.active{
			background: rgba(255,255,255,0.18);
			border:2px solid #fff;
		}
		.hero-title{
			text-align:center;
			font-size:1.4rem;
			font-weight:700;
			letter-spacing:.5px;
			margin-top:32px;
			margin-bottom:0;
		}
		.jadwal-section{
			margin:0 auto;
			max-width:900px;
			margin-top:24px;
			margin-bottom:18px;
			position:relative;
			z-index:2;
		}
		.jadwal-grid{
			display:grid;
			grid-template-columns:repeat(2,1fr);
			gap:24px;
			margin-bottom:24px;
		}
		.jadwal-card{
			background:var(--deep-2);
			color:#fff;
			border-radius:18px;
			padding:18px 22px 14px 22px;
			box-shadow:0 8px 32px rgba(11,42,102,0.10);
			font-size:1.08rem;
			margin-bottom:0;
			min-width:220px;
		}
		.jadwal-card h5{
			font-weight:700;
			font-size:1.08rem;
			margin-bottom:10px;
			text-align:left;
			color:#dbe9ff;
			letter-spacing:.5px;
		}
		.jadwal-card .jadwal-icon{
			display:inline-block;
			margin-right:8px;
			font-size:1.1rem;
			vertical-align:middle;
		}
		.jadwal-card .jadwal-lokasi{
			font-weight:600;
			margin-bottom:8px;
			display:flex;
			align-items:center;
			gap:6px;
		}
		.jadwal-card .jadwal-hari{
			margin-bottom:2px;
			font-size:.98rem;
			font-weight:500;
		}
		.jadwal-card .jadwal-jam{
			font-size:.98rem;
			color:#dbe9ff;
			font-weight:600;
			margin-bottom:6px;
		}
		.jadwal-keliling{
			background:var(--deep-2);
			color:#fff;
			border-radius:18px;
			padding:18px 22px 14px 22px;
			box-shadow:0 8px 32px rgba(11,42,102,0.10);
			font-size:1.08rem;
			margin-bottom:0;
			margin-top:18px;
		}
		.jadwal-keliling h5{
			font-weight:700;
			font-size:1.08rem;
			margin-bottom:10px;
			text-align:left;
			color:#dbe9ff;
			letter-spacing:.5px;
		}
		.jadwal-keliling .jadwal-hari{
			margin-bottom:2px;
			font-size:.98rem;
			font-weight:500;
		}
		.jadwal-keliling .jadwal-jam{
			font-size:.98rem;
			color:#dbe9ff;
			font-weight:600;
			margin-bottom:6px;
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
			.jadwal-section{max-width:98vw;}
			.jadwal-grid{grid-template-columns:1fr;}
		}
		@media (max-width:600px){
			.footer-info{flex-direction:column;gap:8px;}
		}
	</style>
</head>
<body>
	<header class="top-banner" role="banner">
		<div class="nav-pills-centered" role="navigation" aria-label="Menu utama">
			<ul class="nav mb-0">
				<li class="nav-item"><a class="nav-link" href="/beranda">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
				<li class="nav-item"><a class="nav-link active" href="/layanan">Layanan</a></li>
				<li class="nav-item"><a class="nav-link" href="/lainnya">Lainnya</a></li>
			</ul>
		</div>
	</header>
	<main class="stage" role="main">
		<div class="hero-title">JADWAL SAMSAT</div>
		<section class="jadwal-section">
			<div class="jadwal-grid">
				<div class="jadwal-card">
					<h5>KANTOR SAMSAT</h5>
					<div class="jadwal-lokasi"><span class="jadwal-icon">&#x1F4CD;</span>Jl. Basuki Rahmad No.10</div>
					<div class="jadwal-hari">Senin - Jumat</div>
					<div class="jadwal-jam">08.00 - 15.00 WIB</div>
					<div class="jadwal-hari">Sabtu</div>
					<div class="jadwal-jam">08.00 - 12.00 WIB</div>
				</div>
				<div class="jadwal-card">
					<h5>SAMSAT CORNER</h5>
					<div class="jadwal-lokasi"><span class="jadwal-icon">&#x1F4CD;</span>Jl. DI Panjaitan Km.IX</div>
					<div class="jadwal-hari">Senin - Jumat</div>
					<div class="jadwal-jam">08.00 - 13.00 WIB</div>
					<div class="jadwal-hari">Sabtu</div>
					<div class="jadwal-jam">08.00 - 12.00 WIB</div>
				</div>
				<div class="jadwal-card">
					<h5>SAMSAT BERGERAK I</h5>
					<div class="jadwal-lokasi"><span class="jadwal-icon">&#x1F4CD;</span>Jl. DI Panjaitan Km 7</div>
					<div class="jadwal-hari">Senin - Kamis</div>
					<div class="jadwal-jam">09.00 - 12.00 WIB</div>
					<div class="jadwal-hari">Jumat - Sabtu</div>
					<div class="jadwal-jam">08.00 - 12.00 WIB</div>
				</div>
				<div class="jadwal-card">
					<h5>SAMSAT BERGERAK II</h5>
					<div class="jadwal-lokasi"><span class="jadwal-icon">&#x1F4CD;</span>Jl. Merdeka Pos Polisi Pasar</div>
					<div class="jadwal-hari">Senin - Jumat</div>
					<div class="jadwal-jam">08.00 - 12.00 WIB</div>
					<div class="jadwal-hari">Sabtu</div>
					<div class="jadwal-jam">08.00 - 12.00 WIB</div>
				</div>
			</div>
			<div class="jadwal-keliling">
				<h5>SAMSAT KELILING</h5>
				<div class="jadwal-hari">Senin - Selasa</div>
				<div class="jadwal-jam">Dompak (Komplek Perkantoran Dompak)</div>
				<div class="jadwal-hari">Rabu - Jumat</div>
				<div class="jadwal-jam">Bintan Center (City Km.8 Sebelah Morning Bakery)</div>
				<div class="jadwal-hari">Senin - Jumat</div>
				<div class="jadwal-jam">08.00 - 13.00 WIB</div>
				<div class="jadwal-hari">Sabtu</div>
				<div class="jadwal-jam">08.30 - 12.00 WIB</div>
			</div>
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
