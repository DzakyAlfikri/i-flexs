<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IphoneController extends Controller
{
    public function index()
    {
        $iphones = Iphone::with('kategori')->get();
        return view('admin.iphones.index', compact('iphones'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.iphones.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = $file->store('iphones', 'public');
            $data['gambar'] = $path;
        }

        Iphone::create($data);
        return redirect()->route('iphones.index')->with('success', 'iPhone berhasil ditambahkan');
    }

    public function edit(Iphone $iphone)
    {
        $kategoris = Kategori::all();
        return view('admin.iphones.edit', compact('iphone', 'kategoris'));
    }

    public function update(Request $request, Iphone $iphone)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($iphone->gambar) {
                Storage::disk('public')->delete($iphone->gambar);
            }
            
            $file = $request->file('gambar');
            $path = $file->store('iphones', 'public');
            $data['gambar'] = $path;
        }

        $iphone->update($data);
        return redirect()->route('iphones.index')->with('success', 'iPhone berhasil diperbarui');
    }

    public function destroy(Iphone $iphone)
    {
        if ($iphone->gambar) {
            Storage::disk('public')->delete($iphone->gambar);
        }
        
        $iphone->delete();
        return redirect()->route('iphones.index')->with('success', 'iPhone berhasil dihapus');
    }
}