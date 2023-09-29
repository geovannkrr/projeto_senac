<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_animal' => fake()->numberBetween(1,10),
            'nome' => fake()->numberBetween(1,10),
            'tipo' => fake()->numberBetween(1,10),
            'idade' => fake()->numberBetween(1,10),
            'sexo' => fake()->numberBetween(1,2),
            'cor' => fake()->numberBetween(1,10),
            'vacinação' => fake()->numberBetween(1,10),
            'castracao' => fake()->numberBetween(1,10),
            'descricao' => fake()->text(),
            'situacao'  => fake()->numberBetween(1,6),
            'vacina'  => fake()->numberBetween(1,10),

            ];
    }
}
