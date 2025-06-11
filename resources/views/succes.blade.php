@extends('layouts.homepage')
@section('title', 'Pesan iPhone - iFlexs')
@section('content')
<section class="success-section">
    <section class="confirmation-section">
        <div class="container">
            <div class="confirmation-content">
                <div class="confirmation-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h1 class="confirmation-title">Pengajuan Berhasil!</h1>
                <p class="confirmation-message">
                    Terima Kasih! Pengajuan Sewa Anda Telah Berhasil Dikirimkan. Tim Kami 
                    Akan Segera Mereview Dan Memproses Pengajuan Anda. Mohon Menunggu 
                    Konfirmasi Melalui Email Dan WhatsApp Dalam Waktu 1x24 Jam.
                </p>
                <div>
                    <a href="#" class="btn-action btn-status">Lihat Status Pengajuan</a>
                    <a href="#" class="btn-action btn-home">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </section>

        <style>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background: transparent !important;
            padding: 20px 0;
            transition: all 0.3s ease;
        }

        .navbar .container {
            padding-left: 100px;
            padding-right: 100px;
            max-width: 95%;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #7ED321 !important;
        }

        .navbar-brand .navhighlight {
            color: #ffffff;
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

        .confirmation-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 0;
            padding-top: 200px;
        }

        .confirmation-content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .confirmation-icon {
            width: 120px;
            height: 120px;
            background: #7ED321;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
        }

        .confirmation-icon i {
            font-size: 60px;
            color: black;
        }

        .confirmation-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #7ED321;
        }

        .confirmation-message {
            font-size: 16px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 40px;
        }

        .btn-action {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        .btn-status {
            background: #7ED321;
            color: black;
            border: none;
        }

        .btn-home {
            background: transparent;
            color: #7ED321;
            border: 2px solid #7ED321;
        }

        .btn-action:hover {
            transform: translateY(-2px);
        }

        .btn-status:hover {
            background: #6BC91A;
            color: black;
        }

        .btn-home:hover {
            background: #7ED321;
            color: black;
        }

        .footer {
            background: #0A0A0A;
            padding: 80px 0;
            margin-top: auto;
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
            color: #7ED321;
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
            .navbar .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .confirmation-section {
                padding: 60px 20px;
            }

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

         @keyframes iconScale {
        0% { 
            transform: scale(0); 
            opacity: 0; 
        }
        50% { 
            transform: scale(1.2); 
        }
        100% { 
            transform: scale(1);
            opacity: 1;
        }
    }

        @keyframes checkmark {
            0% { 
                transform: scale(0) rotate(-45deg);
                opacity: 0;
            }
            50% { 
                transform: scale(1.2) rotate(-45deg);
            }
            100% { 
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        .confirmation-icon {
            width: 120px;
            height: 120px;
            background: #7ED321;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: iconScale 0.6s ease-out forwards;
        }

        .confirmation-icon i {
            font-size: 60px;
            color: black;
            animation: checkmark 0.8s ease-out 0.3s both;
        }
    </style>

        <script>
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(0, 0, 0, 0.9)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = 'transparent';
                navbar.style.backdropFilter = 'none';
            }
        });
    </script>
@endsection