<?php
/*
@author: Alejandra Rivas, Angel Rivera, Marc Sabina, Julia Prieto
Archivo con todas las rutas de la página web
*/

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartaController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\ClasificacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// // Controlador UserController --> vistas
// Route::get('/', [UserController::class, 'index'])->name('home'); // página inicial
// Route::get('/comoJugar', [UserController::class, 'comoJugar'])->name('comoJugar'); // como jugar
// Route::get('/integrantesGrupo', [UserController::class, 'integrantesGrupo'])->name('integrantesGrupo'); // integrantes grupos
// Route::get('/error404', [UserController::class, 'error404'])->name('error404'); // página de url incorrecta

// // Controlador Cartas Especiales (CartaController)
// Route::get('/cartaEspecial', [CartaController::class, 'index'])->name('cartaEspecial'); // Muestra imágen de los 2 tipos de carta
// Route::get('/cartaEspecial/cofre', [CartaController::class, 'indexCofre'])->name('cofre'); // Muestra todas las cartas de tipo cofre
// Route::get('/cartaEspecial/suerte', [CartaController::class, 'indexSuerte'])->name('suerte'); // Muestra todas las cartas de tipo suerte
// Route::get('/cartaEspecial/crear', [CartaController::class, 'create'])->name('añadirCarta'); // Formulario para crear una nueva carta especial
// Route::post('/cartaEspecial/crear', [CartaController::class, 'store'])->name('storeCarta'); // Añadir carta especial a la BD
// Route::get('/cartaEspecial/modificar/{id}', [CartaController::class, 'edit'])->name('modificarCarta'); // Formulario para modificar una carta especial
// Route::put('/cartaEspecial/modificar/{id}', [CartaController::class, 'update'])->name('updateCarta'); // Actualiza carta especial de la BD
// Route::delete('/cartaEspecial/eliminar/{id}', [CartaController::class, 'destroy'])->name('deleteCarta'); // Eliminar una carta especial

// // Controlador Casillas (CasillaController)
// Route::get('/casilla', [CasillaController::class, 'index'])->name('casilla'); // Muestra colores de las casillas
// Route::get('/casilla/total/{color}', [CasillaController::class, 'indexTotal'])->name('casillaTotal'); // Lista todas las casillas
// Route::get('/casilla/descripcion/{id}', [CasillaController::class, 'showCasilla'])->name('casillaDescripcion'); // Muestra todos los datos de una casilla en concreto

// // Controlador Clasificación (ClasificacionController)
// Route::get('/clasificacion', [ClasificacionController::class, 'index'])->name('clasificacion'); // Mostrar tabla de la clasificaión

// // Controlador Participante (ParticipanteController)
// Route::get('/participante', [ParticipanteController::class, 'index'])->name('participante'); // Mostrar los participates en una tabla que contenga tambien botones de borrar, modificar y añadir participantes.
// Route::get('/participante/crear', [ParticipanteController::class, 'create'])->name('añadirParticipante'); // Formulario para añadir participante
// Route::post('/participante/crear', [ParticipanteController::class, 'store'])->name('storeParticipante'); // Añadir participante a la BD
// Route::get('/participante/modificar/{id}', [ParticipanteController::class, 'edit'])->name('modificarParticipante'); // Formulario para modificar un participante
// Route::put('/participante/modificar/{id}', [ParticipanteController::class, 'update'])->name('updateParticipante'); // Actualiza participante en la BD
// Route::delete('/participante/eliminar/{id}', [ParticipanteController::class, 'destroy'])->name('deleteParticipante'); // Eliminar un paticipante

// Route::get('/register', [UserController::class, 'register'])->name('register'); // formulario registro
// Route::get('/login', [UserController::class, 'login'])->name('login'); // formulario login

// Route::get('/home', function () {
//     return view('dashboard');
// })->middleware('auth');
