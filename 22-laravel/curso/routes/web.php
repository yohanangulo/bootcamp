<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// donde se muestran todos los posts
Route::get('/blog', function () {
    return '<h1>Bienvenido a mi blog</h1>';
});

// ruta que lleva a ala criacion de un post
Route::get('/blog/create-post', function () {
    return view('createPost');
});

// ruta que lleva a la edicion de un post
Route::get('/blog/post/edit-post/{slug}', function ($slug) {
    return view('editPost', ['slug' => $slug]);
});

// pagina de un solo post
Route::get('/blog/post/{slug}', function ($slug) {
    return "<h1>Estás viendo el post $slug</h1>";
});

// Route::get('/blog/post/{slug}/{author}/{id?}', function ($slug, $author, $id = null) {
//     if ($id) {
//         return "<h1>Estas viendo un post que tiene id, es id es: $id</h1>";
//     }
//     $nombre_del_post = str_replace('-', ' ', $slug);
//     return "<h1>Un post sin id, con el autor $author y nombre $nombre_del_post</h1>";
// });


$controller = function ($slug, $author, $id = null) {
    if ($id) {
        return "<h1>Estas viendo un post que tiene id, es id es: $id</h1>";
    }

    $nombre_del_post = str_replace('-', ' ', $slug);
    return "<h1>Un post sin id, con el autor $author y nombre $nombre_del_post</h1>";
};

Route::get('/blog/post/{slug}/{author}/{id?}', $controller);

/**
 * Rutas de autenticación
 */

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

$middleware = [
    // sistema de autenticacion de laravel llamado sanctum
    // verifica si el usuario que realiza la solicitud esta autenticado
    // si no esta autenticado, lo redirige a la pagina de login
    'auth:sanctum',

    // Este middleware, basado en la conficuaicon de autebticacion de jetstream de laravel
    // realiza una verificacion adicional de la sesion de autenticacion del usuario
    // La configuarcion pued definir un middleware personalizado para autenticar al usuario
    config('jetstream.auth_session'),

    // verifica si el usuario ha verificado su correo electronico
    'verified'
];

Route::middleware($middleware)->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/**
 * para crear un modelo se usa
 * 
 * php artisan make:model NombreDelModelo -mcf
 */