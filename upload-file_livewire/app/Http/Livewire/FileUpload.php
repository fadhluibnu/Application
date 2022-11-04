<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;
    public $file, $title;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'file' => 'required',
        ]);

        $validatedData['name'] = $this->file->store('files', 'public');

        File::create($validatedData);

        session()->flash('message', 'File successfully Uploaded.');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
