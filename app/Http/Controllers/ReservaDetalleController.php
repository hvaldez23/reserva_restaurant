<?php

namespace App\Http\Controllers;

use App\Models\ReservaDetalle;
use Illuminate\Http\Request;

class ReservaDetalleController extends Controller
{
    public function index()
    {
        return ReservaDetalle::all();
    }

    public function store(Request $request)
    {
        return ReservaDetalle::create($request->all());
    }

    public function show($id)
    {
        return ReservaDetalle::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $detalle = ReservaDetalle::findOrFail($id);
        $detalle->update($request->all());
        return $detalle;
    }

    public function destroy($id)
    {
        return ReservaDetalle::destroy($id);
    }
}
