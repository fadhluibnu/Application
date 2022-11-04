<?php

namespace App\Http\Livewire;

use App\Imports\StudentImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;

class Counter extends Component
{
    use WithFileUploads;

    public $file;

    public function render()
    {
        return view('livewire.counter');
    }

    public function stored(Request $request)
    {
        $file = $request->file($this->file);
        (new StudentImport)->import($file);
        return "oke";
    }
}
