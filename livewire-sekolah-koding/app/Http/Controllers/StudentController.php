<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store()
    {
        return request()->file('file');
    }
}
