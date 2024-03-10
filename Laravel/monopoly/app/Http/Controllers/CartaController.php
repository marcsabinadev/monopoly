<?php

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Controlador carta con métodos CRUD
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carta;
use App\Models\Casilla;

class CartaController extends Controller
{

    //-------------------------------------------------------------
    // Mostrar Cartas
    //-------------------------------------------------------------

    public function getAll()
    {
        // Obtener todos las cartas
        $data = Carta::get();

        // Pasar los datos en formato JSON
        return response()->json($data, 200);
    }



    /**
     * Coge de la BD todas las cartas de tipo caja de comunidad y lo retorna en formato JSON con un código de estado HTTP
     */
    public function indexCofre()
    {
        $data = Carta::where('tipoCarta', 'Caja de Comunidad')->get();
        return response()->json($data, 200);
    }

    /**
     * Coge de la BD todas las cartas de tipo suerte y lo retorna en formato JSON con un código de estado HTTP
     */
    public function indexSuerte()
    {
        $data = Carta::where('tipoCarta', 'Suerte')->get();
        return response()->json($data, 200);
    }

    /**
     * Crea una nueva carta con los datos proporcionados en el cuerpo de la solicitud.
     */
    public function create(Request $request)
    {

        try {
            // Reglas de validación para crear un participante
            $request->validate([
                'tipoCarta' => 'required|in:Suerte,Caja de Comunidad',
                'definicion' => 'required|min:10|string',
                'casilla_id' => 'required|exists:casillas,id',
            ]);

            // Crear la carta con la casilla_id asignada
            $carta = Carta::create([
                'tipoCarta' => $request->input('tipoCarta'),
                'definicion' => $request->input('definicion'),
                'casilla_id' => $request->input('casilla_id'),
            ]);

            return response()->json([
                'message' => "carta creada exitosamente",
                'carta' => $carta,
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    /**
     * Actualiza la información de una carta existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tipoCarta' => 'required|in:Suerte,Caja de Comunidad',
            'definicion' => 'required|string|min:10',
        ]);



        $carta = Carta::find($id);
    if ($carta) {
        $carta->update([
            'tipoCarta' => $request->input('tipoCarta'),
            'definicion' => $request->input('definicion'),
        ]);

        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    } else {
        // Maneja el caso en que la carta no se encuentra
        return response()->json([
            'message' => "Carta not found",
            'success' => false
        ], 404);
    }

    }

    /**
     * Elimina una carta en la BD
     */
    public function destroy($id)
    {
        // Encuentra al carta por su ID
        $carta = Carta::find($id);

        // Verifica si el carta existe
        if (!$carta) {
            return response()->json(['error' => 'Carta no encontrada.'], 404);
        }

        // Elimina el carta
        $carta->delete();

        // Responde con un mensaje de éxito
        return response()->json(['message' => 'Carta eliminada exitosamente.'], 200);
    }
}
