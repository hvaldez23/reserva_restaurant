<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'cliente_id',
        'mesa_id',
        'fecha',
        'hora',
        'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function detalles()
    {
        return $this->hasMany(ReservaDetalle::class);
    }
}
