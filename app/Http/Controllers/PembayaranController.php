<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;
use App\Models\Pelajar;
use Illuminate\Support\Facades\Auth;



class PembayaranController extends Controller
{
    public function create()
    {
        $kode_bahasa = session('kode_bahasa');
        $harga = session('harga');
        $pendaftaran_id = session('pendaftaran_id');

        if (!$kode_bahasa || !$harga || !$pendaftaran_id) {
            return redirect()->route('pendaftaran.create')->with('error', 'Data tidak lengkap.');
        }

        return view('pengguna.pembayaran', compact('kode_bahasa', 'harga', 'pendaftaran_id'));
    }

    public function store(Request $request)
{
    // Validasi
    $request->validate([
        'metode' => 'required|string',
        'no_rek' => 'required|string|max:255',
        'bukti' => 'nullable|image|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    $pendaftaran_id = session('pendaftaran_id');
    if (!$pendaftaran_id) {
        return redirect()->route('pendaftaran.create')->with('error', 'Pendaftaran tidak ditemukan.');
    }

    $buktiPath = null;
    if ($request->hasFile('bukti')) {
        $buktiPath = $request->file('bukti')->store('bukti_pembayaran', 'public');
    }

    Pembayaran::create([
        'id_pendaftaran' => $pendaftaran_id,
        'tanggal_bayar' => now(),
        'status' => 'pending',
        'metode_pembayaran' => strtolower($request->metode),
        'no_rek' => $request->no_rek,
        'bukti' => $buktiPath,
    ]);

    return redirect()->route('pembayaran.success')->with('success', 'Pembayaran berhasil disimpan.');


        $pendaftaran_id = session('pendaftaran_id');
        if (!$pendaftaran_id) {
            return redirect()->route('pendaftaran.create')->with('error', 'Pendaftaran tidak ditemukan.');
        }

        $buktiPath = null;

    if ($request->hasFile('bukti')) {
    $buktiPath = $request->file('bukti')->store('bukti_pembayaran', 'public');
}



        // Simpan data pembayaran
        Pembayaran::create([
            'id_pendaftaran' => $pendaftaran_id,
            'tanggal_bayar' => now(),
            'status' => 'pending',
            'metode_pembayaran' => strtolower($request->metode),
            'no_rek' => $request->no_rek,
            'bukti' => $buktiPath,
        ]);

        return redirect()->route('pembayaran.success')->with('success', 'Pembayaran berhasil disimpan.');
    }

    public function success()
    {
return redirect()->route('kursus.index')->with('success', 'Pembayaran berhasil disimpan.');
    }
}
