<div>
    <form wire:submit.prevent='login'>
        <input type="email" wire:model.lazy='email'>
        <input type="password" wire:model.lazy='password'>
        <button>Login</button>
    </form>
</div>
