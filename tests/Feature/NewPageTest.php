<?php

namespace Tests\Feature;

use Tests\TestCase;

class NewPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_it_returns_new_page_message() : void
    {
        $response = $this->get('/new_page');

        $response->assertStatus(200);
        $response->assertSeeText('New page!');
    }
}
