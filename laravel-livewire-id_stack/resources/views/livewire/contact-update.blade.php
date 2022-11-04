<div>
    <form wire:submit.prevent='update' class="mb-3">
        <input type="hidden" wire:model="contactId">
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name"
                    placeholder="Nama">
                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col">
                <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model="phone"
                    placeholder="Nomor">
                @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
    </form>
</div>
