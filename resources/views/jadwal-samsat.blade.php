<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('css/jadwal-samsat.css') }}">
<link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">

<title>JADWAL SAMSAT</title>
</head>

<body>

@include('navbar')

<section class="jadwal-section">
<div class="container-list">

@foreach($jadwal as $item)
<div class="card">
    <h3 class="card-title text-center">{{ $item->nama_layanan }}</h3>
    <p class="alamat text-center">📍 {{ $item->lokasi }}</p>

    <ul class="jadwal">
        <li>
            🗓 {{ $item->hari }} <br>
            {{ $item->jam_mulai }} - {{ $item->jam_selesai }} WIB
        </li>
    </ul>
</div>
@endforeach

</div>
</section>

@include('footer')

</body>
</html>
