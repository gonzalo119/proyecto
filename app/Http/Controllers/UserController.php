<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'usuarios';
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
