<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use App\Models\VariasiIphone;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = VariasiIphone::with(['iphone.kategori', 'warna', 'penyimpanan'])
            ->where('tersedia', true);

        // Search functionality
        if ($request->search) {
            $query->whereHas('iphone', function($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%');
            });
        }

        // Category filter
        if ($request->kategori) {
            $query->whereHas('iphone', function($q) use ($request) {
                $q->where('kategori_id', $request->kategori);
            });
        }

        // Sorting
        switch ($request->sort) {
            case 'price-low':
                $query->orderBy('harga_sewa_per_hari', 'asc');
                break;
            case 'price-high':
                $query->orderBy('harga_sewa_per_hari', 'desc');
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->paginate(9);
        $kategoris = Kategori::all();

        return view('Product', compact('products', 'kategoris'));
    }
}
