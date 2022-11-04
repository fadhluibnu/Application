<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PasswingParamater extends Component
{
    public $passing;
    public function passing($param)
    {
        $this->passing = $param;
    }
    public function render()
    {
        return view('livewire.admin.passwing-paramater');
    }
}
