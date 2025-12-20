<?php

namespace App\Http\Controllers;

use App\Models\JadwalSamsat;
use Illuminate\Http\Request;

class JadwalSamsatController extends Controller
{
    // HALAMAN PUBLIK
    public function public()
    {
        $jadwal = JadwalSamsat::where('status', 'aktif')->get();
        return view('jadwal-samsat', compact('jadwal'));
    }

    // ADMIN LIST
    public function index()
    {
        $jadwal = JadwalSamsat::all();
        return view('admin.jadwal-samsatAdmin', compact('jadwal'));
    }

    // ADMIN SIMPAN
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'lokasi' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'status' => 'required'
        ]);

        JadwalSamsat::create($request->all());
        return back()->with('success', 'Jadwal ditambahkan');
    }

    // ADMIN UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'lokasi' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'status' => 'required'
        ]);

        $jadwal = JadwalSamsat::findOrFail($id);
        $jadwal->update($request->all());

        return back()->with('success', 'Jadwal diperbarui');
    }

    // ADMIN HAPUS
    public function destroy($id)
    {
        JadwalSamsat::destroy($id);
        return back()->with('success', 'Jadwal dihapus');
    }
}