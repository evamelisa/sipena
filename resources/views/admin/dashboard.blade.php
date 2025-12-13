<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin - SAMSAT Tanjungpinang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <style>
        :root{
            --deep-1:#092a69;
            --deep-2:#163a8a;
            --bg:#f4f6fb;
            --card:#ffffff;
            --muted:#6b7a90;
        }
        *{box-sizing:border-box}
        body{
            font-family:'Poppins',sans-serif;
            background:var(--bg);
            margin:0;
            color:#233;
            overflow-x:hidden;
        }

        .top-banner{
            background: linear-gradient(90deg,var(--deep-1) 0%, var(--deep-2) 100%);
            color:#fff;
            padding:20px 40px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 4px 12px rgba(11,42,102,0.1);
        }
        .top-banner h2{
            margin:0;
            font-size:1.5rem;
            font-weight:700;
        }
        .btn-admin{
            background:var(--deep-1);
            color:#fff;
            padding:8px 16px;
            border-radius:25px;
            text-decoration:none;
            display:inline-flex;
            align-items:center;
            gap:8px;
            font-weight:600;
            font-size:.9rem;
        }
        .btn-admin:hover{
            background:var(--deep-2);
            color:#fff;
        }

        .main-content{
            max-width:1200px;
            margin:0 auto;
            padding:40px 20px;
        }

        .section-header{
            margin-bottom:8px;
        }
        .section-header h3{
            font-size:1.5rem;
            font-weight:700;
            color:var(--deep-1);
            margin:0 0 12px 0;
        }
        .section-header p{
            color:var(--muted);
            margin:0;
            font-size:.95rem;
        }

        .table-wrapper{
            background:var(--card);
            border-radius:12px;
            padding:28px;
            box-shadow:0 4px 16px rgba(11,42,102,0.08);
            margin-top:20px;
            overflow-x:auto;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin:0;
        }

        table thead{
            background:#f8f9fa;
            border-bottom:2px solid #dee2e6;
        }

        table th{
            padding:14px;
            text-align:left;
            font-weight:600;
            font-size:.95rem;
            color:var(--deep-1);
        }

        table td{
            padding:14px;
            border-bottom:1px solid #dee2e6;
            font-size:.9rem;
            color:#233;
        }

        table tbody tr:hover{
            background-color:#f8f9fa;
        }

        table tbody tr:last-child td{
            border-bottom:none;
        }

        .action-icons{
            display:flex;
            gap:12px;
            align-items:center;
        }

        .btn-view, .btn-delete{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:32px;
            height:32px;
            border-radius:6px;
            border:none;
            cursor:pointer;
            font-size:1rem;
            transition:all 0.2s ease;
        }

        .btn-view{
            background:rgba(9, 42, 105, 0.1);
            color:var(--deep-1);
        }
        .btn-view:hover{
            background:var(--deep-1);
            color:#fff;
        }

        .btn-delete{
            background:rgba(220, 53, 69, 0.1);
            color:#dc3545;
        }
        .btn-delete:hover{
            background:#dc3545;
            color:#fff;
        }

        .empty-state{
            text-align:center;
            padding:40px;
            color:var(--muted);
        }
        .empty-state i{
            font-size:3rem;
            margin-bottom:16px;
            opacity:0.5;
        }

        @media (max-width:768px){
            .top-banner{
                flex-direction:column;
                gap:16px;
                text-align:center;
            }
            .table-wrapper{
                padding:16px;
                font-size:.85rem;
            }
            table th, table td{
                padding:10px;
            }
        }
    </style>
</head>
<body>

    <header class="top-banner">
        <h2>Laporan masuk</h2>
        <a href="#" class="btn-admin">
            <i class="fas fa-user-shield"></i> Admin
        </a>
    </header>

    <main class="main-content">
        <section class="section-header">
            <h3>Laporan Pengaduan Terbaru</h3>
            <p>Daftar laporan pengaduan yang dikirim oleh masyarakat.</p>
        </section>

        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-wrapper">
            @if($laporan && $laporan->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Klasifikasi Laporan</th>
                            <th>Email</th>
                            <th>Judul Laporan</th>
                            <th>Isi</th>
                            <th>Layanan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporan as $item)
                            <tr>
                                <td><strong>{{ $item->klasifikasi }}</strong></td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ Str::limit($item->isi, 50) }}</td>
                                <td>{{ $item->layanan ?? '-' }}</td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div class="action-icons">
                                        <a href="{{ route('admin.show', $item->id) }}" class="btn-view" title="Lihat detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete" title="Hapus" onclick="return confirm('Yakin ingin menghapus?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div style="margin-top: 20px; display: flex; justify-content: center;">
                    {{ $laporan->links() }}
                </div>
            @else
                <div class="empty-state">
                    <i class="fas fa-inbox"></i>
                    <p>Belum ada laporan masuk</p>
                </div>
            @endif
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
