<div>
    <h3>Login</h3>
    @if (session()->has('log_err'))
        <span class="text-danger">{{ session('log_err') }}</span>
    @endif
    @if (session()->has('regist_suc'))
        {{ session('regist_suc') }}
    @endif
    <form action="login" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name='email' id="email" placeholder="Masukan username">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name='password' id="password" placeholder="Masukan password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 mt-4">
            <button type="submit" class="btn btn-primary pt-3 pb-3 w-100">
                <div wire:loading wire:target="login">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span>Masuk</span>
            </button>
        </div>
    </form>
    <a href="/register" class="btn btn-primary btn-primary-seccond pt-3 pb-3 w-100">Buat Akun</a>
</div>
