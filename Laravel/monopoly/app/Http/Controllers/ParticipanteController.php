<?php

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Controlador Participante con métodos CRUD
 */

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;
use App\Models\Participante;

class ParticipanteController extends Controller
{

    public function get($id){
        $data = Participante::find($id);
        return response()->json($data, 200);
    }

    //-------------------------------------------------------------
    // Mostrar Participantes
    //-------------------------------------------------------------
    /**
     * Coge de la BD todos los participantes y lo retorna en formato JSON con un código de estado HTTP
     */
    public function getAll()
    {
        // Obtener todos los participantes con su clasificación
        $data = Participante::get();

        // Pasar los datos en formato JSON
        return response()->json($data, 200);
    }

    //-------------------------------------------------------------
    // Añadir Participante
    //-------------------------------------------------------------
    /**
     * Manda a la vista de añadir participantes
     */
    public function create(Request $request)
    {
        try {
            // Reglas de validación para crear un participante
            $request->validate([
                'nomUsuario' => 'required|string|min:3|max:20',
            ]);

            // Verificar si el participante ya existe
            $existingParticipant = Participante::where('nomUsuario', $request->input('nomUsuario'))->exists();
            if ($existingParticipant) {
                return response()->json([
                    'message' => "Este participante ya existe",
                    'success' => false
                ], 400);
            }

            // Generar un número aleatorio para la posición
            $numPosicion = rand(1, 10000);

            // Buscar o crear una nueva clasificación
            $clasificacion = Clasificacion::firstOrCreate([
                'numPosicion' => $numPosicion,
                'fecha' => now(),
            ]);

            // Crear el participante con la clasificación asignada
            $participante = Participante::create([
                'nomUsuario' => $request->input('nomUsuario'),
                'clasificacion_id' => $clasificacion->id,
            ]);

            return response()->json([
                'message' => "Participante creado exitosamente",
                'participante' => $participante,
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    //-------------------------------------------------------------
    // Modificar Participante
    //-------------------------------------------------------------
    /**
     * Actualiza un participante en la base de datos
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomUsuario' => 'required|string|min:3|max:20',
        ]);

        $data['nomUsuario'] = $request['nomUsuario'];
        Participante::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
    }

    //-------------------------------------------------------------
    // Eliminar Participante
    //-------------------------------------------------------------
    /**
     * Elimina un participante de la base de datos
     */
    public function destroy($id)
    {
        // Encuentra al participante por su ID
        $participante = Participante::find($id);

        // Verifica si el participante existe
        if (!$participante) {
            return response()->json(['error' => 'Participante no encontrado.'], 404);
        }

        // Elimina el participante
        $participante->delete();

        // Responde con un mensaje de éxito
        return response()->json(['message' => 'Participante eliminado exitosamente.'], 200);
    }
}
