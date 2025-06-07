@extends('layouts.auth')

@section('title', 'Login - iFlexs')

@section('content')
<div class="login-container">
    <a href="{{ route('home') }}" class="close-btn">×</a>
    
    <div class="brand">
        <h1>i<span>Flexs</span></h1>
    </div>

    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#login">Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Daftar</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="login" class="tab-pane fade show active">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                    <div class="password-field">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                        <i class="fas fa-eye password-toggle"></i>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ingat Saya</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Lupa Kata Sandi?</a>
                    @endif
                </div>

                <button type="submit" class="btn btn-login">Masuk</button>
            </form>
        </div>
    </div>

    <div class="social-login">
        <div class="social-icons">
            <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.password-toggle').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    });
</script>
@endpush
