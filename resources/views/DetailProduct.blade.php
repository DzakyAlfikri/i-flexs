@extends('layouts.homepage')

@section('title', $product->iphone->nama . ' - iFlexs | Sewa iPhone Tanpa Harus Memiliki')

@section('content')
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="{{ asset('storage/' . $product->iphone->gambar) }}" 
                         alt="{{ $product->iphone->nama }}" 
                         class="main-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>{{ $product->iphone->nama }}</h1>
                    <p class="product-description">
                        {{ $product->iphone->deskripsi }}
                    </p>
                    
                    <div class="color-options">
                        <div class="color-info">
                            <div class="option-label">Warna</div>
                            <div class="selected-color">
                                {{ $product->warna->nama_warna }}
                            </div>
                        </div>
                    </div>

                    <div class="storage-options">
                        <div class="color-info">
                            <div class="option-label">Penyimpanan</div>
                            <div class="selected-color">
                                {{ $product->penyimpanan->kapasitas }}
                            </div>
                        </div>
                    </div>

                    <div class="quantity-selector">
                        <div class="option-label">Durasi</div>
                        <button type="button" class="quantity-btn" onclick="window.decrementDays()">-</button>
                        <input type="text" class="quantity-input" id="duration" value="1" readonly>
                        <button type="button" class="quantity-btn" onclick="window.incrementDays()">+</button>
                        <span>Hari</span>
                    </div>

                    <div class="price-tag">
                        Rp {{ number_format($product->harga_sewa_per_hari, 0, ',', '.') }} /Hari
                    </div>
                    
                    <button class="rent-btn" onclick="rentNow()">Sewa Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Make functions globally available
    window.incrementDays = function() {
        const durationInput = document.getElementById('duration');
        let currentDuration = parseInt(durationInput.value);
        currentDuration++; // Fix the increment operator
        durationInput.value = currentDuration;
    }

    window.decrementDays = function() {
        const durationInput = document.getElementById('duration');
        let currentDuration = parseInt(durationInput.value);
        if (currentDuration > 1) {
            currentDuration--; // Fix the decrement operator
            durationInput.value = currentDuration;
        }
    }

    window.rentNow = function() {
        const duration = document.getElementById('duration').value;
        
        // Redirect to pesan page with parameters
        window.location.href = "{{ route('pesan') }}?" + new URLSearchParams({
            product_id: {{ $product->id }},
            duration: duration
        }).toString();
    }
});
</script>
@endsection