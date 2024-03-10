<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Modelo participante con los campos que se pueden insertar en la BD masivamente
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomUsuario',
        'clasificacion_id',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Relación: Un participante puede participar en muchas partidas
    public function partidas()
    {
        return $this->belongsToMany(Partida::class);
    }

    // Relación: Un participante tiene una clasificación
    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class);
    }
}
