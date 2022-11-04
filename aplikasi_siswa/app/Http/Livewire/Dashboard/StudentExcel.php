<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class StudentExcel extends Component
{
    public function render()
    {
        return view('livewire.dashboard.student-excel', [
            'title' => 'File - Tambah Data'
        ]);
    }
}
