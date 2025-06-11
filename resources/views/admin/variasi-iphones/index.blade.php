@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Variasi iPhone</h1>
        <a href="{{ route('variasi-iphones.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Variasi
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>iPhone</th>
                            <th>Warna</th>
                            <th>Penyimpanan</th>
                            <th>Harga Sewa/Hari</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($variasiIphones as $variasi)
                        <tr>
                            <td>{{ $variasi->id }}</td>
                            <td>{{ $variasi->iphone->nama }}</td>
                            <td>{{ $variasi->warna->nama_warna }}</td>
                            <td>{{ $variasi->penyimpanan->kapasitas }}</td>
                            <td>Rp {{ number_format($variasi->harga_sewa_per_hari, 0, ',', '.') }}</td>
                            <td>{{ $variasi->stok }}</td>
                            <td>
                                <span class="badge {{ $variasi->tersedia ? 'bg-success' : 'bg-danger' }}">
                                    {{ $variasi->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('variasi-iphones.edit', $variasi) }}" 
                                       class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('variasi-iphones.destroy', $variasi) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" 
                                                onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection