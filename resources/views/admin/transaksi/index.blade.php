@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Pengajuan Sewa</h1>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pelanggan</th>
                        <th>iPhone</th>
                        <th>Tanggal Mulai</th>
                        <th>Durasi</th>
                        <th>Jaminan</th>
                        <th>Pengambilan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->user->name }}</td>
                        <td>
                            <div>{{ $transaksi->variasiIphone->iphone->nama }}</div>
                            <small class="text-muted">
                                {{ $transaksi->variasiIphone->warna->nama_warna }} - 
                                {{ $transaksi->variasiIphone->penyimpanan->kapasitas }}
                            </small>
                        </td>
                        <td>{{ $transaksi->tanggal_mulai->format('d/m/Y') }}</td>
                        <td>{{ $transaksi->durasi_hari }} hari</td>
                        <td>
                            <span class="badge bg-info">
                                {{ $transaksi->jaminan }}
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-{{ $transaksi->metode_pengambilan === 'store' ? 'primary' : 'secondary' }}">
                                {{ $transaksi->metode_pengambilan === 'store' ? 'Ambil di Toko' : 'Pengantaran' }}
                            </span>
                        </td>
                        <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                        <td>
                            <span class="badge bg-{{ 
                                $transaksi->status === 'pending' ? 'warning' : 
                                ($transaksi->status === 'aktif' ? 'success' : 
                                ($transaksi->status === 'batal' ? 'danger' : 'secondary')) 
                            }}">
                                {{ ucfirst($transaksi->status) }}
                            </span>
                        </td>
                        <td>
                            @if($transaksi->status === 'pending')
                            <div class="btn-group">
                                <form action="{{ route('admin.transaksi.update-status', $transaksi) }}" 
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="aktif">
                                    <button type="submit" class="btn btn-success btn-sm me-1"
                                            onclick="return confirm('Setujui pengajuan sewa ini?')">
                                        <i class="fas fa-check"></i> Setujui
                                    </button>
                                </form>
                                <form action="{{ route('admin.transaksi.update-status', $transaksi) }}" 
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="batal">
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Tolak pengajuan sewa ini?')">
                                        <i class="fas fa-times"></i> Tolak
                                    </button>
                                </form>
                            </div>
                            @elseif($transaksi->status === 'aktif')
                            <form action="{{ route('admin.transaksi.update-status', $transaksi) }}" 
                                method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="selesai">
                                <button type="submit" class="btn btn-primary btn-sm"
                                        onclick="return confirm('Selesaikan penyewaan ini?')">
                                    <i class="fas fa-check-circle"></i> Selesai
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection