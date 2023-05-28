<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class APITest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testIndexEndpointReturns200()
    {
        $response = $this->get('api/products');

        $response->assertStatus(200);
    }

    public function testShowEndpointReturns200()
    {
        $productId = 1; // ID do produto que deseja testar
        $response = $this->get('/products/'.$productId);

        $response->assertStatus(200);
    }

    public function testStockEndpointReturns200()
    {
        $response = $this->get('/stock');

        $response->assertStatus(200);
    }

    public function testHasStockEndpointReturns200()
    {
        $productId = 1; // ID do produto que deseja testar
        $response = $this->get('/stock/'.$productId);

        $response->assertStatus(200);
    }
}
