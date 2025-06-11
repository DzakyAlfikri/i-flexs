@extends('layouts.homepage')

@section('title', 'Tentang Kami - iFlexs')

@section('content')

    <section class="about-section">
        <div class="container">
        <div class="row align-items-stretch"> <!-- Mengubah align-items-center menjadi align-items-stretch -->
            <div class="col-lg-6 mb-4"> <!-- Tambahkan mb-4 untuk margin bottom pada mobile -->
                <div class="about-content h-20"> <!-- Tambahkan h-100 untuk full height -->
                    <h1 class="about-title">Tentang <span>Kami</span></h1>
                    <p class="about-text">
                        iFlexs Didirikan Pada Tahun 2022 Dengan Visi Sederhana Namun Revolusioner: Memungkinkan Lebih Banyak Orang Untuk Menikmati Teknologi Premium iPhone Tanpa Harus Membeli Perangkat Dengan Harga Penuh. Kami Percaya Bahwa Akses Ke Teknologi Terbaru Seharusnya Menjadi Lebih Mudah.
                    </p>
                    <p class="about-text">
                        Sebagai Tim Pecinta Teknologi Dan Inovasi, Kami Menyaksikan Bahwa Harga iPhone Yang Meningkat Telah Membuat Banyak Orang Kesulitan Untuk Menikmati Perangkat Premium Ini. Di Saat Yang Sama, Kami Melihat Peluang Besar Dalam Ekonomi Berbagi (Sharing Economy) Dan Tren Sewa Yang Berkelanjutan Perangkat Sementara.
                    </p>
                    <p class="about-text">
                        Maka Lahirlah iFlexs - Platform Sewa iPhone Pertama Di Indonesia, Yang Menggabungkan Kemudahan Digital Dan Pengalaman Pengguna Dalam Waktu Singkat. Kami Terus Melayani Ribuan Pelanggan Dan Berkembang Menjadi Pemimpin Pasar Dalam Industri Sewa Perangkat Premium. 
                    </p>
                    <p class="about-text mb-0">
                        Dengan Komitmen Terhadap Transparansi Dan Layanan Pelanggan, Kami Menjamin Proses Sewa Yang Aman, Fleksibel, Dan Terjangkau—Mulai Dari Pemesanan Online Hingga Pengantaran Cepat Ke Rumah Anda.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="about-content h-100 d-flex align-items-center"> <!-- Tambahkan h-100 dan flexbox -->
                    <img src="{{ asset('images/tt.png') }}" alt="iFlexs Store" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover; width: 100%;">
                </div>
            </div>
            </div>

            <!-- Contact Section -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-card">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="map-container">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9848415508587!2d109.3445813!3d-7.3623085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0c66cc3e77f%3A0x8c65b3a41b3c1427!2sJl.%20Blater%2C%20Kalimanah%2C%20Purbalingga%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1624523234432!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">Lokasi</h5>
                                            <p class="mb-0">Jl. Blater Kalimanah, Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">Telepon</h5>
                                            <p class="mb-0">+62 857-2237-4574</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <h5 class="mb-0">Email</h5>
                                            <p class="mb-0">ekbin@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
    .about-section {
            padding-top: 120px;
            padding-bottom: 80px;
            position: relative;
            overflow: hidden;
        }

.about-content {
    background: rgba(20, 20, 20, 0.95);
    border-radius: 20px;
    padding: 40px;
    border: 1px solid rgba(126, 211, 33, 0.2);
    height: 100%; /* Memastikan tinggi konten penuh */
    display: flex;
    flex-direction: column;
}

        .about-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
            color: white;
        }

        .about-title span {
            color: #7ED321;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
        }

        .about-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 40px;
        }

        .contact-card {
            background: rgba(20, 20, 20, 0.95);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(126, 211, 33, 0.2);
        }

        .map-container {
            width: 100%;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: white;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: #7ED321;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .contact-icon i {
            color: black;
            font-size: 1.2rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: #7ED321;
            border-radius: 50%;
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

        /* Glow effects from homepage */
        .glow-effect {
            position: absolute;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(126, 211, 33, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(50px);
            z-index: -1;
        }       

        .about-content img {
            transition: all 0.3s ease;
        }

        .about-content img:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 40px rgba(126, 211, 33, 0.2) !important;
        }
</style>
@endsection