<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with(['user', 'variasiIphone.iphone'])
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function updateStatus(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'status' => 'required|in:aktif,batal'
        ]);

        if ($transaksi->status !== 'pending') {
            return redirect()->back()->with('error', 'Status transaksi tidak dapat diubah');
        }

        // Check stock availability if approving
        if ($request->status === 'aktif' && $transaksi->variasiIphone->stok < 1) {
            return redirect()->back()->with('error', 'Stok iPhone tidak mencukupi');
        }

        $transaksi->status = $request->status;
        $transaksi->save();

        // Update stock if approved
        if ($request->status === 'aktif') {
            $variasiIphone = $transaksi->variasiIphone;
            $variasiIphone->stok -= 1;
            $variasiIphone->save();
        }

        return redirect()->back()->with('success', 
            $request->status === 'aktif' ? 'Pengajuan sewa berhasil disetujui' : 'Pengajuan sewa ditolak');
    }
}