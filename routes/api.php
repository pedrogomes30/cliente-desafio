<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::post('cliente',                          [ClienteController::class,'store']);
Route::put('cliente/{id}',                      [ClienteController::class,'update']);
Route::get('cliente/{id}',                      [ClienteController::class,'show']);
Route::get('cliente',                           [ClienteController::class,'index']);
Route::delete('cliente/{id}',                   [ClienteController::class,'delete']);
Route::get("consulta/final-placa/{numero}",     [ClienteController::class,'consultaFinalPlaca']);
