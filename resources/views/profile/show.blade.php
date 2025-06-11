@extends('layouts.homepage')

@section('content')
<div class="container mt-5">
    <div class="profile-header d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <div class="profile-avatar">
                {{ substr(Auth::user()->name, 0, 2) }}
            </div>
            <h1 class="profile-name fw-semibold">{{ Auth::user()->name }}</h1>
        </div>
        <div class="buttons">
            <a href="{{ route('profile.edit') }}" class="btn btn-edit fw-semibold">Edit Profil</a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-logout fw-semibold">Keluar</button>
            </form>
        </div>
    </div>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active fw-semibold" href="#profile" data-bs-toggle="tab">Informasi Profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-semibold" href="#rentals" data-bs-toggle="tab">Sewaan</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="profile">
            <div class="info-card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-group">
                            <div class="info-label fw-semibold">Nama Lengkap</div>
                            <div class="info-value">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="info-group">
                            <div class="info-label fw-semibold">Email</div>
                            <div class="info-value">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-group">
                            <div class="info-label fw-semibold">Nomor Ponsel</div>
                            <div class="info-value">{{ Auth::user()->phone ?? '-' }}</div>
                        </div>
                        <div class="info-group">
                            <div class="info-label fw-semibold">Alamat</div>
                            <div class="info-value">{{ Auth::user()->address ?? '-' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="rentals">
            <div class="info-card">
                @forelse(Auth::user()->transaksis()->with('variasiIphone.iphone')->latest()->get() as $transaksi)
                <div class="rental-item mb-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="mb-2 fw-bold">{{ $transaksi->variasiIphone->iphone->nama }}</h5>
                            <div class="rental-specs fw-bold">
                                <span>{{ $transaksi->variasiIphone->warna->nama_warna }}</span> •
                                <span>{{ $transaksi->variasiIphone->penyimpanan->kapasitas }}</span>
                            </div>
                            <div class="rental-details mt-2">
                                <div><i class="far fa-calendar me-2"></i>{{ $transaksi->tanggal_mulai->format('d F Y') }}</div>
                                <div><i class="far fa-clock me-2"></i>{{ $transaksi->durasi_hari }} Hari</div>
                                <div><i class="fas fa-shield-alt me-2"></i>{{ $transaksi->jaminan }}</div>
                                <div>
                                    <i class="fas fa-truck me-2"></i>
                                    {{ $transaksi->metode_pengambilan === 'store' ? 'Ambil di Toko' : 'Pengantaran' }}
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <div class="total-price mb-2">
                                Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                            </div>
                            <span class="badge bg-{{
                                $transaksi->status === 'pending' ? 'warning' :
                                ($transaksi->status === 'aktif' ? 'success' :
                                ($transaksi->status === 'batal' ? 'danger' : 'secondary'))
                            }}">
                                {{ ucfirst($transaksi->status) }}
                            </span>
                        </div>
                    </div>
                </div>
                @if(!$loop->last)
                    <hr class="rental-divider">
                @endif
                @empty
                <div class="text-center py-4">
                    <i class="fas fa-box-open fa-3x mb-3" style="color: #7ED321;"></i>
                    <h5>Belum ada riwayat sewaan</h5>
                    <p class="text-muted">Ayo mulai sewa iPhone sekarang!</p>
                    <a href="{{ route('product') }}" class="btn btn-edit mt-2">Lihat iPhone</a>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #000000;
            color: white;
            margin-top: 100px;
        }

        .profile-header {
            background: #141414;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            background: #7ED321;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
            color: black;
        }

        .profile-name {
            font-size: 24px;
            margin: 0;
            color: white;
        }

        .nav-tabs {
            border: none;
            margin-bottom: 20px;
        }

        .nav-tabs .nav-link {
            color: white !important;
            border: none;
            padding: 10px 20px;
            margin-right: 10px;
            border-radius: 20px;
            font-weight: 500;
        }

        .nav-tabs .nav-link.active {
            background: #7ED321;
            color: black;
        }

        .info-card {
            background: #141414;
            padding: 30px;
            border-radius: 12px;
        }

        .info-group {
            margin-bottom: 25px;
        }

        .info-label {
            color: #7ED321;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .info-value {
            color: white;
            font-size: 16px;
            font-weight: 500;
        }

        .buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .btn-edit {
            background: #7ED321;
            color: black;
            padding: 8px 24px;
            border-radius: 20px;
            border: none;
            font-weight: 500;
        }

        .btn-logout {
            background: #1E1E1E;
            color: white;
            padding: 8px 24px;
            border-radius: 20px;
            border: none;
            font-weight: 500;
        }

        .btn-edit:hover {
            background: #6db81d;
            color: black;
        }

        .btn-logout:hover {
            background: #2a2a2a;
        }

        .rental-item {
            padding: 15px;
            border-radius: 8px;
            transition: background-color 0.2s;
        }

        .rental-item:hover {
            background: #1a1a1a;
        }

        .rental-specs {
            font-size: 14px;
        }

        .rental-details {
            font-size: 14px;
            color: #888;
        }

        .rental-details div {
            margin-bottom: 4px;
        }

        .total-price {
            font-size: 18px;
            font-weight: 600;
            color: #7ED321;
        }

        .rental-divider {
            border-color: #2a2a2a;
            margin: 20px 0;
        }

        .badge {
            font-weight: 500;
            padding: 6px 12px;
        }
    </style>
@endsection