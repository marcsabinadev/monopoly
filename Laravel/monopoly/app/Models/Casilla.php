<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Modelo casilla con los campos que se pueden insertar en la BD masivamente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casilla extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipoCasilla',
        'color',
        'precio',
        'uso',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Relación: Una casilla puede tener una carta asociada
    public function cartas()
    {
        return $this->hasMany(Carta::class);
    }
}
