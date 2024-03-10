<?php

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Controlador Clasificacion con método listary ordenar por posición
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacion;
use App\Models\Participante;

class ClasificacionController extends Controller
{
    //-------------------------------------------------------------
    // Mostrar Participantes
    //-------------------------------------------------------------
    /**
     * Coge de la BD todos los participantes con su clasificación y lo retorna en formato JSON con un código de estado HTTP
     */
    public function getAll()
    {
        // Obtener todos los participantes con su clasificación
        $data = Participante::with('clasificacion')->get();


        // Pasar los datos en formato JSON
        return response()->json($data, 200);
    }
}
