<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        if ($user) {
            session()->flash('success', 'Registrasi Berhasil');
            return redirect()->route('login');
        };
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content')->layoutData(['title' => 'Register']);
    }
}
