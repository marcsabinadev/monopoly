<?php
/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Migration cartas con los campos que se pueden insertar en la BD.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->id();
            $table->string('tipoCarta');
            $table->string('definicion');
            $table->foreignId('casilla_id')->constrained('casillas');
            $table->timestamps();
        });
    }


    /**
     *
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas');
    }
};
