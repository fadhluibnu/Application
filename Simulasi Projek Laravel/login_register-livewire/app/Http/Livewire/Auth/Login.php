<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Login Failed!!');
            return redirect()->route('auth.login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content')->layoutData(['title' => 'Login']);
    }
}
