<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Tampilkan dashboard admin
     */
    public function dashboard()
    {
        // Ambil data laporan dari database dengan pagination (10 per halaman)
        $laporan = Laporan::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.dashboard', compact('laporan'));
    }

    /**
     * Lihat detail laporan
     */
    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('admin.show', compact('laporan'));
    }

    /**
     * Hapus laporan
     */
    public function destroy($id)
    {
        Laporan::findOrFail($id)->delete();
        return redirect('/admin/dashboard')->with('message', 'Laporan berhasil dihapus');
    }
}
