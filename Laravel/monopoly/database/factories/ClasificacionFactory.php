<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clasificacion>
 */
class ClasificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numPosicion' => $this->faker->randomNumber(5),
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
