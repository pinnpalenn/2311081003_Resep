<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::latest()->paginate(8);
        return view('resep.index', compact('reseps'));
    }

    public function create()
    {
        return view('resep.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_resep' => 'required|max:255',
            'kategori' => 'required|max:255',
            'bahan' => 'required',
            'langkah_pembuatan' => 'required',
            'waktu_memasak' => 'required|integer|min:1',
            'penulis' => 'required|max:255',
            'tingkat_kesulitan' => 'required|in:Mudah,Sedang,Sulit',
        ]);

        Resep::create($validated);

        return redirect()->route('resep.index')
            ->with('success', 'Resep berhasil ditambahkan!');
    }

    public function show(Resep $resep)
    {
        return redirect()->route('resep.index');
    }

    public function edit(Resep $resep)
    {
        return view('resep.edit', compact('resep'));
    }

    public function update(Request $request, Resep $resep)
    {
        $validated = $request->validate([
            'judul_resep' => 'required|max:255',
            'kategori' => 'required|max:255',
            'bahan' => 'required',
            'langkah_pembuatan' => 'required',
            'waktu_memasak' => 'required|integer|min:1',
            'penulis' => 'required|max:255',
            'tingkat_kesulitan' => 'required|in:Mudah,Sedang,Sulit',
        ]);

        $resep->update($validated);

        return redirect()->route('resep.index')
            ->with('success', 'Resep berhasil diperbarui!');
    }

    public function destroy(Resep $resep)
    {
        $resep->delete();

        return redirect()->route('resep.index')
            ->with('success', 'Resep berhasil dihapus!');
    }

    public function trashed()
    {
        $reseps = Resep::onlyTrashed()->paginate(8);
        return view('resep.trashed', compact('reseps'));
    }

    public function restore($id)
    {
        Resep::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('resep.trashed')
            ->with('success', 'Resep berhasil dipulihkan!');
    }

    public function forceDelete($id)
    {
        Resep::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('resep.trashed')
            ->with('success', 'Resep berhasil dihapus permanen!');
    }
}
