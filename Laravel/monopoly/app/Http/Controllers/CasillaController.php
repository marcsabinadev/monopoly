<?php

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Controlador Casilla con métodos listar y mostrar detalles
 */

namespace App\Http\Controllers;

use App\Models\Casilla;
use Illuminate\Http\Request;

class CasillaController extends Controller
{
    /**
     * Muestra todas las casillas de un color específico.
     */
    public function casillasPorColor($color)
    {
        $casillas = Casilla::where('color', $color)->get();
        return response()->json($casillas, 200);
    }
    /**
     * Muestra los detalles de una casilla en concreto
     */
    public function showCasilla($id){
        $data = Casilla::find($id);
        //$casillas = Casilla::all();
        return response()->json($data, 200);
    }
}

