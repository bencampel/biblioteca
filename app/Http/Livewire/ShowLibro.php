<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Libro;

use App\Facades\Cart;

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

    public function addToCart(int $libroId): void
    {
        //controla que el usuario no tenga prestamos pendientes
        $user = auth()->user();

        if($user->tienePrestamosPendientes()){
            $this->dispatchBrowserEvent('notify', 'Tienes prestamos pendientes!');
            return;
        }

        //controla si el carrito tiene 3 o menos items
        if (Cart::getTotal() >= 3){
            $this->dispatchBrowserEvent('notify', 'No podes Reservar mas de 3 libros!');
            return;
        }

        $agregado = Cart::add(Libro::find($libroId));
        
        $this->emit('libroAdded');

        $msg = $agregado ? "libro agregado!" : "ya agregaste el libro!";
        $this->dispatchBrowserEvent('notify', $msg);
    }
}
