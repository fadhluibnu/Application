<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required'
    ];

    public function store()
    {
        // $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ]);
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        if ($user) {
            session()->flash('regist_suc', 'Register Berhasil!.');
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.auth.register', [
            'title' => "Register"
        ])->extends('layouts.auth')->section('body');
    }
}
