<?php

namespace App\Http\Controllers;

use App\Models\VariasiIphone;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPhones = VariasiIphone::with(['iphone', 'warna', 'penyimpanan'])
            ->whereHas('iphone', function($query) {
                $query->latest();
            })
            ->where('tersedia', true)
            ->take(3)
            ->get();

        return view('home', compact('latestPhones'));
    }
}
