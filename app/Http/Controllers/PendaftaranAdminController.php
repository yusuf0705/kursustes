<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pendaftaran;


class PendaftaranAdminController extends Controller
{
    
public function index()
{
    $pendaftaranList = Pendaftaran::with(['pelajar', 'kursus', 'pembayaran'])->get();
    return view('admin_tutor.pendaftaranadmin', compact('pendaftaranList'));
}



public function konfirmasi($id)
{
    $pendaftaran = Pendaftaran::findOrFail($id);
    $pendaftaran->status = 'disetujui';
    $pendaftaran->save();

    return redirect()->back()->with('success', 'Pendaftaran berhasil dikonfirmasi.');
}

}