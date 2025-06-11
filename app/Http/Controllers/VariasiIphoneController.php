<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use App\Models\Warna;
use App\Models\Penyimpanan;
use App\Models\VariasiIphone;
use Illuminate\Http\Request;

class VariasiIphoneController extends Controller
{
    public function index()
    {
        $variasiIphones = VariasiIphone::with(['iphone', 'warna', 'penyimpanan'])->get();
        return view('admin.variasi-iphones.index', compact('variasiIphones'));
    }

    public function create()
    {
        $iphones = Iphone::all();
        $warnas = Warna::all();
        $penyimpanans = Penyimpanan::all();
        return view('admin.variasi-iphones.create', compact('iphones', 'warnas', 'penyimpanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'iphone_id' => 'required|exists:iphones,id',
            'warna_id' => 'required|exists:warnas,id',
            'penyimpanan_id' => 'required|exists:penyimpanans,id',
            'harga_sewa_per_hari' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'tersedia' => 'boolean'
        ]);

        VariasiIphone::create($request->all());
        return redirect()->route('variasi-iphones.index')
            ->with('success', 'Variasi iPhone berhasil ditambahkan');
    }

    public function edit(VariasiIphone $variasiIphone)
    {
        $iphones = Iphone::all();
        $warnas = Warna::all();
        $penyimpanans = Penyimpanan::all();
        return view('admin.variasi-iphones.edit', 
            compact('variasiIphone', 'iphones', 'warnas', 'penyimpanans'));
    }

    public function update(Request $request, VariasiIphone $variasiIphone)
    {
        $request->validate([
            'iphone_id' => 'required|exists:iphones,id',
            'warna_id' => 'required|exists:warnas,id',
            'penyimpanan_id' => 'required|exists:penyimpanans,id',
            'harga_sewa_per_hari' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'tersedia' => 'boolean'
        ]);

        $variasiIphone->update($request->all());
        return redirect()->route('variasi-iphones.index')
            ->with('success', 'Variasi iPhone berhasil diperbarui');
    }

    public function destroy(VariasiIphone $variasiIphone)
    {
        $variasiIphone->delete();
        return redirect()->route('variasi-iphones.index')
            ->with('success', 'Variasi iPhone berhasil dihapus');
    }
}