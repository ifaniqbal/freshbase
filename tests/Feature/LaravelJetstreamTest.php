<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LaravelJetstreamTest extends TestCase
{
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
