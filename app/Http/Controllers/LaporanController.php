<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Simpan laporan dari user (CREATE)
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

        Laporan::create([
            'klasifikasi' => $validated['klasifikasi'],
            'email' => $validated['email'],
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'layanan' => $validated['layanan'] ?? null,
            'tanggal' => $validated['tanggal'] ?? now()->toDateString(),
            'status' => 'Baru',
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }

    /**
     * Update laporan oleh admin (UPDATE)
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'catatan_admin' => 'nullable|string',
        ]);

        $laporan = Laporan::findOrFail($id);

        $laporan->update([
    'status' => ucfirst(trim($request->status)),
    'catatan_admin' => $request->catatan_admin
]);


        return redirect()->back()->with('message', 'Laporan berhasil diperbarui.');
    }
}