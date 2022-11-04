<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Overview extends Component
{
    public function mount()
    {
        $cookie = new StudentValidationLivewire();
        $cookie->clearTable();
    }

    public function render()
    {
        return view('livewire.dashboard.overview', [
            'title' => 'Overview'
        ]);
    }
}
