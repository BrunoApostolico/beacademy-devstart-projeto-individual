<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DependentTest extends TestCase
{
    public function test_create_dependent()
    {
        $response = $this->post('/login',[
            'email' => 'bapostolico@gmail.com',
            'password'=> '12345678'
        ]);

        $response = $this->get('/dependents/1/create');

        $response->assertStatus(200);
    }
    public function teste_store_dependent()
    {
        $response = $this->post('/login',[
            "email" => "bapostolico@gmail.com",
            "password"=> "12345678"
        ]);

        $response = $this->post('/dependent',[
            "client_id"=>"1",
            "name"=> "Dependente Teste",
            'date_birth'=>'2003-06-14',
            'cpf'=>'12312312312',
            'relationship'=>'teste'
        ]);

        $response = $this->get('/dependents');

        $response->assertStatus(200);
    }

}
