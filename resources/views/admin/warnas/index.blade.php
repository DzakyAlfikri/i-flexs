@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Warna</h1>
        <a href="{{ route('warnas.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Warna
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
                            <th width="10%">ID</th>
                            <th width="60%">Nama Warna</th>
                            <th width="30%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($warnas as $warna)
                        <tr>
                            <td>{{ $warna->id }}</td>
                            <td>{{ $warna->nama_warna }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('warnas.edit', $warna) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('warnas.destroy', $warna) }}" method="POST" class="d-inline">
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
@endsection