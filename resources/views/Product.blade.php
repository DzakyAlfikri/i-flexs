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
                <div class="row">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Search Form -->
                        <div class="col-lg-6">
                            <form action="{{ route('product') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="search-box me-2" 
                                       placeholder="Cari iPhone..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>

                        <!-- Sort Form -->
                        <div class="col-lg-6 text-end">
                            <form action="{{ route('product') }}" method="GET" class="d-flex justify-content-end">
                                <select name="sort" class="sort-select" onchange="this.form.submit()">
                                    <option value="">Urutkan</option>
                                    <option value="price-low" {{ request('sort') == 'price-low' ? 'selected' : '' }}>
                                        Harga Terendah
                                    </option>
                                    <option value="price-high" {{ request('sort') == 'price-high' ? 'selected' : '' }}>
                                        Harga Tertinggi
                                    </option>
                                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>
                                        Terbaru
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="mt-3">
                    <a href="{{ route('product') }}" 
                       class="filter-btn {{ !request('kategori') ? 'active' : '' }}">Semua</a>
                    @foreach($kategoris as $kategori)
                    <a href="{{ route('product', ['kategori' => $kategori->id]) }}" 
                       class="filter-btn {{ request('kategori') == $kategori->id ? 'active' : '' }}">
                        {{ $kategori->nama }}
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4">
                @forelse($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="phone-card">
                        <img src="{{ asset('storage/' . $product->iphone->gambar) }}" 
                             alt="{{ $product->iphone->nama }}" 
                             class="phone-img mb-4">
                        <h3>{{ $product->iphone->nama }}</h3>
                        <p>{{ $product->iphone->deskripsi ?? 'Desain Futuristik, Kamera Canggih, Performa Maksimal.' }}</p>
                        <div class="specs mt-3">
                            <small class="d-block">
                                <i class="fas fa-hdd me-1"></i> {{ $product->penyimpanan->kapasitas }}
                            </small>
                            <small class="d-block">
                                <i class="fas fa-palette me-1"></i> {{ $product->warna->nama_warna }}
                            </small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="price">
                                <span class="amount">Rp {{ number_format($product->harga_sewa_per_hari, 0, ',', '.') }}</span>
                                <span class="period">/Hari</span>
                            </div>
                            <a href="{{ route('detailproduct', ['id' => $product->id]) }}" 
                               class="btn btn-success px-4">Sewa</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <p>Tidak ada iPhone yang tersedia.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-5">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <!-- Previous Page Link -->
            @if ($products->onFirstPage())
                <li class="page-item disabled">
                    <button class="btn" aria-label="Previous">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $products->previousPageUrl() }}" class="btn" aria-label="Previous">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                <li class="page-item">
                    <a href="{{ $url }}" class="btn {{ $page == $products->currentPage() ? 'active' : '' }}">
                        {{ $page }}
                    </a>
                </li>
            @endforeach

            <!-- Next Page Link -->
            @if ($products->hasMorePages())
                <li class="page-item">
                    <a href="{{ $products->nextPageUrl() }}" class="btn" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <button class="btn" aria-label="Next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </li>
            @endif
        </ul>
    </nav>
</div>
        </div>
    </section>
@endsection