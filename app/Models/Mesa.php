<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'numero',
        'capacidad',
        'ubicacion',
        'estado'
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}

