@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Kategori</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('kategoris.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                           id="nama" name="nama" value="{{ old('nama') }}" required>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection