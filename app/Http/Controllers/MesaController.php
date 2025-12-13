<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        return Mesa::all();
    }

    public function store(Request $request)
    {
        return Mesa::create($request->all());
    }

    public function show($id)
    {
        return Mesa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->update($request->all());
        return $mesa;
    }

    public function destroy($id)
    {
        return Mesa::destroy($id);
    }
}

