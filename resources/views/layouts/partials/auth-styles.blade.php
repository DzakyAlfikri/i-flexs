<style>
    body {
            font-family: 'Poppins', sans-serif;
            background: #000000;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .glow-effect {
            position: fixed;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(126, 211, 33, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(50px);
            z-index: 0;
        }

        .glow-1 {
            top: -400px;
            left: -400px;
        }

        .glow-2 {
            bottom: -400px;
            right: -400px;
        }

        .login-container {
            background: #141414;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 600px;  /* Increased from 450px */
            position: relative;
            z-index: 1;
            border: 1px solid rgba(126, 211, 33, 0.1);
        }

        .brand {
            text-align: center;
            margin-bottom: 40px;
        }

        .brand h1 {
            font-size: 32px;
            color: white;
            margin: 0;
        }

        .brand h1 span {
            color: #7ED321;
        }

        .nav-tabs {
            border: none;
            justify-content: center;
            margin-bottom: 30px;
            gap: 20px;
        }

        .nav-tabs .nav-link {
            border: none;
            color: white;
            font-weight: 500;
            padding: 10px 30px;
            border-radius: 25px;
            background: transparent;
        }

        .nav-tabs .nav-link.active {
            background: #7ED321;
            color: black;
        }

        .form-label {
            color: white;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            background: #1E1E1E;
            border: 1px solid #2A2A2A;
            color: white;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .form-control:focus {
            background: #1E1E1E;
            border-color: #7ED321;
            color: white;
            box-shadow: none;
        }

        .password-field {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a7a7a7;
            cursor: pointer;
        }

        .form-check {
            margin-bottom: 20px;
        }

        .form-check-label {
            color: white;
            font-size: 14px;
        }

        .form-check-input:checked {
            background-color: #7ED321;
            border-color: #7ED321;
        }

        .forgot-password {
            color: #7ED321;
            text-decoration: none;
            font-size: 14px;
            float: right;
        }

        .btn-login {
            background: #7ED321;
            color: black;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            margin-bottom: 20px;
            border: none;
        }

        .btn-login:hover {
            background: #6BC91A;
        }

        .social-login {
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: #7ED321;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #6BC91A;
            transform: translateY(-3px);
            color: black;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 24px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
        }

        .close-btn:hover {
            color: #7ED321;
        }

        /* Register specific styles */
        .register-container {
            background: #141414;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(126, 211, 33, 0.1);
        }

        .btn-register {
            background: #7ED321;
            color: black;
            font-weight: 600;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            margin-bottom: 20px;
            border: none;
        }

        .btn-register:hover {
            background: #6BC91A;
        }

        .login-link {
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        .login-link a {
            color: #7ED321;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Form layout for register */
        .row {
            margin: 0 -15px;
        }

        .col-md-6 {
            padding: 0 15px;
        }

        @media (max-width: 768px) {
            .register-container {
                max-width: 100%;
                margin: 15px;
            }
        }

        @media (max-width: 767px) {
            .login-container {
                max-width: 450px;  /* Return to original width on mobile */
            }
        }

        /* Forgot Password specific styles */
        .text-white {
            color: #fff;
        }

        .text-green-500 {
            color: #7ED321;
        }

        .text-center {
            text-align: center;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        /* Session status alert styling */
        .forgot-password-box {
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 8px;
            background-color: rgba(126, 211, 33, 0.1);
            border: 1px solid #7ED321;
            color: #fff;
        }
</style>