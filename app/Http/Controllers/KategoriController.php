<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategoris.index', compact('kategoris'));
    }

    public function create()
    {
        return view('admin.kategoris.create');
    }

    public function edit(Kategori $kategori)
    {
        return view('admin.kategoris.edit', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategoris'
        ]);

        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect()
            ->route('kategoris.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategoris,nama,' . $kategori->id
        ]);

        $kategori->update([
            'nama' => $request->nama
        ]);

        return redirect()
            ->route('kategoris.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()
            ->route('kategoris.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}