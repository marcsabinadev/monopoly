<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Modelo carta con los campos que se pueden insertar en la BD masivamente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoCarta',
        'definicion',
        'casilla_id',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Relación: Una carta pertenece a una casilla
    public function casilla()
    {
        return $this->belongsTo(Casilla::class);
    }
}
