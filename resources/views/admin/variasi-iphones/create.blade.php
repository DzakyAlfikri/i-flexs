@extends('layouts.admin')

@section('content')
<div class="main-content">
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Variasi iPhone</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('variasi-iphones.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="iphone_id" class="form-label">iPhone</label>
                    <select class="form-select @error('iphone_id') is-invalid @enderror" 
                            id="iphone_id" name="iphone_id" required>
                        <option value="">Pilih iPhone</option>
                        @foreach($iphones as $iphone)
                            <option value="{{ $iphone->id }}" 
                                {{ old('iphone_id') == $iphone->id ? 'selected' : '' }}>
                                {{ $iphone->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('iphone_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="warna_id" class="form-label">Warna</label>
                    <select class="form-select @error('warna_id') is-invalid @enderror" 
                            id="warna_id" name="warna_id" required>
                        <option value="">Pilih Warna</option>
                        @foreach($warnas as $warna)
                            <option value="{{ $warna->id }}" 
                                {{ old('warna_id') == $warna->id ? 'selected' : '' }}>
                                {{ $warna->nama_warna }}
                            </option>
                        @endforeach
                    </select>
                    @error('warna_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="penyimpanan_id" class="form-label">Penyimpanan</label>
                    <select class="form-select @error('penyimpanan_id') is-invalid @enderror" 
                            id="penyimpanan_id" name="penyimpanan_id" required>
                        <option value="">Pilih Penyimpanan</option>
                        @foreach($penyimpanans as $penyimpanan)
                            <option value="{{ $penyimpanan->id }}" 
                                {{ old('penyimpanan_id') == $penyimpanan->id ? 'selected' : '' }}>
                                {{ $penyimpanan->kapasitas }}
                            </option>
                        @endforeach
                    </select>
                    @error('penyimpanan_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga_sewa_per_hari" class="form-label">Harga Sewa per Hari</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" class="form-control @error('harga_sewa_per_hari') is-invalid @enderror" 
                               id="harga_sewa_per_hari" name="harga_sewa_per_hari" 
                               value="{{ old('harga_sewa_per_hari') }}" required min="0">
                    </div>
                    @error('harga_sewa_per_hari')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control @error('stok') is-invalid @enderror" 
                           id="stok" name="stok" value="{{ old('stok') }}" required min="0">
                    @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tersedia" 
                               name="tersedia" value="1" {{ old('tersedia') ? 'checked' : '' }}>
                        <label class="form-check-label" for="tersedia">Tersedia</label>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('variasi-iphones.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection