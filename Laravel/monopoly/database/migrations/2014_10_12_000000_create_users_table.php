<?php

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Migración de la tabla user que indica los campos de la tabla
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('rol', ['admin', 'member'])->default('member');
            $table->string('password');
            $table->integer('age');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
