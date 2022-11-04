<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TambahData extends Component
{

    public function render()
    {
        return view('livewire.tambah-data', [
            'title' => 'Tambah'
        ]);
    }
}
