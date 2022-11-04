<div>
    {{-- <span class="d-none" id="title-nav">{{ $title }}</span>
    <span id="title-main-nav" class="d-none">Cek Data</span>
    <h2>Data ganda ditemukan</h2>
    <div class="row">
        <div class="col-6">
            <h6>Data Baru :</h6>
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentsValidation as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->jurusan }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table mb-0">
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm">Perbarui</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h6>Data Lama :</h6>
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($old_data_validation as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['nis'] }}</td>
                            <td>{{ $item['jurusan'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table mb-0">
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <button class="btn btn-danger" wire:click="batal_sum">
        <div wire:loading wire:target="batal_sum">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="visually-hidden">Loading...</span>
        </div>
        <span>Batal</span>
    </button> --}}

    <span class="d-none" id="title-nav">{{ $title }}</span>
    <span id="title-main-nav" class="d-none">Cek Data</span>
    <div class="container bg-white p-4 mt-3">
        <h1 class="add mb-3">Data Ganda</h1>
        <div class="row mt-4">
            <div class="col-6 border-end border-bottom">
                <div class="row header p-2">
                    <div class="col-4">
                        <span class="my-table-header">NIS</span>
                    </div>
                    <div class="col-4">
                        <span class="my-table-header">Nama <svg width="9" height="6" viewBox="0 0 9 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L4.5 5L8 1" stroke="#293049" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="col-4">
                        <span class="my-table-header">Option</span>
                    </div>
                </div>
            </div>
            <div class="col-6 border-bottom">
                <div class="row header p-2">
                    <div class="col-4">
                        <span class="my-table-header">NIS</span>
                    </div>
                    <div class="col-4">
                        <span class="my-table-header">Nama <svg width="9" height="6" viewBox="0 0 9 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L4.5 5L8 1" stroke="#293049" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="col-4">
                        <span class="my-table-header">Option</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                @foreach ($studentsValidation as $item)
                    <div class="row table-value p-2">
                        <div class="col-4">
                            <span class="my-table-main">{{ $item->nis }}</span>
                        </div>
                        <div class="col-4">
                            <span class="my-table-main">{{ $item->nama }}</span>
                        </div>
                        <div class="col-4">
                            <span class="my-table-main">
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-6">
                @foreach ($old_data_validation as $item)
                    <div class="row table-value p-2">
                        <div class="col-4">
                            <span class="my-table-main">{{ $item['nis'] }}</span>
                        </div>
                        <div class="col-4">
                            <span class="my-table-main">{{ $item['nama'] }}</span>
                        </div>
                        <div class="col-4">
                            <span class="my-table-main">
                                <button class="btn btn-sm btn-outline-danger">Hapus</button>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex mt-3">
            <button class="btn px-3 py-2 my-btn-danger-seccond"><i class="bi bi-x-circle"></i> Batal</button>
            <button class="btn px-3 py-2 ms-2 btn-success"><i class="bi bi-check2-circle"></i> Simpan</button>
        </div>
    </div>

</div>
