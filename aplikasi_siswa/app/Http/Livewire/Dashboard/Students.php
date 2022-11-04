<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cookie;

class Students extends Component
{
    use WithFileUploads;

    public $students;

    public function mount()
    {
        if (Cookie::get('imp_success') == "success") {
            return redirect('/add/validation');
        } else {
            $delete = new StudentValidationLivewire();
            $delete->clearTable();
        }

        $this->students = Student::where('id_user', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.dashboard.students', [
            'title' => "Add Student"
        ]);
    }
}
