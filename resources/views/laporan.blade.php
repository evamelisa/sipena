<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/laporan.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top-banner.css') }}">
    
    <title>Layanan Aspirasi dan Pengaduan Rakyat</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    

<body>
    <header class="top-banner" role="banner">
        @include('navbar')
        <div class="hero-title">Layanan Aspirasi dan Pengaduan Rakyat</div>
    </header>
    
    <main role="main">
        <!-- Notifikasi Success -->
        @if(session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        <!-- Notifikasi Error -->
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul style="margin: 10px 0 0 20px; padding: 0;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="section-form">
            <form class="form-card" method="POST" action="{{ route('laporan') }}">
                @csrf
                
                <div class="info-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12z"/>
                    </svg>
                </div>
                <h5>Sampaikan Laporan Anda</h5>
                
                <div class="form-group-custom">
                    <label for="klasifikasi" class="form-label">Pilih Klasifikasi Laporan</label>
                    <select id="klasifikasi" name="klasifikasi" class="form-select" required>
                        <option value="Pengaduan" {{ old('klasifikasi') == 'Pengaduan' ? 'selected' : '' }}>Pengaduan</option>
                        <option value="Aspirasi" {{ old('klasifikasi') == 'Aspirasi' ? 'selected' : '' }}>Aspirasi</option>
                    </select>
                </div>
                
                <div class="form-group-custom">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" 
                           placeholder="contoh@email.com" value="{{ old('email') }}" required />
                </div>
                
                <div class="form-group-custom">
                    <label for="judul" class="form-label">Judul Laporan Anda</label>
                    <input type="text" id="judul" name="judul" class="form-control" 
                           placeholder="Masukkan judul laporan" value="{{ old('judul') }}" required />
                </div>
                
                <div class="form-group-custom">
                    <label for="isi" class="form-label">Ketik Isi Laporan Anda</label>
                    <textarea id="isi" name="isi" class="form-control" rows="4" 
                              placeholder="Jelaskan laporan Anda secara detail..." required>{{ old('isi') }}</textarea>
                </div>
                
                <div class="form-group-custom">
                    <label for="tanggal" class="form-label">Pilih Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" 
                           value="{{ old('tanggal', date('Y-m-d')) }}" required />
                </div>
                
                <div class="form-group-custom">
                    <label for="layanan" class="form-label">Pilih Layanan</label>
                    <select id="layanan" name="layanan" class="form-select" required>
                        <option value="Kantor Samsat" {{ old('layanan') == 'Kantor Samsat' ? 'selected' : '' }}>Kantor Samsat</option>
                        <option value="Samsat Corner" {{ old('layanan') == 'Samsat Corner' ? 'selected' : '' }}>Samsat Corner</option>
                        <option value="Samsat Bergerak" {{ old('layanan') == 'Samsat Bergerak' ? 'selected' : '' }}>Samsat Bergerak</option>
                        <option value="Samsat Keliling" {{ old('layanan') == 'Samsat Keliling' ? 'selected' : '' }}>Samsat Keliling</option>
                        <option value="Pelantar Emas" {{ old('layanan') == 'Pelantar Emas' ? 'selected' : '' }}>Pelantar Emas</option>
                    </select>
                </div>
                
                <div class="form-btn-wrapper">
                    <button type="submit" class="form-btn">Laporkan</button>
                </div>
            </form>
        </section>
    </main>
    @include('footer')
</body>
</html>