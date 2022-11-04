<div>
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        id="nama" placeholder="Nama">
                    <label for="nama">Nama</label>

                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                        id="phone" placeholder="phone">
                    <label for="phone">Phone</label>

                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
