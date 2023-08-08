<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController as Autenticacao;
use App\Http\Controllers\VagaController;

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


Route::post('register-user', [Autenticacao::class, 'registerUser']);
Route::post('login', [Autenticacao::class, 'login']);
Route::post('logout', [Autenticacao::class, 'logout'])->middleware('auth:sanctum');

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('buscar-vaga/{id?}', [VagaController::class, 'getVaga']);
    Route::delete('remover-vaga/{id}', [VagaController::class, 'destroy']);
    Route::post('salvar-vaga', [VagaController::class, 'store']);
    Route::put('atualizar-vaga', [VagaController::class, 'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
