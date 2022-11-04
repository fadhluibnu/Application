<?php

namespace App\Http\Livewire\Logic;

use App\Models\Dokumen;
use Livewire\Component;
use App\Events\EventExample;
use App\Events\EventPermohonan;
use Illuminate\Support\Facades\Gate;

class CreatePermohonan extends Component
{
    public $pemohon;
    public $judul;
    public $status_id;
    public $engginer = null;
    public $manager = null;
    public $admin = null;

    private $id_user;

    public function storeDokumen()
    {
        $this->id_user = auth()->user();
        $this->pemohon = $this->id_user['id'];
        $this->status_id = 1;
        if (Gate::allows('engginer')) {
            $this->engginer = auth()->user()->id;
        }
        if (Gate::allows('manager')) {
            $this->manager = auth()->user()->id;
        }
        if (Gate::allows('admin')) {
            $this->admin = auth()->user()->id;
        }
        $this->validate([
            'judul' => 'required',
            'pemohon'  => 'required',
            'status_id' => 'required',
        ]);

        Dokumen::create([
            'judul' => $this->judul,
            'status_id' => $this->status_id,
            'pemohon' => $this->pemohon,
            'engginer' => $this->engginer,
            'manager' => $this->manager,
            'admin' => $this->admin
        ]);

        $for = null;
        $type = 'Peninjauan';
        if ($this->id_user['role'] == 1 || $this->id_user['role'] == 3) {
            $for = 'manager';
        }
        if ($this->id_user['role'] == 2) {
            $for = 'admin';
        }
        event(new EventPermohonan($for, $type));
        $this->emit('permohonan');
    }
    public function render()
    {
        return view('livewire.logic.create-permohonan');
    }
}
