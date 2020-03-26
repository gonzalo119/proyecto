<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test*/
    function load_the_user_module()
    {
       $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios'); 
    }

    /** @test*/
    function load_the_user_details()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('mostrando detalle del usuario: 5');
    } 

    /** @test */
    function loads_the_new_user()
    {
        $this->get('usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('crear nuevo usuario');
    }

    /** @test */
    function edit_the_user()
    {
        $this->get('/usuarios/5/edit')
        ->assertStatus(200)
        ->assertSee('editar usuario: 5');
    }

}
