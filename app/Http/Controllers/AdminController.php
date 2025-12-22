<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Tampilkan dashboard admin
     */
    public function dashboard(\Illuminate\Http\Request $request)
    {
        $q = $request->query('q');

        $query = Laporan::query();

        if ($q) {
            $query->where(function($sub) use ($q) {
                $sub->where('judul', 'like', "%{$q}%")
                    ->orWhere('isi', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('klasifikasi', 'like', "%{$q}%")
                    ->orWhere('layanan', 'like', "%{$q}%");
            });
        }

        $laporan = $query->orderBy('created_at', 'desc')
                         ->paginate(10)
                         ->withQueryString();

        return view('admin.dashboard', compact('laporan', 'q'));
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
