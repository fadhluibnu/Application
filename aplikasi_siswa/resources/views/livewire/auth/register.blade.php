<div>
    <a href="/login" class="nav-link ps-0"><i class="bi bi-chevron-compact-left me-2"></i>Login</a>
    <h3>Daftar</h3>
    <form wire:submit.prevent='store'>
        @csrf
        <div class="mb-3 mt-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan username" required
                autocomplete="off" wire:model='name'>
        </div>
        <div class="mb-3 mt-3">
            <label for="email-daftar" class="form-label">Username</label>
            <input type="email" class="form-control" id="email-daftar" placeholder="Masukan username"
                wire:model="email" oninput="validasiUser()" autocomplete="off" required>
            {{-- <div class="d-flex flex-wrap">
                <span id="validasi-user" class="mt-1">
                    <div id="template_val" class='invalid-feedback d-inline ms-2'>
                        <i class='bi bi-check ms-1'></i>Username Tersedia
                    </div>
                </span>
                <div class="invalid-feedback d-inline" id="invalid-spasi">
                    <i class="bi bi-check ms-1"></i>Tidak boleh ada spasi
                </div>
                <div class="invalid-feedback d-inline ms-2" id="invalid-huruf">
                    <i class="bi bi-check ms-1"></i>Panjang minimal 3 huruf
                </div>
            </div> --}}
        </div>
        <div class="mb-3 mt-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" wire:model='password' id="password"
                placeholder="Masukan password" oninput="validasiPass()" required>
            {{-- <div class="d-flex flex-wrap">
                <div class="invalid-feedback d-inline" id="angka">
                    <i class="bi bi-check ms-1"></i>Mengandung angka
                </div>
                <div class="invalid-feedback d-inline ms-2" id="Panjang">
                    <i class="bi bi-check ms-1"></i>Panjang minimal 6 Karakter
                </div>
                <div class="invalid-feedback d-inline" id="huruf-kecil">
                    <i class="bi bi-check ms-1"></i>Mengandung huruf kecil
                </div>
                <div class="invalid-feedback d-inline ms-2" id="huruf-kapital">
                    <i class="bi bi-check"></i>Mengandung huruf kapital
                </div>
            </div> --}}
        </div>
        <div class="mb-3 mt-4">
            <button type="submit" id="button-daftar" class="btn btn-primary pt-3 pb-3 w-100">Daftar</button>
        </div>
    </form>
</div>
