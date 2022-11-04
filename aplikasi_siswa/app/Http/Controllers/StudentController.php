<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cookie;

class StudentController extends Controller
{
    public function store()
    {
        $import = new StudentImport();
        $import->import(request()->file('fileImport'));
        return redirect('/add/validation')->cookie('imp_success', 'success', 120, '/');
    }
}
