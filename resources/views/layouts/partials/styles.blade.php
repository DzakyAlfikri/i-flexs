<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'poppins', sans-serif;
            background:#000000;
            color: white;
            overflow-x: hidden;
        }

        .container {
            padding-left: 100px;
            padding-right: 100px;
            max-width: 95%;
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 5px;
                padding-right: 5px;
                max-width: 98%;
            }
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

        .nav-link:hover{
            color: #7ED321 !important;
        }

        .nav-item {
            list-style: none
        }

        .nav-link.active {
            color: #7ED321 !important;
        }

        .nav-profil {
            text--decoration: none;
        }

        .user-menu {
            position: relative;
        }

        .login-btn {
            background: #7ED321;
            color: black;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            border: none;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .login-btn:hover {
            background: #6BC91A;
            transform: translateY(-2px);
        }

        .btn-login-mobile {
            background: #7ED321;
            color: black;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-login-mobile:hover {
            background: #6BC91A;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .nav-link {
                text-align: center;
            }
            
            .btn-login-mobile {
                margin: 0.5rem auto;
                max-width: 200px;
            }
        }

        .dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: rgba(0, 0, 0, 0.95);
            border: 1px solid rgba(126, 211, 33, 0.2);
            border-radius: 8px;
            padding: 0.5rem;
            margin-top: 0.5rem;
            display: none;
            min-width: 150px;
        }

        .dropdown li {
            list-style: none;
        }

        .dropdown a,
        .dropdown button {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            display: block;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .dropdown a:hover,
        .dropdown button:hover {
            background: #7ED321;
            color: black;
            border-radius: 4px;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            z-index: 2;
            position: relative;
        }

        .hero-tag {
            color: #7ED321;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 64px; /* Mengubah dari 4rem menjadi 64px */
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .hero-title .highlight {
            color: #7ED321;
        }

        .navbar-brand .navhighlight {
            color: #ffffff;
        }

        .hero-description {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .btn-rent {
            background: #7ED321;
            color: black;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 30px;
            border: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-rent:hover {
            background: #6BC91A;
            color: black;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.3);
        }

        .iphones-container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 600px;
            margin-right: -150px;
        }

        .iphone-image {
            width: 688px;
            height: 493px;
            object-fit: contain;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.3));
            transition: all 0.3s ease;
        }

        .iphone-image:hover {
            transform: translateY(-10px) scale(1.02);
            filter: drop-shadow(0 30px 60px rgba(126, 211, 33, 0.2));
        }

        @media (max-width: 768px) {
            .iphone-image {
              width: 100%;
             height: auto;
            }
        }

        .iphone-stack {
            position: relative;
            height: 500px;
            width: 100%;
        }

        .iphone {
            position: absolute;
            width: 120px;
            height: 250px;
            border-radius: 25px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .iphone:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .camera-module {
            width: 30px;
            height: 30px;
            background: #333;
            border-radius: 8px;
            position: absolute;
            top: 15px;
            left: 15px;
        }

        .testimonials {
            margin-top: -150px;
        }

        .testimonial-card {
            background: #14532D;
            border: none;
            border-left: 6px solid #7ED321; /* Border kiri lebih tebal */
            border-radius: 0 8px 8px 0; /* Hapus radius kiri */
            padding: 35px;
            margin: 20px;
            height: 100%; /* Membuat tinggi sama */
            min-height: 160px; /* Minimal height */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
        }

        .testimonial-text {
            font-size: 1.3rem;
            line-height: 1.4;
            margin-bottom: 0px;
            font-style: normal;
            font-weight: 600;
            color: white;
            flex-grow: 1; /* Memungkinkan text mengisi ruang */
        }

        .testimonial-author {
            color: #7ED321;
            font-weight: 500;
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: auto; /* Push author ke bawah */
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            background: rgba(3, 27, 11, 0.9);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.15);
            border-left-color: #6BC91A; /* Warna border berubah saat hover */
        }

        .glow-effect {
            position: absolute;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(126, 211, 33, 0.3) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(50px);
            overflow: hidden;
        }

        .glow-1 {
            top: 80%;
            right: 5%;
            animation-delay: 0s;
        }

        .glow-2 {
            bottom: 10%;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 32px; /* Menyesuaikan ukuran untuk mobile */
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .iphone-stack {
                height: 300px;
            }

        }

        /* Kenapa Sewa? */
        .why-rent {
            background: #000000; /* Mengubah background menjadi hitam */
            padding: 135px 0;
            position: relative;
            overflow: hidden;
        }

        .why-rent h2 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 135px;
            text-align: center;
        }

        .why-rent h2 .text-success {
            color: #7ED321 !important; /* Warna hijau untuk 'Flexs' */
        }

        .feature-card {
            background: #141414; /* Warna background card lebih gelap */
            border: none;
            border-radius: 16px;
            padding: 35px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card i {
            color: #7ED321 !important; /* Warna hijau untuk ikon */
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.7); /* Text opacity untuk deskripsi */
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: #1a1a1a; /* Sedikit lebih terang saat hover */
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.1);
        }

        /* Latest Phones Section */
        .latest-phones {
            background: #0d0d0d;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .latest-phones .tag {
            color: #7ED321;
            font-weight: 600;
            font-size: 24px;
            text-align: left;
            margin-bottom: 30px;
        }

        .latest-phones h2 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: left;
        }

        .phone-card {
            background: #141414;
            border-radius: 16px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .phone-img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .phone-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: white;
        }

        .phone-card p {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
        }

        .price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #7ED321;
        }

        .period {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-success {
            background: #7ED321;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            transition: all 0.3s ease;
            display: inline-block;
        }


        .btn-success:hover {
            background: #6BC91A;
            transform: translateY(-2px);
        }

        .btn-outline-success {
            background: #7ED321;
            color: black !important;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-outline-success:hover {
            background: #6BC91A;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.15);
        }

        .btn-outline-success i {
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .btn-outline-success:hover i {
            transform: translateX(3px);
        }

        @media (max-width: 768px) {
            .latest-phones h2 {
                font-size: 28px;
            }
            
            .phone-card {
                margin-bottom: 30px;
            }

            .btn-outline-success {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        .phone-card {
            background: #141414;
            border-radius: 16px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid transparent; /* Tambahkan border transparent */
        }

        .phone-card:hover {
            transform: translateY(-10px);
            border: 1px solid #7ED321; /* Border hijau saat hover */
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.15),
                        0 0 0 1px rgba(126, 211, 33, 0.1); /* Double shadow effect */
            background: #1a1a1a; /* Sedikit lebih terang saat hover */
        }

        .phone-card:hover .btn-success {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(126, 211, 33, 0.2);
        }

        .phone-img {
            transition: all 0.3s ease;
        }

        .phone-card:hover .phone-img {
            transform: scale(1.02); /* Sedikit zoom pada gambar saat hover */
        }

        /* How to Rent Section */
        .how-to-rent {
            margin-top: 80px;
            background: #000000;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .how-to-rent h2 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 100px;
            text-align: center;
        }

        .how-to-rent h2 span {
            color: #7ED321;
        }

        .rental-steps {
            position: relative;
            z-index: 1;
        }

        .connection-line {
            position: absolute;
            height: 2px; /* Mengubah jadi horizontal line */
            width: 100%;
            background: #7ED321;
            top: 50px; /* Sejajar dengan tengah icon */
            left: 0;
            z-index: 0;
        }

        .step-item {
            background: transparent;
            padding: 0;
            text-align: center;
            transition: all 0.3s ease;
        }

        .step-icon {
            width: 64px;
            height: 64px;
            background: #000000;
            border: #7ED321 2px solid;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            position: relative;
            z-index: 2;
        }

        .step-icon i {
            font-size: 24px;
            color: #7ED321;
        }

        .step-item h3 {
            font-size: 20px;
            font-weight: 600;
            color: white;
            margin-bottom: 12px;
        }

        .step-item p {
            font-size: 14px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
        }

        @media (max-width: 768px) {
            .connection-line {
                display: none;
            }
            
            .how-to-rent h2 {
                font-size: 32px;
                margin-bottom: 40px;
            }
            
            .step-item {
                margin-bottom: 40px;
            }
            
            .step-icon {
                width: 48px;
                height: 48px;
            }
            
            .step-icon i {
                font-size: 20px;
            }
        }

        /* CTA Section */
        .cta-section {
            padding: 60px 0;
            margin-top: 60px;
        }

        .cta-wrapper {
            background: linear-gradient(
                    90deg,
                    rgba(0, 0, 0, 0.95) 0%,
                    rgba(0, 0, 0, 0.85) 50%,
                    rgba(0, 0, 0, 0.1) 100%
                ),
                url('{{ asset('images/display.jpg') }}') center/cover no-repeat;
            border: 1px solid #7ED321;
            border-radius: 16px;
            padding: 40px;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            color: white;
        }

        .cta-title {
            font-size: 32px;
            font-weight: bold;
            color: white;
            margin: 0;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            .cta-section {
                padding: 40px 0;
            }
            
            .cta-wrapper {
                padding: 30px 20px;
            }
            
            .cta-title {
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;
            }
            
            .cta-section .btn-rent {
                width: 100%;
                text-align: center;
            }
        }

        /* Footer Section */
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

            .navbar-collapse {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.95);
        padding: 1rem;
        border-radius: 8px;
        transition: all 0.3s ease-in-out;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(126, 211, 33, 0.2);
    }

    .navbar-collapse.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    @media (max-width: 768px) {
    .btn-logout {
        background: none;
        border: none;
        color: white;
        width: 100%;
        text-align: center;
        padding: 0;
        cursor: pointer;
        font-weight: 600;
    }

    .btn-logout:hover {
        color: #7ED321;
    }

    .nav-link form {
        margin: 0;
        padding: 0;
    }
}

    .navbar-toggler {
        padding: 0.25rem;
        border: 1px solid rgba(126, 211, 33, 0.5);
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .navbar-toggler:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(126, 211, 33, 0.3);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(126, 211, 33, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-nav {
        padding: 0.5rem 0;
    }

    .nav-item {
        margin: 0.5rem 0;
        text-align: center;
    }

    .nav-link {
        padding: 0.5rem 1rem;
    }
        }

    /*Product Page Styles*/

    .products-header {
            padding-top: 120px;
            padding-bottom: 60px;
            background: #000000;
        }

        .products-title {
            font-size: 48px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        .products-description {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 40px;
        }

        .filter-section {
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 40px;
        }

        .filter-btn {
            background: transparent;
            color: white;
            border: 1px solid #7ED321;
            padding: 8px 16px;
            border-radius: 20px;
            margin: 5px;
            transition: all 0.3s ease;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #7ED321;
            color: black;
        }

        .search-box {
            background: #1a1a1a;
            border: 1px solid #7ED321;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            width: 100%;
            margin-bottom: 20px;
        }

        .search-box:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(126, 211, 33, 0.2);
        }

        .sort-select {
            background: #1a1a1a;
            border: 1px solid #7ED321;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            width: 200px;
        }

        .sort-select:focus {
            outline: none;
            border-color: #6BC91A;
        }

        .latest-phones {
            background: #0d0d0d;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .latest-phones .tag {
            color: #7ED321;
            font-weight: 600;
            font-size: 24px;
            text-align: left;
            margin-bottom: 30px;
        }

        .latest-phones h2 {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: left;
        }

        .phone-card {
            background: #141414;
            border-radius: 16px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .phone-img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .phone-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: white;
        }

        .phone-card p {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
        }

        .price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #7ED321;
        }

        .period {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-success {
            background: #7ED321;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            transition: all 0.3s ease;
            display: inline-block;
        }


        .btn-success:hover {
            background: #6BC91A;
            transform: translateY(-2px);
        }

        .btn-outline-success {
            background: #7ED321;
            color: black !important;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-outline-success:hover {
            background: #6BC91A;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.15);
        }

        .btn-outline-success i {
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .btn-outline-success:hover i {
            transform: translateX(3px);
        }

        @media (max-width: 768px) {
            .latest-phones h2 {
                font-size: 28px;
            }
            
            .phone-card {
                margin-bottom: 30px;
            }

            .btn-outline-success {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        .phone-card {
            background: #141414;
            border-radius: 16px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid transparent; /* Tambahkan border transparent */
        }

        .phone-card:hover {
            transform: translateY(-10px);
            border: 1px solid #7ED321; /* Border hijau saat hover */
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.15),
                        0 0 0 1px rgba(126, 211, 33, 0.1); /* Double shadow effect */
            background: #1a1a1a; /* Sedikit lebih terang saat hover */
        }

        .phone-card:hover .btn-success {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(126, 211, 33, 0.2);
        }

        .phone-img {
            transition: all 0.3s ease;
        }

        .phone-card:hover .phone-img {
            transform: scale(1.02); /* Sedikit zoom pada gambar saat hover */
        }

        .pagination {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .pagination .page-item .btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            font-size: 14px;
            border-radius: 8px;
            background: #141414;
            color: #7ED321;
            border: 1px solid #7ED321;
        }

        .pagination .page-item .btn.active {
            background: #7ED321;
            color: black;
        }

        .pagination .page-item .btn:hover {
            background: #7ED321;
            color: black;
        }

        .products-header img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .custom-select {
        position: relative;
        display: inline-block;
        }

        .custom-select .sort-select {
            appearance: none;
            -webkit-appearance: none;
            background: #1a1a1a;
            border: 1px solid #7ED321;
            color: white;
            padding: 12px 45px 12px 20px;
            border-radius: 12px;
            width: 200px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-select i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7ED321;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .custom-select .sort-select:hover {
            background: #242424;
            box-shadow: 0 0 15px rgba(126, 211, 33, 0.15);
        }

        .custom-select .sort-select:focus {
            outline: none;
            border-color: #7ED321;
            background: #242424;
            box-shadow: 0 0 0 3px rgba(126, 211, 33, 0.1);
        }

        .custom-select .sort-select:focus + i {
            transform: translateY(-50%) rotate(180deg);
        }

        @media (max-width: 768px) {
            .custom-select .sort-select {
                width: 100%;
                margin-top: 10px;
            }
        }

        /* Product Details Page */

        .product-detail {
            padding-top: 180px;
            padding-bottom: 60px;
        }

        .product-gallery {
            border: 1px solid #7ED321;
            border-radius: 16px;
            padding: 20px;
            background: #141414;
        }

        .main-image {
            width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: #7ED321;
        }

        .product-info h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .color-options,
        .storage-options {
            margin-bottom: 30px;
        }

        .option-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 10px;
        }

        .color-btn,
        .storage-btn {
            background: transparent;
            border: 1px solid #7ED321;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .color-btn.active,
        .storage-btn.active,
        .color-btn:hover,
        .storage-btn:hover {
            background: #7ED321;
            color: black;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: 1px solid #7ED321;
            background: transparent;
            color: #7ED321;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: #7ED321;
            color: black;
        }

        .quantity-input {
            width: 60px;
            text-align: center;
            background: transparent;
            border: none;
            color: white;
            font-size: 1.2rem;
        }

        .price-tag {
            font-size: 2rem;
            font-weight: bold;
            color: #7ED321;
            margin-bottom: 30px;
        }

        .rent-btn {
            background: #7ED321;
            color: black;
            font-weight: bold;
            padding: 15px 40px;
            border-radius: 30px;
            border: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .rent-btn:hover {
            background: #6BC91A;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(126, 211, 33, 0.2);
        }

        @media (max-width: 768px) {
            .product-detail {
                padding-top: 100px;
            }

            .product-info {
                margin-top: 30px;
            }

            .product-info h1 {
                font-size: 2rem;
            }
</style>