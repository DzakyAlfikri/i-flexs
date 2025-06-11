<section class="profile-form">
    <header>
        <h2 class="text-xl text-white mb-3">
            Informasi Profil
        </h2>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" 
                   id="name" 
                   name="name" 
                   class="form-input" 
                   value="{{ old('name', $user->name) }}" 
                   required>
            @error('name')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" 
                   id="email" 
                   name="email" 
                   class="form-input" 
                   value="{{ old('email', $user->email) }}" 
                   required>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">Nomor Ponsel</label>
            <input type="tel" 
                   id="phone" 
                   name="phone" 
                   class="form-input" 
                   value="{{ old('phone', $user->phone) }}">
            @error('phone')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" 
                   id="address" 
                   name="address" 
                   class="form-input" 
                   value="{{ old('address', $user->address) }}">
            @error('address')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="button-group">
            <button type="submit" class="btn-save">Simpan</button>
            <button type="reset" class="btn-cancel">Batal</button>
        </div>

        @if (session('status') === 'profile-updated')
            <div class="alert-success">
                Profil berhasil diperbarui
            </div>
        @endif
    </form>
</section>

<style>
.profile-form {
    background: #141414;
    padding: 30px;
    border-radius: 12px;
    color: white;
    margin-top: 80px
}

.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    color: #7ED321;
    font-weight: 500;
}

.form-input {
    width: 100%;
    padding: 10px 15px;
    border-radius: 8px;
    border: 1px solid #333;
    background: #1a1a1a;
    color: white;
    transition: border-color 0.2s;
}

.form-input:focus {
    outline: none;
    border-color: #7ED321;
}

.error-message {
    color: #ff4444;
    font-size: 14px;
    margin-top: 5px;
    display: block;
}

.button-group {
    display: flex;
    gap: 10px;
    margin-top: 30px;
}

.btn-save {
    background: #7ED321;
    color: black;
    padding: 10px 24px;
    border-radius: 20px;
    border: none;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-cancel {
    background: #1E1E1E;
    color: white;
    padding: 10px 24px;
    border-radius: 20px;
    border: 1px solid #333;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-save:hover {
    background: #6db81d;
}

.btn-cancel:hover {
    background: #2a2a2a;
}

.alert-success {
    background: #7ED321;
    color: black;
    padding: 12px;
    border-radius: 8px;
    margin-top: 20px;
    font-weight: 500;
    animation: fadeOut 2s forwards;
    animation-delay: 2s;
}

@keyframes fadeOut {
    to {
        opacity: 0;
        visibility: hidden;
    }
}
</style>