<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;


class DependentFactory extends Factory
{
    public function definition()
    {
        return [
            'client_id' => Client::all()->random()->id,
            'name'=>$this->faker->name(),
            'date_birth'=>$this->faker->date,
            'cpf'=>$this->faker->numerify('###########'),
            'relationship'=>$this->faker->randomElement(['Filho(a)','Esposa','Marido','Mãe','Pai']),
        ];
    }
}
