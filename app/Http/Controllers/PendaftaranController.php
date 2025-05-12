<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Tampilkan form pendaftaran
     */
    public function create(Request $request)
    {
        // Ambil parameter dari URL
        $harga = $request->query('harga', 300000);
        
        // Tampilkan view dengan parameter
        return view('pengguna.pendaftaran', compact( 'harga'));
    }

    /**
     * Proses form pendaftaran
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'kode_bahasa' => 'required|in:English,Jepang,Mandarin,Korea,Spanyol,Jerman',
            'durasi' => 'required|integer|min:1',
            'harga' => 'required|numeric'
        ]);

        // Simpan data pendaftaran ke session
        session([
            'nama' => $validated['nama'],
            'telepon' => $validated['telepon'],
            'alamat' => $validated['alamat'],
            'kode_bahasa' => $validated['kode_bahasa'],
            'durasi' => $validated['durasi'],
            'harga' => $validated['harga']
        ]);

        // Redirect ke halaman pembayaran dengan data yang diperlukan
        return redirect()->route('pembayaran.create');
    }
}
