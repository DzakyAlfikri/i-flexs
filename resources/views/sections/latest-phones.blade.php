<section class="latest-phones py-5">
        <div class="container">
            <p class="tag mb-2">Berbagai Pilihan</p>
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h2>
                    iPhone Terbaru<br>
                    Sewa di i<span style="color: #7ED321;">Flexs</span>
                </h2>
                <a href="{{ route('product') }}" class="btn btn-outline-success px-4 py-2">
                    Semua iPhone <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            
            <div class="row g-4">
                @forelse($latestPhones as $phone)
                <div class="col-lg-4">
                    <div class="phone-card">
                        <img src="{{ asset('storage/' . $phone->iphone->gambar) }}" 
                             alt="{{ $phone->iphone->nama }}" 
                             class="phone-img mb-4">
                        <h3>{{ $phone->iphone->nama }}</h3>
                        <p>{{ $phone->iphone->deskripsi }}</p>
                        <div class="specs mt-3">
                            <small class="d-block">
                                <i class="fas fa-hdd me-1"></i> {{ $phone->penyimpanan->kapasitas }}
                            </small>
                            <small class="d-block">
                                <i class="fas fa-palette me-1"></i> {{ $phone->warna->nama_warna }}
                            </small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="amount">Rp {{ number_format($phone->harga_sewa_per_hari, 0, ',', '.') }}</span>
                                <span class="period">/Hari</span>
                            </div>
                            <a href="{{ route('detailproduct', ['id' => $phone->id]) }}" class="btn btn-success px-4">Sewa</a>
                        </div>
                        
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>Tidak ada iPhone tersedia saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    @push('styles')
    <style>
    .phone-card {
        background: #fff;
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .phone-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .phone-img {
        max-width: 100%;
        height: auto;
    }

    .specs {
        border-top: 1px solid #eee;
        padding-top: 1rem;
        margin-top: 1rem;
    }
    </style>
    @endpush