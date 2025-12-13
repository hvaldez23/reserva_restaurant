<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'reserva_id',
        'monto',
        'fecha_pago',
        'metodo'
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}

