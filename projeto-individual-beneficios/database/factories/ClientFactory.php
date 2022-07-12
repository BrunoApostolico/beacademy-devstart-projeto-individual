<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'date_birth'=>$this->faker->date,
            'cpf'=>$this->faker->numerify('###########'),
            'rg'=>$this->faker->numerify('##########'),
            'phone1'=>$this->faker->phoneNumber(),
            'phone2'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'id_address'=>$this->faker->numerify('##'),
            'address_number'=>$this->faker->numerify('#####'),
            'address_complement'=> 'Lt Qd Casa'

        ];
    }
}