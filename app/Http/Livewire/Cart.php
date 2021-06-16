<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Facades\Cart as CartFacade;

use Carbon\Carbon;

use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\PrestamoDetalle;

class Cart extends Component
{
    public $cart;
    
    public function mount(): void
    {
        $this->cart = CartFacade::get();
    }


    public function render()
    {
        return view('livewire.cart');
    }


    public function removeFromCart($libroId): void
    {
        CartFacade::remove($libroId);
        $this->cart = CartFacade::get();

        $this->emit('libroRemoved');
    }


    public function confirmarPrestamo()
    {

        // crear prestamo
        $prestamo = new Prestamo;
        $prestamo->user_id = auth()->id();
        $prestamo->fecha_devolucion = Carbon::now()->addWeek();
        $prestamo->save();

        //crear detalle prestamo
        foreach($this->cart['libros'] as $item){
            // creo y guardo detalle prestamo
            $detalle = new PrestamoDetalle;
            $detalle->prestamo_id = $prestamo->id;
            $detalle->libro_id = $item["id"];
            $detalle->save();
            
            // decremento disponibilidad
            $libro = Libro::find($detalle->libro_id);
            $libro->unidades = $libro->unidades - 1;
            $libro->save();
        }

        // limpio carrito
        CartFacade::clear();
        $this->cart = CartFacade::get();

        $this->emit('clearCart');

        // redirijo pagina prestamos con mensaje exito
        session()->flash('success', 'Prestamo Confirmado!');
        return redirect()->route('prestamos.index', ['user_id' => auth()->id()]);
    }
}
