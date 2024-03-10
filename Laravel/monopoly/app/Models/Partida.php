<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Modelo partida.
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha',
        'numMaxParticipantes',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Relación: Una partida puede tener varios participantes
    public function participantes()
    {
        return $this->belongsToMany(Participante::class);
    }
}
