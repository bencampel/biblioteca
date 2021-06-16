<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use App\Models\Prestamo;
use App\Models\User;
use App\Models\Libro;
use Carbon\Carbon;

class ShowPrestamos extends Component
{

    use WithPagination;

    public $user;

    public function mount($user_id)
    {
        $this->user = User::findOrFail($user_id);

        if (Gate::denies('isUser', $this->user)) {
            abort(403);
        }

    }

    public function render()
    {
        $prestamos = Prestamo::where('user_id', $this->user->id)
            ->orderByDesc('created_at')->paginate(8);

        return view('livewire.show-prestamos', ['prestamos' => $prestamos]);
    }

    public function cancelarPrestamo(int $idPrestamo)
    {
        $prestamo = Prestamo::findOrFail($idPrestamo);

        if (!$prestamo->puedeCancelar()){
            $this->dispatchBrowserEvent('notify', 'No se puede cancelar el prestamo!');
            return;
        }

        $prestamo->devuelto = Carbon::now();

        $prestamo->save();

        foreach($prestamo->detalles as $detalle){
             // incremento disponibilidad
             $libro = Libro::find($detalle->libro_id);
             $libro->unidades = $libro->unidades + 1;
             $libro->save();
        }

        $this->dispatchBrowserEvent('notify', 'prestamo cancelado!');

    }
}
