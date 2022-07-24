<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DependentTest extends TestCase
{

    public function test_create_dependent()
    {
        $response = $this->post('/dependents/create',[
            'name' => 'dependent',
        ]);
        $response->assertStatus(200);
    }
}
