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
    public function definition()
    {
        return [
            'nome'=> $this->faker->firstName(),
            'cpf'=> $this->faker->regexify('[0-9]{11}'),
            'telefone'=> $this->faker->regexify('[0-9]{11}'),
            'placa_carro'=>$this->faker->regexify('[A-Z]{3}[0-9][0-9A-Z][0-9]{2}')
        ];
    }
}
