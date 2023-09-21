<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// se importa el modelo de articulo
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function get_articles()
    {
        // sea hace la consulta a la base de datos
        $articulos = Articulo::all();
        return view('articles', [
            'articles' => $articulos
        ]);
    }

    public function create() {
        return 'create an article';
    }

    // ruta para cuando se necestia editar un articulo
}
