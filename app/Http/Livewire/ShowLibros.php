<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Libro;

class ShowLibros extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $libros = Libro::where('titulo', 'like', '%'.$this->search.'%')->paginate(8);

        return view('livewire.show-libros', ['libros' => $libros])->layout('layouts.app');
    }
}
