@extends('layouts.homepage')

@section('title', 'Produk - iFlexs | Sewa iPhone Tanpa Harus Memiliki')

@section('content')
    <!-- Products Header -->
    <section class="products-header">
        <div class="container">
            <img src="{{ asset('images/head.png') }}" alt="banner">
        </div>
    </section>

    <!-- Filter & Search Section -->
    <section class="py-5">
        <div class="container">
            <div class="filter-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <input type="text" class="search-box" placeholder="Cari iPhone...">
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="custom-select">
                            <select class="sort-select">
                                <option value="">Urutkan</option>
                                <option value="price-low">Harga Terendah</option>
                                <option value="price-high">Harga Tertinggi</option>
                                <option value="newest">Terbaru</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="filter-btn active">Semua</button>
                    <button class="filter-btn">iPhone 16</button>
                    <button class="filter-btn">iPhone 15</button>
                    <button class="filter-btn">iPhone 14</button>
                    <button class="filter-btn">iPhone 13</button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-lg-4 col-md-6">
                    <div class="phone-card">
                        <img src="{{ asset('images/ip16.png') }}" alt="iPhone 16" class="phone-img mb-4">
                        <h3>iPhone 16</h3>
                        <p>Desain Futuristik, Kamera<br>Canggih, Performa Maksimal.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="amount">Rp500.000</span>
                                <span class="period">/Hari</span>
                            </div>
                            <a href="{{ route('detailproduct') }}" class="btn btn-success px-4">Sewa</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <button class="btn" aria-label="Previous">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                        </li>
                        <li class="page-item">
                            <button class="btn active">1</button>
                        </li>
                        <li class="page-item">
                            <button class="btn">2</button>
                        </li>
                        <li class="page-item">
                            <button class="btn">3</button>
                        </li>
                        <li class="page-item">
                            <button class="btn" aria-label="Next">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
