<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Jadwal Samsat Admin - SAMSAT Tanjungpinang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #f4f6fb;
    margin: 0;
    color: #233;
    padding: 20px;
}

.jadwal-section {
    padding: 50px 0;
}

.container-list {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
}

.card {
    background: #ffffff;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    transition: 0.3s ease;
}

.card:hover {
    transform: translateY(-6px);
}

.card-title {
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 8px;
    color: #092a69;
}

form {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

input, select {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background: #092a69;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #163a8a;
}
</style>
</head>
<body>

<h1>Kelola Jadwal Samsat</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<h2>Tambah Jadwal Baru</h2>
<form method="POST" action="/admin/jadwal-samsat">
@csrf
<input name="nama_layanan" placeholder="Nama Layanan" required>
<input name="lokasi" placeholder="Lokasi" required>
<input name="hari" placeholder="Senin" required>
<input type="time" name="jam_mulai" required>
<input type="time" name="jam_selesai" required>

<select name="status" required>
    <option value="aktif">Aktif</option>
    <option value="libur">Libur</option>
    <option value="ditiadakan">Ditiadakan</option>
</select>

<button type="submit">Simpan</button>
</form>

<hr>

<h2>Daftar Jadwal</h2>
@foreach($jadwal as $j)
<div class="card">
    <form method="POST" action="/admin/jadwal-samsat/{{ $j->id }}">
    @csrf
    @method('PUT')

    <input name="nama_layanan" value="{{ $j->nama_layanan }}" required>
    <input name="lokasi" value="{{ $j->lokasi }}" required>
    <input name="hari" value="{{ $j->hari }}" required>
    <input type="time" name="jam_mulai" value="{{ $j->jam_mulai }}" required>
    <input type="time" name="jam_selesai" value="{{ $j->jam_selesai }}" required>

    <select name="status" required>
        <option value="aktif" @selected($j->status=='aktif')>Aktif</option>
        <option value="libur" @selected($j->status=='libur')>Libur</option>
        <option value="ditiadakan" @selected($j->status=='ditiadakan')>Ditiadakan</option>
    </select>

    <button type="submit">Update</button>
    </form>

    <form method="POST" action="/admin/jadwal-samsat/{{ $j->id }}" style="margin-top: 10px;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</div>
@endforeach

</body>
</html>