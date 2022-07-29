<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    public function test_create_payment()
    {
        $this->post(route('payments.store'), [
            'id' => '1',
        ]);

        $this->assertDatabaseHas('payments', ['id' => '1']);

    }
}
