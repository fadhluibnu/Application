<div>
    <span class="d-none" id="title-nav">{{ $title }}</span>
    <span id="title-main-nav" class="d-none">File - Tambah Data</span>
    <div class="container bg-white p-4 mt-3">
        <a href="/add" class="btn text-primary ps-0 mb-3 fw-normal"><i class="bi bi-chevron-compact-left"></i> Kembali</a>
        <h1 class="add mb-3">File | Tambah Data</h1>
        <form action="/add/file" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="idUser" value="{{ auth()->user()->id }}">
            <div class="input-group mb-3">
                <input type="file" name="fileImport" class="form-control @error('fileImport') is-invalid @enderror"
                    placeholder="Recipient's username" aria-label="Recipient's username"
                    aria-describedby="button-addon2" required>
            </div>
            <button class="btn btn-primary px-3 py-2 rounded-5px" type="submit" id="button-addon2"><i
                    class="bi bi-check2-circle"></i>
                Cek
                Data</button>
        </form>
    </div>
</div>
