<?php

namespace Tests\Feature;

use Tests\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_returns_welcome_message() : void
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
        $response->assertSeeText('Welcome to Laravel Test Project!');
    }
}
