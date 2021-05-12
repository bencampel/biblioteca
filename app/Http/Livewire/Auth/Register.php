<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Models\Rol;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $dni = '';
    public $nombre = '';
    public $apellido = '';
    public $telefono = '';
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    protected $rules = [
        'dni' => 'required|unique:users',
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|same:passwordConfirmation',
    ];

    public function updatedEmail()
    {
        $this->validate(['email' => 'unique:users']);
    }

    public function register()
    {
        $this->validate();

        $rol = Rol::find(3);

        $user = $rol->users()->create([
            'dni' => $this->dni,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // auth()->login($user);

        // return redirect('/');
        
        session()->flash('success', 'Cuenta creada con exito - inicie sesion para continuar!');

        return redirect('login');
    }

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('layouts.auth');
    }
}
