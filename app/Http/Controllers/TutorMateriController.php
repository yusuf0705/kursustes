<?php

namespace App\Http\Controllers;

use App\Models\Tutormateri;
use Illuminate\Http\Request;

class TutormateriController extends Controller
{
    public function index()
    {
        $materiList = Tutormateri::all();
        return view('admin_tutor.tutormateri_crud.index', compact('materiList'));
    }

    public function create()
    {
        return view('admin_tutor.tutormateri_crud.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kursus' => 'required|integer',
            'id_tutor' => 'required|integer',
            'judul' => 'required|string|max:255',
            'isi_materi' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx,mp4,jpg,png|max:20480',
        ]);

        if ($request->hasFile('file')) {
            $filename = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('uploads/materi'), $filename);
            $validated['file_path'] = 'uploads/materi/' . $filename;
        }

        Tutormateri::create($validated);

        return redirect()->route('tutormateri.index')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tutormateri = Tutormateri::findOrFail($id);
        return view('admin_tutor.tutormateri_crud.edit', compact('tutormateri'));
    }

    public function update(Request $request, $id)
    {
        $tutormateri = Tutormateri::findOrFail($id);

        $validated = $request->validate([
            'id_kursus' => 'required|integer',
            'id_tutor' => 'required|integer',
            'judul' => 'required|string|max:255',
            'isi_materi' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,docx,mp4,jpg,png|max:20480',
        ]);

        if ($request->hasFile('file')) {
            $filename = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('uploads/materi'), $filename);
            $validated['file_path'] = 'uploads/materi/' . $filename;
        }

        $tutormateri->update($validated);

        return redirect()->route('tutormateri.index')->with('success', 'Materi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $tutormateri = Tutormateri::findOrFail($id);
        $tutormateri->delete();

        return redirect()->route('tutormateri.index')->with('success', 'Materi berhasil dihapus.');
    }
}
