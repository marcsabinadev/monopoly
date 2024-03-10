<?php

use App\Http\Controllers\CartaController;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\AuthController;
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

Route::get('/clasificacion', [ClasificacionController::class, 'getAll'])->name('clasificacion');

//Controlador Participante
Route::get('/participante', [ParticipanteController::class, 'getAll'])->name('participantes');
Route::post('/crearParticipante', [ParticipanteController::class, 'create'])->name('createParticipante');
Route::put('/actualizarParticipante/{id}', [ParticipanteController::class, 'update'])->name('actualizarParticipante');
Route::delete('/eliminarParticipante/{id}', [ParticipanteController::class, 'destroy'])->name('eliminarParticipante');

//Controlador carta
Route::get('/carta', [CartaController::class, 'getAll'])->name('carta');
Route::get('/cartaSuerte', [CartaController::class, 'indexSuerte'])->name('suerte');
Route::get('/cartaCofre', [CartaController::class, 'indexCofre'])->name('cofre');
Route::post('/crearCarta', [CartaController::class, 'create'])->name('createCarta');
Route::put('/actualizarCarta/{id}', [CartaController::class, 'update'])->name('actualizarCarta');
Route::delete('/eliminarCarta/{id}', [CartaController::class, 'destroy'])->name('eliminarCarta');

//Controlador casilla
Route::get('casillas/{color}', [CasillaController::class, 'casillasPorColor']);
Route::get('/casillaDetalles/{id}', [CasillaController::class, 'showCasilla']);

//Controlador login y registro
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'getUser']);
});
