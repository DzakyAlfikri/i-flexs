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
            'status' => 'required|in:aktif,batal,selesai'
        ]);

        if ($transaksi->status === 'batal') {
            return redirect()->back()->with('error', 'Status transaksi tidak dapat diubah');
        }

        // Only allow completion of active rentals
        if ($request->status === 'selesai' && $transaksi->status !== 'aktif') {
            return redirect()->back()->with('error', 'Hanya transaksi aktif yang dapat diselesaikan');
        }

        // Only allow activation of pending rentals
        if ($request->status === 'aktif' && $transaksi->status !== 'pending') {
            return redirect()->back()->with('error', 'Hanya transaksi pending yang dapat diaktifkan');
        }

        // Check stock availability if approving
        if ($request->status === 'aktif' && $transaksi->variasiIphone->stok < 1) {
            return redirect()->back()->with('error', 'Stok iPhone tidak mencukupi');
        }

        $transaksi->status = $request->status;
        $transaksi->save();

        // Get the related VariasiIphone model
        $variasiIphone = $transaksi->variasiIphone;

        // Update stock and availability when transaction is activated
        if ($request->status === 'aktif') {
            $variasiIphone->stok -= 1;
            
            // Set tersedia to false if stock becomes 0
            if ($variasiIphone->stok === 0) {
                $variasiIphone->tersedia = false;
            }
            
            $variasiIphone->save();
        }

        // Return stock and update availability when rental is completed
        if ($request->status === 'selesai') {
            $variasiIphone->stok += 1;
            
            // Set tersedia to true when stock is available
            if ($variasiIphone->stok > 0) {
                $variasiIphone->tersedia = true;
            }
            
            $variasiIphone->save();
        }

        $messages = [
            'aktif' => 'Pengajuan sewa berhasil disetujui',
            'batal' => 'Pengajuan sewa ditolak',
            'selesai' => 'Penyewaan telah selesai'
        ];

        return redirect()->back()->with('success', $messages[$request->status]);
    }
}