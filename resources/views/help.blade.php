@extends('layouts.homepage')

@section('title', 'Bantuan - iFlexs')

@section('content')
    <header class="help-header">
        <div class="container">
            <h1 class="help-title">Pusat <span>Bantuan</span></h1>
            <p class="help-subtitle">Temukan jawaban untuk pertanyaan umum dan panduan lengkap tentang layanan kami</p>
        </div>
    </header>
        <!-- Contact Section -->
        <!-- Replace the existing contact section with this code -->
        <section class="contact-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Telepon -->
                    <div class="col-md-4 mb-4">
                        <div class="contact-box text-center p-4" style="background: #141414; border-radius: 15px;">
                            <div class="icon-circle mb-3 mx-auto" style="width: 64px; height: 64px; background: #141414; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-phone text-white" style="font-size: 24px;"></i>
                            </div>
                            <h4 class="text-white mb-3">Telepon</h4>
                            <p class="text-white-50 mb-3">Bicara Langsung Dengan Tim Dukungan Kami Untuk Bantuan Cepat Dan Efisien</p>
                            <a href="tel:089723852765" class="text-decoration-none" style="color: #7ED321;">089723852765 →</a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-4 mb-4">
                        <div class="contact-box text-center p-4" style="background: #141414; border-radius: 15px;">
                            <div class="icon-circle mb-3 mx-auto" style="width: 64px; height: 64px; background: #141414; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-envelope text-white" style="font-size: 24px;"></i>
                            </div>
                            <h4 class="text-white mb-3">Email</h4>
                            <p class="text-white-50 mb-3">Kirim Pertanyaan Atau Laporan Masalah Anda Melalui Email</p>
                            <a href="mailto:iflexshelp@gmail.com" class="text-decoration-none" style="color: #7ED321;">iflexshelp@gmail.com →</a>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="col-md-4 mb-4">
                        <div class="contact-box text-center p-4" style="background: #141414; border-radius: 15px;">
                            <div class="icon-circle mb-3 mx-auto" style="width: 64px; height: 64px; background: #141414; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fab fa-whatsapp text-white" style="font-size: 24px;"></i>
                            </div>
                            <h4 class="text-white mb-3">WhatsApp</h4>
                            <p class="text-white-50 mb-3">Dapatkan Bantuan Instan Melalui Chat WhatsApp Dengan Konsultan Kami</p>
                            <a href="#" class="text-decoration-none" style="color: #7ED321;">Chat Sekarang →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="faq-card">
                        <div class="accordion" id="faqAccordion">
                            <!-- FAQ Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Bagaimana cara menyewa iPhone di iFlexs?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Untuk menyewa iPhone, pilih model yang Anda inginkan, tentukan durasi sewa, isi form pemesanan, dan lakukan pembayaran. Tim kami akan mengirimkan iPhone ke alamat Anda.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Apa saja dokumen yang diperlukan untuk menyewa?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Anda perlu menyiapkan KTP, bukti tempat tinggal (seperti tagihan utilitas), dan deposit sesuai ketentuan yang berlaku.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Bagaimana jika terjadi kerusakan pada iPhone sewaan?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Setiap iPhone dilindungi asuransi dasar. Kerusakan akan ditangani sesuai dengan kebijakan asuransi dan tingkat kerusakan yang terjadi.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Add this section after the contact section -->
    <section class="complaint-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="complaint-form-card" style="background: #141414; border-radius: 15px; padding: 40px;">
                        <h2 class="text-center mb-2">Kirim <span style="color: #7ED321;">Pesan</span></h2>
                        <p class="text-center text-white-50 mb-4">Isi Formulir Di Bawah Ini Dan Tim Kami Akan Merespons Segera</p>
                        
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            
                            @if(session('success'))
                            <div class="alert alert-success mb-4">
                                {{ session('success') }}
                            </div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label text-white">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                    value="{{ old('name') }}" style="background: #1a1a1a; border: 1px solid #333; color: white; padding: 12px;" 
                                    placeholder="Masukkan nama lengkap">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label text-white">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                                    value="{{ old('email') }}" style="background: #1a1a1a; border: 1px solid #333; color: white; padding: 12px;" 
                                    placeholder="Masukkan alamat email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label text-white">Subjek</label>
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" 
                                    value="{{ old('subject') }}" style="background: #1a1a1a; border: 1px solid #333; color: white; padding: 12px;" 
                                    placeholder="Masukkan subjek pesan">
                                @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label text-white">Pesan</label>
                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" 
                                        rows="5" style="background: #1a1a1a; border: 1px solid #333; color: white; padding: 12px;" 
                                        placeholder="Tulis pesan anda disini">{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn w-100" 
                                    style="background: #7ED321; color: black; font-weight: 600; padding: 12px; border-radius: 8px;">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<style>
                .help-header {
            padding-top: 120px;
            text-align: center;
            margin-bottom: 60px;
        }

        .help-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .help-title span {
            color: #7ED321;
        }

        .help-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        .faq-card {
            background: rgba(20, 20, 20, 0.95);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(126, 211, 33, 0.2);
            margin-bottom: 30px;
        }

        .accordion-item {
            background: transparent;
            border: 1px solid rgba(126, 211, 33, 0.2);
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
        }

        .accordion-button {
            background: transparent;
            color: white;
            font-weight: 600;
            padding: 20px;
        }

        .accordion-button:not(.collapsed) {
            background: #7ED321;
            color: black;
        }

        .accordion-body {
            background: rgba(0, 0, 0, 0.3);
            color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }

        .glow-effect {
            position: absolute;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(126, 211, 33, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(50px);
            z-index: -1;
        }

        .contact-card {
            background: rgba(20, 20, 20, 0.95);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(126, 211, 33, 0.2);
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: #7ED321;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .contact-icon i {
            color: black;
            font-size: 1.2rem;
        }

        .contact-text h5 {
            color: white;
            margin-bottom: 5px;
        }

        .contact-text p {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
        }

        .complaint-form-card {
            border: 1px solid rgba(126, 211, 33, 0.2);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: #1a1a1a;
            border-color: #7ED321;
            box-shadow: 0 0 0 0.2rem rgba(126, 211, 33, 0.25);
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-control:hover {
            border-color: #7ED321;
        }
</style>
@endsection