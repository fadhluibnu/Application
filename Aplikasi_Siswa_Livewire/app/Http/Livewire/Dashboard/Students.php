<?php

namespace App\Http\Livewire\Dashboard;

use App\Imports\StudentImport;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Students extends Component
{
    public function render()
    {
        return view('livewire.dashboard.students', [
            'title' => "Add Student"
        ]);
    }

    public function store()
    {
        Excel::import(new StudentImport, request()->file('file'));
        return redirect('/add');
    }
}
