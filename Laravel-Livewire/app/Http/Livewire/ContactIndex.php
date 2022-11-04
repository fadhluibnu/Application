<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $paginate = 5;
    public $statusUpdate = false;

    protected $listeners = [
        'contactStored' => 'handlerStored',
        'contactUpdate' => 'handlerUpdate'
    ];

    protected $queryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => $this->search === null ?
                Contact::latest()->paginate($this->paginate) :
                Contact::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::find($id);
            $data->delete();
            session()->flash('message', 'Contact was deleted');
        }
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function handlerStored($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was stored');
    }
    public function handlerUpdate($contact)
    {
        session()->flash('message', 'Contact ' . $contact['name'] . ' was updated');
    }
}
