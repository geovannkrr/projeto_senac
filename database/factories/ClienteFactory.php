<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_cliente' => fake()->numberBetween(1,10),
            'nome' => fake()->numberBetween(1,10),
            'idade' => fake()->numberBetween(1,10),
            'cpf' => fake()->numberBetween(1,10),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->numberBetween(1,10),
            'cep' => fake()->numberBetween(1,10),
        ];
    }
}
