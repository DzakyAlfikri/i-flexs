@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h3>Edit Warna</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('warnas.update', $warna) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_warna" class="form-label">Nama Warna</label>
                    <input type="text" class="form-control @error('nama_warna') is-invalid @enderror" 
                           id="nama_warna" name="nama_warna" value="{{ old('nama_warna', $warna->nama_warna) }}" required>
                    @error('nama_warna')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('warnas.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection