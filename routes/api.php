<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\clientesController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::get('/clientes', [clientesController::class, 'index']);

Route::get('/clientes{id}', function(){
    return 'Obteniendo un solo clientes';
});

Route::post('/clientes', [clientesController::class, 'store']);

Route::put('/clientes/{id}', function(){
    return 'Actualizando clientes';
});

Route::delete('/clientes/{id}', function(){
    return 'Borrando clientes';
});