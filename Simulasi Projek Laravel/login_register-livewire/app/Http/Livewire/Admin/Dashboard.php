<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $input;
    public $func;

    public function inputkey()
    {
        $this->func = "OK";
    }

    public function render()
    {
        return view('livewire.admin.dashboard')->extends('layouts.app')->section('content')->layoutData(['title' => 'Dashboard']);
    }
}
