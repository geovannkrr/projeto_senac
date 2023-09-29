<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\historico_cliente>
 */
class HistoricoClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_historico_cliente' => fake()->numberBetween(1,10),
            'id_cliente' => fake()->numberBetween(1,10),
            'data_adocao' => fake()->dateTimeBetween(now(),'+30 week'),
            'qtde_animais' => fake()->numberBetween(1,10),
            'tipo_animal' => fake()->text(),
            'raca_animal' => fake()->text(),
            ];
    }
}
