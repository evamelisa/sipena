<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>JADWAL SAMSAT - UPTD SAMSAT TANJUNGPINANG</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f5f8ff;
      padding: 40px;
      color: #0b2a59;
    }

    .title {
      text-align: center;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 40px;
    }

    /* Layout memanjang (1 kolom) */
    .container-list {
      display: flex;
      flex-direction: column;
      gap: 25px;
      max-width: 800px;
      margin: auto;
    }

    .card {
      background: #ffffff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.08);
      border-left: 6px solid #1e3a8a;
      width: 100%;
    }

    .card-title {
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .alamat {
      font-weight: 600;
      margin-bottom: 12px;
    }

    .jadwal {
      list-style: none;
      padding: 0;
    }

    .jadwal li {
      background: #f2f6ff;
      padding: 10px 14px;
      border-radius: 8px;
      margin-bottom: 8px;
      font-size: 14px;
      text-align: left;
    }
  </style>
</head>

<body>

<section class="jadwal-section">
  <h2 class="title">JADWAL SAMSAT</h2>

  <div class="container-list">

    <div class="card">
      <h3 class="card-title">KANTOR SAMSAT</h3>
      <p class="alamat">📍 Jl. Basuki Rahmad No.10</p>
      <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
        <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
      </ul>
    </div>

    <div class="card">
      <h3 class="card-title">SAMSAT CORNER</h3>
      <p class="alamat">📍 Jl. DI Panjaitan Km.IX</p>
      <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.00 - 15.00 WIB</li>
        <li>🗓 Sabtu <br> 08.00 - 12.00 WIB</li>
      </ul>
    </div>

    <div class="card">
      <h3 class="card-title">SAMSAT BERGERAK 1</h3>
      <p class="alamat">📍 Jl. DI Panjaitan Km 7</p>
      <ul class="jadwal">
        <li>🗓 Senin - Kamis <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Jumat - Sabtu <br> 08.30 - 12.00 WIB</li>
      </ul>
    </div>

    <div class="card">
      <h3 class="card-title">SAMSAT BERGERAK 2</h3>
      <p class="alamat">📍 Jl. Merdeka Pos Polisi Pasar</p>
      <ul class="jadwal">
        <li>🗓 Senin - Jumat <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Sabtu <br> 08.30 - 12.00 WIB</li>
      </ul>
    </div>

    <div class="card">
      <h3 class="card-title">SAMSAT KELILING</h3>
      <ul class="jadwal">
        <li>📍 Senin – Selasa <br> Dompak (Komplek Perkantoran Dompak)</li>
        <li>📍 Rabu – Jumat <br> Bundaran D’green City Km.8</li>
        <li>🗓 Senin - Jumat <br> 08.30 - 13.30 WIB</li>
        <li>🗓 Sabtu <br> 08.30 - 12.00 WIB</li>
      </ul>
    </div>

  </div>
</section>

</body>
</html>
