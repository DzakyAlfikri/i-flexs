@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>iPhone</h1>
        <a href="{{ route('iphones.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah iPhone
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
                            <th width="5%">ID</th>
                            <th width="20%">Gambar</th>
                            <th width="25%">Nama</th>
                            <th width="25%">Kategori</th>
                            <th width="25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($iphones as $iphone)
                        <tr>
                            <td>{{ $iphone->id }}</td>
                            <td class="text-center">
                                @if($iphone->gambar)
                                    <img src="{{ asset('storage/' . $iphone->gambar) }}" 
                                         alt="{{ $iphone->nama }}" 
                                         class="img-thumbnail"
                                         style="max-height: 100px; width: auto;">
                                @else
                                    <div class="text-muted">
                                        <i class="fas fa-image fa-2x"></i>
                                        <p class="small mb-0">No Image</p>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $iphone->nama }}</td>
                            <td>{{ $iphone->kategori->nama }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('iphones.edit', $iphone) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('iphones.destroy', $iphone) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
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

@push('styles')
<style>
    .table td {
        vertical-align: middle;
    }
    
    .img-thumbnail {
        border: 1px solid #dee2e6;
        padding: 0.25rem;
        background-color: #fff;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto;
    }
</style>
@endpush
@endsection