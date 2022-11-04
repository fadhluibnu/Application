<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Login Failed!!');
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
        // ->extends('main')->section('content');
    }
}
