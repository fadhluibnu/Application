<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public function store()
    {
        $this->validate([
            'title'   => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title'     => $this->title,
            'content'   => $this->content
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('/');
    }

    public function render()
    {
        return view('livewire.create');
    }
}
