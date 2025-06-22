<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('admin_tutor.jadwal_crud.index', compact('jadwals'));
    }

    public function create()
    {
        return view('admin_tutor.jadwal_crud.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kursus' => 'required|integer',
            'id_tutor' => 'required|integer',
            'hari' => 'required|string',
            'mode_belajar' => 'required|string',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        Jadwal::create($validated);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit(Jadwal $jadwal)
    {
        return view('admin_tutor.jadwal_crud.edit', compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $validated = $request->validate([
            'id_kursus' => 'required|integer',
            'id_tutor' => 'required|integer',
            'hari' => 'required|string',
            'mode_belajar' => 'required|string',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $jadwal->update($validated);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
