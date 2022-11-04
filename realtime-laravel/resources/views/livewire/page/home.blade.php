<div>
    <div class="container">
        <livewire:auth.logout></livewire:auth.logout>
        <h3>Welcome, {{ auth()->user()->name }}</h3>

        @if (session()->has('permohonan'))
            <div class="alert alert-success">
                {{ session('permohonan') }}
            </div>
        @endif

        @can('manager')
            <input type="hidden" id="manager" value="0">
            <a href="" id="link-refresh" class="d-none"><span id="refresh"></span> Dokumen Baru</a>
            <div class="bg-white p-3 mt-2 rounded">
                <div class="d-flex">
                    <h6>Peninjauan</h6>
                </div>
                {{-- {{ $dataTinjau }} --}}
                @foreach ($peninjauan as $item)
                    <div class="d-flex mb-3">
                        <p>{{ $item->judul }} |
                        </p>
                        @if ($item->status_dokumen->status == 'Ditinjau')
                            <button wire:click='toPeninjauan' type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Tinjau
                            </button>
                        @endif
                    </div>
                @endforeach
                <livewire:logic.handle-peninjauan></livewire:logic.handle-peninjauan>
            </div>
        @endcan
        <div class="bg-white p-3 rounded mt-2">
            <div class="d-flex">
                <h6>Pengajuan</h6>
                <button class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#upload-dokumen">Upload</button>
            </div>
            @foreach ($permohonan as $item)
                <p>{{ $item->judul }} | <strong>{{ $item->status_dokumen->status }}</strong> |
                    [<span id="{{ $item->judul . $item->id }}Manager"
                        class="@if (!$item->manager) text-primary @elseif($item->manager) text-success @endif">Manager</span>
                    |
                    <span id="{{ $item->judul . $item->id }}Admin"
                        class="@if ($item->admin) text-success @elseif($item->manager) text-primary @endif">Admin</span>]
                </p>
            @endforeach
        </div>

        <livewire:logic.create-permohonan></livewire:logic.create-permohonan>
    </div>
</div>
