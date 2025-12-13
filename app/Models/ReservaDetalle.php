<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaDetalle extends Model
{
    protected $fillable = [
        'reserva_id',
        'descripcion',
        'cantidad',
        'precio'
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}

