<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
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
            'address'=>$this->faker->streetAddress(),
            'address_number'=>$this->faker->numerify('#####'),
            'address_complement'=> 'Lt Qd Casa'
        ];
    }
}
