<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_create_client()
    {
        $response = $this->post('/login/create',[
            'name' => 'Admin',
            'email' => 'admin@master.com',
            'password' => '1q2w3e4r',
            'is_admin' => 1,
        ]);
        $response->assertStatus(200);
    }
}
