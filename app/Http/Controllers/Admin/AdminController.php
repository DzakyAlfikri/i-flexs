<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Iphone;
use App\Models\Transaksi;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::where('usertype', 'user')->count(),
            'total_iphones' => Iphone::count(),
            'active_rentals' => Transaksi::where('status', 'aktif')->count(),
            'pending_transactions' => Transaksi::where('status', 'pending')->count(),
        ];

        $pendingTransactions = Transaksi::with(['user', 'variasiIphone.iphone'])
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view('admin.dashboard', compact('stats', 'pendingTransactions'));
    }
}