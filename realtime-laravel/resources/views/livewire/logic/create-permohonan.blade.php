<div class="modal fade" id="upload-dokumen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form class="modal-dialog" wire:submit.prevent='storeDokumen'>
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" wire:model.defer='pemohon'>
                <input type="text" wire:model.defer='status_id'>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Dokumen</label>
                    <input id="judul" class="form-control" type="text" placeholder="Default input"
                        aria-label="default input example" wire:model.defer='judul'>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </form>
</div>
{{-- <div>
    <form wire:submit.prevent='storeDokumen'>
        <input type="text" wire:model='pemohon'>
        <input type="text" wire:model='status_id'>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Dokumen</label>
            <input id="judul" class="form-control" type="text" placeholder="Default input"
                aria-label="default input example" wire:model='judul'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> --}}
