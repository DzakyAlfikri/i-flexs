<section class="profile-form">
    <header>
        <h2 class="text-xl text-white mb-3">
            Ubah Password
        </h2>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="current_password" class="form-label">Password Saat Ini</label>
            <input type="password" 
                   id="current_password" 
                   name="current_password" 
                   class="form-input" 
                   required>
            @error('current_password', 'updatePassword')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password Baru</label>
            <input type="password" 
                   id="password" 
                   name="password" 
                   class="form-input" 
                   required>
            @error('password', 'updatePassword')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
            <input type="password" 
                   id="password_confirmation" 
                   name="password_confirmation" 
                   class="form-input" 
                   required>
            @error('password_confirmation', 'updatePassword')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="button-group">
            <button type="submit" class="btn-save">Simpan</button>
            <button type="reset" class="btn-cancel">Batal</button>
        </div>

        @if (session('status') === 'password-updated')
            <div class="alert-success">
                Password berhasil diperbarui
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
    margin-top: 80px;
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