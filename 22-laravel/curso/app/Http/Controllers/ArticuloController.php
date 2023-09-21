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

    public function create()
    {
        return 'create an article';
    }

    // ruta para cuando se necestia editar un articulo
    public function edit($id)
    {

        $articulo = Articulo::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function delete($id) {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return redirect()->route('articles.index')->with('mensaje', 'Articulo eliminado');
    }
}
