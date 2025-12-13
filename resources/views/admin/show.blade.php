<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Laporan - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <style>
        body{font-family:'Poppins',sans-serif;background:#f4f6fb;margin:0;color:#233}
        .top-banner{background:linear-gradient(90deg,#092a69 0%,#163a8a 100%);color:#fff;padding:18px 28px}
        .container-card{max-width:900px;margin:28px auto;padding:24px;background:#fff;border-radius:12px;box-shadow:0 8px 24px rgba(11,42,102,0.08)}
        .meta{color:#6b7a90;font-size:.95rem}
        .label{font-weight:700;color:#092a69}
        .btn-back{background:#eef3ff;color:#092a69;border:1px solid #dbe9ff;padding:.5rem .9rem;border-radius:8px;text-decoration:none}
        .btn-delete{background:#ffeef0;color:#c82333;border:none;padding:.45rem .7rem;border-radius:8px}
    </style>
</head>
<body>
    <header class="top-banner">
        <div style="max-width:1100px;margin:0 auto;display:flex;justify-content:space-between;align-items:center">
            <h3 style="margin:0">Detail Laporan</h3>
            <a href="{{ route('admin.dashboard') }}" class="btn-back">Kembali ke Dashboard</a>
        </div>
    </header>

    <main>
        <div class="container-card">
            <h4 class="label">{{ $laporan->judul }}</h4>
            <p class="meta">{{ $laporan->klasifikasi }} • {{ $laporan->email }} • {{ $laporan->created_at->format('d/m/Y') }}</p>
            <hr />

            <div style="margin-top:12px">
                <p><strong class="label">Isi Laporan</strong></p>
                <p>{{ $laporan->isi }}</p>
            </div>

            <div style="margin-top:18px">
                <p><strong class="label">Layanan</strong></p>
                <p class="meta">{{ $laporan->layanan ?? '-' }}</p>
            </div>

            <div style="display:flex;gap:12px;margin-top:20px;justify-content:flex-end">
                <form action="{{ route('admin.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus laporan ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Hapus Laporan</button>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
