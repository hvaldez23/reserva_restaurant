<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\MesaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReservaDetalleController;

Route::get('/', function () {
    return 'API Reserva de Mesas funcionando';
});

Route::resource('mesas', MesaController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('pagos', PagoController::class);
Route::resource('reserva-detalles', ReservaDetalleController::class);
