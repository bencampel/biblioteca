<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class Profile extends Component
{

    public $dni = '';
    public $nombre = '';
    public $apellido = '';
    public $telefono = '';
    public $email = '';

    public $user;

    function rules() {
        return [
            'dni' => 'required|unique:users,dni,' . $this->user->id,
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
        ];
    }

    public function mount($id)
    {
        $this->user = User::findOrFail($id);

        if (Gate::denies('isUser', $this->user)) {
            abort(403);
        }

        $this->dni = $this->user->dni;
        $this->nombre = $this->user->nombre;
        $this->apellido = $this->user->apellido;
        $this->telefono = $this->user->telefono;
        $this->email = $this->user->email;
    }

    public function save(){

        $this->validate();

        if (Gate::denies('isUser', $this->user)) {
            abort(403);
        }
        
        $this->user->update([
            'dni' => $this->dni,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'telefono' => $this->telefono,
            'email' => $this->email,
        ]);

        $this->dispatchBrowserEvent('notify', 'Perfil Guardado');

    }

    public function render()
    {
        return view('livewire.profile');
    }
}
