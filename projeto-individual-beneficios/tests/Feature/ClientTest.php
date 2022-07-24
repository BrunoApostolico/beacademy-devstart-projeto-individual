<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_create_client()
    {
        $response = $this->post('/clients/create',[
            'name' => 'client',
            'email' => 'client@client.com'
        ]);
        $response->assertStatus(200);
    }
}
