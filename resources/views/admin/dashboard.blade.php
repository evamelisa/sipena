<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin - SAMSAT Tanjungpinang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}" />
</head>

<body>

<header class="top-banner">
    <h4 class="m-0">Dashboard Admin</h4>
    <span><i class="fas fa-user-shield"></i> Admin</span>
</header>

<main class="main-content">

    <section class="mb-3">
    <div class="d-flex justify-content-between align-items-start mb-2">
        <div>
            <h3 class="fw-bold text-primary">Laporan Pengaduan Terbaru</h3>
            <p class="text-muted mb-0">Daftar laporan pengaduan yang dikirim oleh masyarakat.</p>
        </div>
        <form method="GET" action="{{ route('admin.dashboard') }}" class="d-flex">
            <input name="q" type="search" class="form-control me-2" placeholder="Cari judul, isi, email, klasifikasi, atau layanan..." value="{{ old('q', request('q')) }}" />
            <button class="btn btn-primary d-flex align-items-center me-2" type="submit">
                <i class="fas fa-search me-1"></i>
                Cari
            </button>
            @if(request('q'))
                <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
        </form>
    </div>
</section>


    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="table-wrapper">

        @if($laporan->count())
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Klasifikasi</th>
                    <th>Email</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Layanan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
@foreach($laporan as $item)
<tr>
    <td>{{ $item->klasifikasi }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->judul }}</td>
    <td>{{ Str::limit($item->isi, 40) }}</td>
    <td>{{ $item->layanan ?? '-' }}</td>
    <td>{{ $item->created_at->format('d/m/Y') }}</td>

    @php
    $status = ucfirst(trim($item->status ?? 'Baru'));
@endphp

<td>
    <span
        class="px-3 py-1 rounded-pill fw-semibold text-white"
        style="
            font-size: 0.8rem;
            background-color:
            @if($status === 'Baru') #6c757d
            @elseif($status === 'Selesai') #198754
            @elseif($status === 'Ditolak') #dc3545
            @else #adb5bd
            @endif
        "
    >
        {{ $status }}
    </span>
</td>



    <td>
    <div class="action-icons">

        <!-- LIHAT DETAIL -->
        <button class="btn-view"
        title="Lihat Detail"
        data-bs-toggle="modal"
        data-bs-target="#detailModal{{ $item->id }}">
        <i class="fas fa-eye"></i>
        </button>
        
        <!-- UPDATE -->
        <button class="btn-view"
            data-bs-toggle="modal"
            data-bs-target="#updateModal{{ $item->id }}">
            <i class="fas fa-edit"></i>
        </button>

        <!-- DELETE -->
        <form action="{{ route('admin.destroy', $item->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus laporan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete">
                <i class="fas fa-trash"></i>
            </button>
        </form>

    </div>
</td>

</tr>
@endforeach
</tbody>

        </table>
        <div class="mt-3">
            {{ $laporan->links() }}
        </div>
        @else
            <p class="text-center text-muted">Belum ada laporan masuk</p>
        @endif

    </div>
</main>

{{-- ================= MODAL DETAIL LAPORAN ================= --}}
@foreach($laporan as $item)
<div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Detail Laporan</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="30%">Klasifikasi</th>
                        <td>{{ $item->klasifikasi }}</td>
                    </tr>
                    <tr>
                        <th>Email Pelapor</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>{{ $item->judul }}</td>
                    </tr>
                    <tr>
                        <th>Isi Laporan</th>
                        <td style="white-space: pre-line;">{{ $item->isi }}</td>
                    </tr>
                    <tr>
                        <th>Layanan</th>
                        <td>{{ $item->layanan ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge
                                {{ $item->status == 'Baru' ? 'bg-secondary' :
                                ($item->status == 'Selesai' ? 'bg-success' :
                                ($item->status == 'Ditolak' ? 'bg-danger' : 'bg-warning text-dark')) }}">
                                {{ $item->status }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Catatan Admin</th>
                        <td>{{ $item->catatan_admin ?? 'Belum ada catatan' }}</td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>
@endforeach

{{-- ================= MODAL UPDATE STATUS ================= --}}
@foreach($laporan as $item)
<div class="modal fade" id="updateModal{{ $item->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form method="POST" action="{{ route('admin.laporan.update', $item->id) }}">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title">Update Status Laporan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="Baru" {{ $item->status=='Baru'?'selected':'' }}>Baru</option>
                            <option value="Diproses" {{ $item->status=='Diproses'?'selected':'' }}>Diproses</option>
                            <option value="Selesai" {{ $item->status=='Selesai'?'selected':'' }}>Selesai</option>
                            <option value="Ditolak" {{ $item->status=='Ditolak'?'selected':'' }}>Ditolak</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Catatan Admin</label>
                        <textarea name="catatan_admin"
                            class="form-control"
                            rows="3"
                            placeholder="Tulis tindak lanjut...">{{ $item->catatan_admin }}</textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        Simpan Perubahan
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endforeach



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
