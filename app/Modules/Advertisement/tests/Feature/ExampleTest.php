<?php

namespace App\Modules\Advertisement\tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Modules\Advertisement\tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
