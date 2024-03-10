<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Modelo clasificación con los campos que se pueden insertar en la BD masivamente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;

    protected $table = 'clasificaciones';

    protected $fillable = [
        'numPosicion',
        'fecha',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Relación: Una clasificación pertenece a un participante
    public function participante()
    {
        return $this->belongsTo(Participante::class, 'clasificacion_id');
    }
}
