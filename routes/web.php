<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function() {
    return "usuarios";
});

Route::get('/usuarios/{id}', function($id) {
    return "mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('usuarios/nuevo', function() {
    return "crear nuevo usuario";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname= null) {
    $name= ucfirst($name);

    if($nickname){
        return "hola {$name}, tu apodo es {$nickname}";
    }
    else{
        return "hola {$name}";
    }
    
});