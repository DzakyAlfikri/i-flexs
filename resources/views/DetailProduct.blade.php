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
                        <button class="quantity-btn" onclick="decrementDays()">-</button>
                        <input type="text" class="quantity-input" id="duration" value="1" readonly>
                        <button class="quantity-btn" onclick="incrementDays()">+</button>
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
function incrementDays() {
    const durationInput = document.getElementById('duration');
    let currentDuration = parseInt(durationInput.value);
    currentDuration+;
    durationInput.value = currentDuration;
}

function decrementDays() {
    const durationInput = document.getElementById('duration');
    let currentDuration = parseInt(durationInput.value);
    if (currentDuration > 1) {
        currentDuration-;
        durationInput.value = currentDuration;
    }
}

function rentNow() {
    const colorId = document.querySelector('.color-btn.active').dataset.colorId;
    const storageId = document.querySelector('.storage-btn.active').dataset.storageId;
    const duration = document.getElementById('duration').value;
    
    // Redirect to pesan page with parameters
    window.location.href = "{{ route('pesan') }}?" + new URLSearchParams({
        product_id: {{ $product->id }},
        color_id: colorId,
        storage_id: storageId,
        duration: duration
    }).toString();
}
</script>
@endsection