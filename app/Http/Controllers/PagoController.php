<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        return Pago::all();
    }

    public function store(Request $request)
    {
        return Pago::create($request->all());
    }

    public function show($id)
    {
        return Pago::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pago = Pago::findOrFail($id);
        $pago->update($request->all());
        return $pago;
    }

    public function destroy($id)
    {
        return Pago::destroy($id);
    }
}
