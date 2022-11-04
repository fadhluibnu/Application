<div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- data bainding --}}
    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif



    <hr>

    <div class="row mb-2">
        <div class="col">
            <div class="form-floating">
                <select wire:model="paginate" name="" id="" class="form-select" id="floatingSelect">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
            </div>
        </div>
        <div class="col">
            <form action="">
                <div class="form-floating mb-3">
                    <input wire:model="search" type="text" class="form-control" id="search" placeholder="Search">
                    <label for="search">Search</label>
                </div>
            </form>
        </div>
    </div>
    <div class="contain">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope="col">{{ $loop->iteration }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <button wire:click="getContact({{ $contact->id }})"
                                class="btn btn-sm btn-info text-white">Edit</button>
                            <button wire:click="destroy({{ $contact->id }})"
                                class="btn btn-sm btn-danger text-white">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div wire:loading wire:target="paginate, search">
            <div class="after">
                <div class="spinner-grow text-primary position-absolute top-50 start-50" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    {{ $contacts->links() }}

</div>
