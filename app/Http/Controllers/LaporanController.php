<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Tampilkan form laporan (opsional)
     */
    public function create()
    {
        return view('laporan');
    }

    /**
     * Simpan laporan yang dikirim user
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'klasifikasi' => 'required|in:Pengaduan,Aspirasi',
            'email' => 'required|email|max:255',
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'layanan' => 'nullable|string|max:255',
            'tanggal' => 'nullable|date',
        ]);

        $laporan = Laporan::create([
            'klasifikasi' => $validated['klasifikasi'],
            'email' => $validated['email'],
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'layanan' => $validated['layanan'] ?? null,
            // if tanggal provided, save it; otherwise use today
            'tanggal' => $validated['tanggal'] ?? date('Y-m-d'),
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }
}
