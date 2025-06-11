<?php

namespace App\Http\Controllers;

use App\Models\Penyimpanan;
use Illuminate\Http\Request;

class PenyimpananController extends Controller
{
    public function index()
    {
        $penyimpanans = Penyimpanan::all();
        return view('admin.penyimpanans.index', compact('penyimpanans'));
    }

    public function create()
    {
        return view('admin.penyimpanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kapasitas' => 'required|string|max:255|unique:penyimpanans'
        ]);

        Penyimpanan::create($request->all());
        return redirect()->route('penyimpanans.index')->with('success', 'Kapasitas penyimpanan berhasil ditambahkan');
    }

    public function edit(Penyimpanan $penyimpanan)
    {
        return view('admin.penyimpanans.edit', compact('penyimpanan'));
    }

    public function update(Request $request, Penyimpanan $penyimpanan)
    {
        $request->validate([
            'kapasitas' => 'required|string|max:255|unique:penyimpanans,kapasitas,' . $penyimpanan->id
        ]);

        $penyimpanan->update($request->all());
        return redirect()->route('penyimpanans.index')->with('success', 'Kapasitas penyimpanan berhasil diperbarui');
    }

    public function destroy(Penyimpanan $penyimpanan)
    {
        $penyimpanan->delete();
        return redirect()->route('penyimpanans.index')->with('success', 'Kapasitas penyimpanan berhasil dihapus');
    }
}