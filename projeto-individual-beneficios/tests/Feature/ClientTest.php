<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_create_client()
    {

        $response = $this->post('/login',[
            'email' => 'bapostolico@gmail.com',
            'password'=> '12345678'
        ]);

        $response = $this->get('/clients/create');

        $response->assertStatus(200);
    }
    public function teste_store_client()
    {
        $response = $this->post('/login',[
            "email" => "bapostolico@gmail.com",
            "password"=> "12345678"
        ]);

        $response = $this->post('/client',[
            "name"=> "Client Teste Unit",
            "email"=> "teste@testeunit.com",
            'phone1'=>'993703274',
            'cpf'=>'12312312312'
        ]);

        $response = $this->get('/clients');

        $response->assertStatus(200);
    }

}
