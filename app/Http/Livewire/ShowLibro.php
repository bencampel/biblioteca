<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Libro;

class ShowLibro extends Component
{

    public $libro;

    public function mount($id)
    {
        $this->libro = Libro::with('autores')->find($id);
    }

    public function render()
    {
        return view('livewire.show-libro', [
            'libro' => $this->libro,
        ])
        ->layout('layouts.app');
    }
}
