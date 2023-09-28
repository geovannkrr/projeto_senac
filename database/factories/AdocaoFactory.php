<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adocao>
 */
class AdocaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_adocao' => fake()->numberBetween(1,10),
            'id_animal' => fake()->numberBetween(1,10),
            'id_cliente' => fake()->numberBetween(1,10),
            'num_pedido' => fake()->numberBetween(1,10),
            'endereco_cliente' => fake()->text(),
            'porte_animal' => fake()->text(),
            'raca_animal' => fake()->text(),
            'cor_animal' => fake()->text(),
            'cep_cliente' => fake()->numberBetween(1,10),
            'tipo_animal' => fake()->text(),
        ];
    }
}
