<?php

namespace App\Http\Controllers;

use App\Models\VariasiIphone;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function show($id)
    {
        $product = VariasiIphone::with(['iphone', 'warna', 'penyimpanan'])
            ->findOrFail($id);
            
        // Get all colors and storage options for this iPhone model
        $colors = VariasiIphone::where('iphone_id', $product->iphone_id)
            ->with('warna')
            ->distinct()
            ->get(['warna_id']);
            
        $storages = VariasiIphone::where('iphone_id', $product->iphone_id)
            ->with('penyimpanan')
            ->distinct()
            ->get(['penyimpanan_id']);

        return view('DetailProduct', compact('product', 'colors', 'storages'));
    }
}
