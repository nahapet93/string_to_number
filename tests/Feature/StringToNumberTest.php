<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StringToNumberTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_string_to_number()
    {
        $response = $this->postJson('/api/string-to-number', ['input_string' => 'example']);

        $response->assertStatus(200)
            ->assertJsonStructure(['number']);
    }
}
