<div>
    <h1>Livewire</h1>

    <form wire:submit.prevent="stored" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" wire:model="file" name="" id="">
        <button type="submit">Kirim</button>
    </form>

    {{-- {{ $file }} --}}
</div>
