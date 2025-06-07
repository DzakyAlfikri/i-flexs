@extends('layouts.homepage')

@section('title', 'iPhone 16 - iFlexs | Sewa iPhone Tanpa Harus Memiliki')

@section('content')
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="{{ asset('images/ip16.png') }}" alt="iPhone 16" class="main-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <h1>iPhone 16</h1>
                    <p class="product-description">
                        iPhone 15 Pro Max hadir Dengan Chip A17 Pro Yang Super Cepat, Layar Super Retina XDR 6.7", 
                        Sistem Kamera Pro 48MP, Dan Body Titanium Yang Kokoh Namun Ringan. Nikmati Pengalaman iPhone 
                        Terbaik Dengan Menyewanya Di iFlexs.
                    </p>
                    
                    <div class="color-options">
                        <div class="option-label">Warna</div>
                        <button class="color-btn active">Silver</button>
                        <button class="color-btn">Putih</button>
                        <button class="color-btn">Hitam</button>
                        <button class="color-btn">Biru</button>
                        <button class="color-btn">Hijau</button>
                    </div>

                    <div class="storage-options">
                        <div class="option-label">Penyimpanan</div>
                        <button class="storage-btn active">128 GB</button>
                        <button class="storage-btn">256 GB</button>
                    </div>

                    <div class="quantity-selector">
                        <div class="option-label">Durasi</div>
                        <button class="quantity-btn">-</button>
                        <input type="text" class="quantity-input" value="1" readonly>
                        <button class="quantity-btn">+</button>
                        <span>Hari</span>
                    </div>

                    <div class="price-tag">Rp500.000 /Hari</div>
                    
                    <button class="rent-btn">Sewa Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection