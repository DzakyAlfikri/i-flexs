@extends('layouts.auth')

@section('title', 'Register - iFlexs')

@section('content')
    <div class="register-container">
        <button class="close-btn">×</button>
        
        <div class="brand">
            <h1>i<span>Flexs</span></h1>
        </div>

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Masuk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#register">Daftar</a>
            </li>
        </ul>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda" value="{{ old('name') }}" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat Anda" value="{{ old('address') }}">
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nomor Ponsel</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Masukkan Nomor Anda" value="{{ old('phone') }}">
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <div class="password-field">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                            <i class="fas fa-eye password-toggle"></i>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Kata Sandi</label>
                        <div class="password-field">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Kata Sandi" required>
                            <i class="fas fa-eye password-toggle"></i>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-register">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
        </div>
    </div>
@endsection
