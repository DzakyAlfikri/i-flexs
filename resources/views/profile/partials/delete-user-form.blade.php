<section class="profile-form">
    <header>
        <h2 class="text-xl text-white mb-3">
            Hapus Akun
        </h2>
        <p class="text-gray-400 text-sm mb-4">
            Setelah akun Anda dihapus, semua data akan dihapus secara permanen. Harap unduh data atau informasi yang ingin Anda simpan sebelum menghapus akun.
        </p>
    </header>

    <button class="btn-danger"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Hapus Akun</button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="modal-form">
            @csrf
            @method('delete')

            <h2 class="text-xl text-white mb-3">
                Anda yakin ingin menghapus akun?
            </h2>

            <p class="text-gray-400 text-sm mb-4">
                Setelah akun dihapus, semua data akan hilang secara permanen. Masukkan password Anda untuk mengkonfirmasi penghapusan akun.
            </p>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" 
                       id="password"
                       name="password"
                       class="form-input"
                       placeholder="Masukkan password Anda"
                       required>
                @error('password', 'userDeletion')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="button-group">
                <button type="submit" class="btn-danger">Hapus Akun</button>
                <button type="button" class="btn-cancel" x-on:click="$dispatch('close')">
                    Batal
                </button>
            </div>
        </form>
    </x-modal>
</section>

<style>
.profile-form {
    background: #141414;
    padding: 30px;
    border-radius: 12px;
    color: white;
    margin-top: 80px;
}

.modal-form {
    background: #141414;
    padding: 24px;
    border-radius: 12px;
    color: white;
}

.btn-danger {
    background: #dc3545;
    color: white;
    padding: 10px 24px;
    border-radius: 20px;
    border: none;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-danger:hover {
    background: #bb2d3b;
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

</style>