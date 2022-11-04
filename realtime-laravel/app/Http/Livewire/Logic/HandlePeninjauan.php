<?php

namespace App\Http\Livewire\Logic;

use App\Models\Dokumen;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;

class HandlePeninjauan extends Component
{
    public $dokumen;
    protected $listeners = [
        'handlePeninjauan'
    ];
    public function handlePeninjauan()
    {
        $this->dokumen = "oke";
    }
    public function render()
    {
        return view('livewire.logic.handle-peninjauan', [
            'data' => $this->dokumen
        ]);
    }
}
