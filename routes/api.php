<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('cliente', App\Http\Controllers\ClienteController::class);
Route::apiresource('carro', App\Http\Controllers\CarroController::class);
Route::apiresource('locacao', App\Http\Controllers\LocacaoController::class);
Route::apiresource('marca', App\Http\Controllers\Controller::class);
Route::apiresource('cliente', App\Http\Controllers\ClienteController::class);
