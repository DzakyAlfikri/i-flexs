<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\VariasiIphone;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PesanController extends Controller
{
    public function index(Request $request)
    {
        $product = VariasiIphone::with(['iphone', 'warna', 'penyimpanan'])
            ->findOrFail($request->product_id);
            
        $duration = $request->duration;
        $totalPrice = $product->harga_sewa_per_hari * $duration;
        
        // Make sure to pass all required data to the view
        return view('pesan', compact('product', 'duration', 'totalPrice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'variasi_iphone_id' => 'required|exists:variasi_iphones,id',
            'duration' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'guarantee_type' => 'required|string',
            'pickup_method' => 'required|in:store,delivery'
        ]);

        $transaksi = Transaksi::create([
            'user_id' => auth()->id(),
            'variasi_iphone_id' => $request->variasi_iphone_id,
            'tanggal_mulai' => Carbon::today(),
            'durasi_hari' => $request->duration,
            'total_harga' => $request->total_price,
            'status' => 'pending',
            'jaminan' => $request->guarantee_type,
            'metode_pengambilan' => $request->pickup_method
        ]);

        return redirect()->route('success')->with('transaction_id', $transaksi->id);
    }
}
