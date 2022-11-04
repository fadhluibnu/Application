<div>

    {{-- contoh passing data --}}
    {{-- <livewire:contact-create :contacts="$contacts"></livewire:contact-create> --}}

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif

    <hr>

    <div class="row justify-content-between mb-3">
        <div class="col-3">
            <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col-5">
            <input type="text" wire:model="search" class="form-control form-control-sm" placeholder="Search">
        </div>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Phone</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <button wire:click="getContact({{ $item->id }})"
                            class="btn btn-sm btn-primary text-white">Edit</button>
                        <button wire:click="destroy({{ $item->id }})"
                            class="btn btn-sm btn-danger text-white">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
