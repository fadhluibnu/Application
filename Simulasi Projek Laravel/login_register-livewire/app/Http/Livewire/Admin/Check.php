<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Check extends Component
{
    public $input;
    public $return;
    public function cek()
    {
        // $this->return = "false";
        $array = ['dodi', 'reza', 'lauza'];
        foreach ($array as $a) {
            if ($this->input == $a) {
                $this->return = "Nama tidak tersedia";
                break;
            } else {
                $this->return = "Nama tersedia";
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.check');
    }
}
