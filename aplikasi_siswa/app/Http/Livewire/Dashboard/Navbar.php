<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Navbar extends Component
{

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if (Cookie::get('imp_success')) {
            Cookie::forget('imp_success');
        }

        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.dashboard.navbar');
    }
}
