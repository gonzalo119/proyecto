<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class welcome extends TestCase
{
    /** @test */

    function load_welcome_user_with_nickname()
    {
        $this->get(saludo/selmar/sell)
        ->assertStatus(200)
        ->assertSee('hola Selmar, tu apodo es Sell');
    }

    /** @test */

    function load_welcome_user_without_nickname()
    {
        $this->get(saludo/selmar)
        ->assertStatus(200)
        ->assertSee('hola Selmar');
    }
}
