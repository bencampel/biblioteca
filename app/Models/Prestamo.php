<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $casts = [
        'fecha_devolucion' => 'datetime:Y-m-d',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detalles()
    {
        return $this->hasMany(PrestamoDetalle::class);
    }

    public function estadoPrestamo(){
        if (isset($this->devuelto) and !isset($this->entregado)){

            return 'cancelado';

        }
        
        if(isset($this->devuelto)){

            return 'finalizado';
        }
        
        if(isset($this->entregado)){

            return 'entregado';

        }
        
        return 'pendiente';
    }

    public function puedeCancelar(){
        $estado = $this->estadoPrestamo();
        return $estado == 'pendiente';
    }
}
