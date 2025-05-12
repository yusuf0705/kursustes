<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Tampilkan form pembayaran
     */
    public function create()
    {
        $kode_bahasa = session('kode_bahasa');
        $harga = session('harga');

        if (!$kode_bahasa || !$harga) {
            return redirect()->route('pendaftaran.create')->with('error', 'Data tidak lengkap.');
        }

        return view('pengguna.pembayaran', compact('kode_bahasa', 'harga'));
    }
    public function success(Request $request)
    {
        $validated = $request->validate([
            'metode' => 'required|in:Transfer,E-Wallet,Kartu Kredit',
            'no_rek' => 'required|string|max:50'
        ]);

        // Simpan jika perlu
        // ...

        return redirect()->route('materi.show', ['kodeBahasa' => session('kode_bahasa')]);
    }
}
