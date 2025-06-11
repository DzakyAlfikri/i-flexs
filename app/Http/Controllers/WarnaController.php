<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    public function index()
    {
        $warnas = Warna::all();
        return view('admin.warnas.index', compact('warnas'));
    }

    public function create()
    {
        return view('admin.warnas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_warna' => 'required|string|max:255|unique:warnas'
        ]);

        Warna::create($request->all());
        return redirect()->route('warnas.index')->with('success', 'Warna berhasil ditambahkan');
    }

    public function edit(Warna $warna)
    {
        return view('admin.warnas.edit', compact('warna'));
    }

    public function update(Request $request, Warna $warna)
    {
        $request->validate([
            'nama_warna' => 'required|string|max:255|unique:warnas,nama_warna,' . $warna->id
        ]);

        $warna->update($request->all());
        return redirect()->route('warnas.index')->with('success', 'Warna berhasil diperbarui');
    }

    public function destroy(Warna $warna)
    {
        $warna->delete();
        return redirect()->route('warnas.index')->with('success', 'Warna berhasil dihapus');
    }
}