<?php

namespace App\Http\Livewire\Page;

use App\Events\EventExample;
use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Home extends Component
{
    protected $listeners = [
        'permohonan' => 'handlePermohonan'
    ];
    protected $title;
    protected $idData;

    public function handlePermohonan()
    {
        $this->dataPermohonan = Dokumen::where('pemohon', auth()->user()->id)->get();
        session()->flash('permohonan', "Permohonan Berhasil Di Upload");
    }
    public function toPeninjauan()
    {
        $this->emit('handlePeninjauan', 'oke');
    }
    public function render()
    {
        $this->title = auth()->user();

        return view('livewire.page.home', [
            'permohonan' => Dokumen::where('pemohon', auth()->user()->id)->get(),
            'peninjauan' => Dokumen::where('manager', null)->get(),
            'dataTinjau' => $this->idData
        ])->layoutData(['title' => $this->title['name']]);
    }
}
