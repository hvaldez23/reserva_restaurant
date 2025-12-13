<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::with(['cliente', 'mesa', 'detalles', 'pagos'])->get();
    }

    public function store(Request $request)
    {
        return Reserva::create($request->all());
    }

    public function show($id)
    {
        return Reserva::with(['cliente', 'mesa', 'detalles', 'pagos'])
                      ->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());
        return $reserva;
    }

    public function destroy($id)
    {
        return Reserva::destroy($id);
    }
}
