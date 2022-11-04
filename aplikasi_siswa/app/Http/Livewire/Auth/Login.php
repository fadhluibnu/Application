<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            request()->session()->regenerate();

            return redirect()->route('dashboard.overview');
        }

        return back()->with('log_err', 'Login failed!');
    }

    public function render()
    {
        return view('livewire.auth.login', [
            'title' => "Login"
        ])->extends('layouts.auth')->section('body');
    }
}
