@extends('layouts.admin')

@section('content')
<div class="main-content">
    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-users"></i>
                    </div>
                    <div>
                        <h3 class="mb-1">{{ $stats['total_users'] }}</h3>
                        <p class="mb-0">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div>
                        <h3 class="mb-1">{{ $stats['total_iphones'] }}</h3>
                        <p class="mb-0">Total iPhones</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div>
                        <h3 class="mb-1">{{ $stats['active_rentals'] }}</h3>
                        <p class="mb-0">Active Rentals</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card">
                <div class="d-flex align-items-center">
                    <div class="stat-icon me-3">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h3 class="mb-1">{{ $stats['pending_transactions'] }}</h3>
                        <p class="mb-0">Pending Approvals</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Transactions Table -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title mb-4">Pending Approvals</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>iPhone</th>
                            <th>Start Date</th>
                            <th>Duration</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pendingTransactions as $transaction)
                        <tr>
                            <td>#{{ $transaction->id }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>
                                {{ $transaction->variasiIphone->iphone->nama }}
                                <small class="d-block text-muted">
                                    {{ $transaction->variasiIphone->warna->nama_warna }} • 
                                    {{ $transaction->variasiIphone->penyimpanan->kapasitas }}
                                </small>
                            </td>
                            <td>{{ $transaction->tanggal_mulai->format('d/m/Y') }}</td>
                            <td>{{ $transaction->durasi_hari }} Hari</td>
                            <td>Rp {{ number_format($transaction->total_harga, 0, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('admin.transaksi.update-status', $transaction) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="aktif">
                                    <button type="submit" class="btn btn-success btn-sm me-1"
                                            onclick="return confirm('Setujui pengajuan sewa ini?')">
                                        <i class="fas fa-check"></i> Setujui
                                    </button>
                                </form>
                                <form action="{{ route('admin.transaksi.update-status', $transaction) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="batal">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Tolak pengajuan sewa ini?')">
                                        <i class="fas fa-times"></i> Tolak
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <i class="fas fa-check-circle text-success mb-3 fa-2x"></i>
                                <p class="mb-0">Tidak ada pengajuan yang perlu disetujui</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
.stat-card {
    background: #1a1a1a;
    border: none;
    padding: 20px;
    border-radius: 10px;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: #7ED321;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-icon i {
    color: black;
    font-size: 1.2rem;
}

.card {
    background: #141414;
    border: none;
    color: white;
}

.table {
    color: white;
}

.table th {
    border-bottom-color: #2a2a2a;
}

.table td {
    border-bottom-color: #1a1a1a;
}

.btn-success {
    background: #7ED321;
    border: none;
}

.btn-danger {
    background: #dc3545;
    border: none;
}
</style>
@endsection