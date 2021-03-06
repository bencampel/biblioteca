<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $table = 'libros';

    protected $casts = [
        'publicado' => 'datetime:Y-m-d',
    ];

    public function getPortada(){
        return '/img/libros/' . $this->portada;
    }

    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'autor_libro');
    }
}
