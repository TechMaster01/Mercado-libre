<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/usuarios', function(){
    return 'Obteniendo lista de usuarios';
});

Route::get('/usuarios{id}', function(){
    return 'Obteniendo un solo usuarios';
});

Route::post('/usuarios', function(){
    return 'Creando usuarios';
});

Route::put('/usuarios/{id}', function(){
    return 'Actualizando usuarios';
});

Route::delete('/usuarios/{id}', function(){
    return 'Borrando usuarios';
});