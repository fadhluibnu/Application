<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    // contoh pemanggilan passing data
    // public $contacts;
    // public function mount($contacts)
    // {
    //     $this->contacts = $contacts;
    // }

    public $name;
    public $phone;
    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);
        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        $this->resetform();

        $this->emit('contactStored', $contact);
    }

    // riset input 
    private function resetform()
    {
        $this->name = null;
        $this->phone = null;
    }
}
