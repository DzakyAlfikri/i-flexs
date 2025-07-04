@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Penyimpanan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('penyimpanans.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" 
                           id="kapasitas" name="kapasitas" value="{{ old('kapasitas') }}" required>
                    @error('kapasitas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('penyimpanans.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection