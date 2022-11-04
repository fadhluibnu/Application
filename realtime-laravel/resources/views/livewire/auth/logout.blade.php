<form wire:submit.prevent="logout">
    @csrf
    <button type="submit">Logout</button>
</form>
