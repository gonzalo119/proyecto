<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users= [
            'selmar',
            'gonzalo',
            'belen',
            'betzabe',
            '<script>alert("Clicker")</script>',
        ];

        $title= 'Listado de Usuarios';

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return "crear nuevo usuario";
    }

    public function edit($id)
    {
        return "editar usuario: {$id}";
    }
   
}
