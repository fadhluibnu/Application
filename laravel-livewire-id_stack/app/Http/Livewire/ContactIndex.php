<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $statusUpdate = false;
    public $search;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactUpdate' => 'handleUpdate'
    ];
    protected $updateQueryString = ['search'];
    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }
    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => $this->search == null ?
                Contact::latest()->paginate($this->paginate) :
                Contact::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function destroy($id)
    {
        if ($id) {
            $contact = Contact::find($id);
            $contact->delete();
            session()->flash("message", 'Contact was deleted');
        }
    }

    public function handleStored($contact)
    {
        session()->flash("message", 'Contact' . $contact['name'] . ' was stored');
    }

    public function handleUpdate($contact)
    {
        session()->flash("message", 'Contact ' . $contact['name'] . ' was updated');
    }
}
