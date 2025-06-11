@extends('layouts.homepage')

@section('title', 'iFlexs - Sewa iPhone Tanpa Harus Memiliki')

@section('content')
    <section class="rental-form">
        <div class="container">
            <h1 style="font-weight: 800;" class="mb-4">Pengajuan <span style="color: #7ED321;">Sewa</span></h1>
            
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-mobile-alt"></i>
                    Ringkasan Produk
                </h2>
                <div class="product-summary">
                    <img src="{{ asset('storage/' . $product->iphone->gambar) }}" 
                         alt="{{ $product->iphone->nama }}" 
                         class="product-image">
                    <div>
                        <h3>{{ $product->iphone->nama }}</h3>
                        <div class="product-specs">
                            <span>{{ $product->warna->nama_warna }}</span>
                            <span>{{ $product->penyimpanan->kapasitas }}</span>
                            <span>{{ $duration }} Hari</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-shield-alt"></i>
                    Jaminan
                </h2>
                <div class="guarantee-options">
                    <div class="guarantee-option active">KTP</div>
                    <div class="guarantee-option">SIM</div>
                    <div class="guarantee-option">KTM</div>
                    <div class="guarantee-option">Kartu Pelajar</div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-truck"></i>
                    Metode Pengambilan
                </h2>
                <div class="pickup-options">
                    <div class="pickup-option active">
                        <h4><i class="fas fa-store"></i> Ambil Ke Toko</h4>
                        <p>Ambil Di Kantor Kami, Perumahan Jakarta Sel, Kalaunan, Kalaunan, Jalan Operasional 07.00 - 21.00 WIB</p>
                    </div>
                    <div class="pickup-option">
                        <h4><i class="fas fa-shipping-fast"></i> Delivery</h4>
                        <p>Barang Akan Di Antarkan Oleh Kurir Hinggu Lokasi Anda. Dikenakan Ongkos Kirim.</p>
                    </div>
                </div>
            </div>

            <!-- Replace the existing submit button with a form -->
            <form action="{{ route('pesan.store') }}" method="POST">
                @csrf
                <input type="hidden" name="variasi_iphone_id" value="{{ $product->id }}">
                <input type="hidden" name="duration" value="{{ $duration }}">
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <input type="hidden" name="guarantee_type" id="guaranteeType" value="KTP">
                <input type="hidden" name="pickup_method" id="pickupMethod" value="store">
                
                <div class="total-section">
                    <span class="total-text">Total</span>
                    <span class="total-amount">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span>
                </div>
                <button type="submit" class="submit-btn">Ajukan Sewa</button>
            </form>
        </div>
    </section>

      <style>
        /* Keep existing base styles from homepage */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #000000;
            color: white;
            overflow-x: hidden;
        }

        .navbar .container {
            padding-left: 100px;
            padding-right: 100px;
            max-width: 95%;
        }

        .navbar {
            background: transparent !important;
            padding: 20px 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #7ED321 !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 600;
            margin: 0 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #7ED321 !important;
        }

        .btn-login {
            background: #7ED321;
            color: black !important;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 25px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #6BC91A;
            transform: translateY(-2px);
        }

        .rental-form {
            padding-top: 150px;
            padding-bottom: 60px;
        }

        .form-section {
            background: #141414;
            border: 1px solid #7ED321;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #7ED321;
        }

        .product-summary {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 15px;
            background: #1a1a1a;
            border-radius: 12px;
        }

        .product-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
        }

        .product-specs span {
            display: inline-block;
            padding: 4px 12px;
            background: #2a2a2a;
            border-radius: 20px;
            font-size: 12px;
            margin-right: 8px;
            color: #7ED321;
        }

        .guarantee-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .guarantee-option {
            background: #1a1a1a;
            border: 1px solid #7ED321;
            border-radius: 8px;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .guarantee-option:hover,
        .guarantee-option.active {
            background: #7ED321;
            color: black;
        }

        .pickup-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }

        .pickup-option {
            background: #1a1a1a;
            border: 1px solid #7ED321;
            border-radius: 12px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .pickup-option:hover,
        .pickup-option.active {
            background: #7ED321;
            border-color: #7ED321;
            transform: translateY(-2px);
        }

        .pickup-option h4 {
            font-size: 18px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .pickup-option p {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            margin: 0;
        }

        .total-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #1a1a1a;
            border-radius: 12px;
        }

        .total-text {
            font-size: 18px;
            font-weight: 500;
        }

        .total-amount {
            font-size: 24px;
            font-weight: 600;
            color: #7ED321;
        }

        .submit-btn {
            background: #7ED321;
            color: black;
            font-weight: bold;
            padding: 15px;
            border-radius: 12px;
            border: none;
            width: 100%;
            font-size: 18px;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .submit-btn:hover {
            background: #6BC91A;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.2);
        }

        @media (max-width: 768px) {
            .rental-form {
                padding-top: 100px;
            }

            .form-section {
                padding: 20px;
            }

            .guarantee-options,
            .pickup-options {
                grid-template-columns: 1fr;
            }
        }

        .footer {
            background: #0A0A0A;
            padding: 80px 0;
            margin-top: 60px;
        }

        .footer-brand h3 {
            font-size: 32px;
            font-weight: bold;
            color: white;
        }

        .footer-brand p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
        }

        .contact-info p {
            color: rgb(255, 255, 255);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            font-size: 1rem;
            width: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #7ED321;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-link:hover {
            background: #6BC91A;
            transform: translateY(-3px);
            color: black;
        }

        @media (max-width: 768px) {
            .footer {
                padding: 40px 0;
                text-align: center;
            }
            
            .contact-info {
                justify-content: center;
                margin-bottom: 30px;
            }
            
            .social-links {
                justify-content: center;
            }
        }

    </style>    

    <script>
document.querySelectorAll('.guarantee-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.guarantee-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        document.getElementById('guaranteeType').value = this.textContent.trim();
    });
});

document.querySelectorAll('.pickup-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.pickup-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        document.getElementById('pickupMethod').value = 
            this.querySelector('h4').textContent.includes('Ambil') ? 'store' : 'delivery';
    });
});
    </script>
@endsection


