<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// se importa el modelo de articulo
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * pagina inicial
     */
    public function index()
    {
        return view('home');
    }

    /**
     * vista que muestra todos los articulos
     */
    public function get_articles()
    {
        $articles = Articulo::all();

        return view('articulos', ['articles' => $articles]);
    }

    /**
     * vista para crear articulos
     */
    public function create_article() {
        return view('articulos.crear');
    }

    /**
     * ruta que guarda todos los datos del formulario
     */
    public function store_article(Request $formData) {
        Articulo::create($formData->all());

        return redirect()->route('articulos')->with('success', 'Articulo creado correctamente');
    }

    /**
     * formulario para actualizar articulo
     */
    public function edit_article($id) {

        $articulo = Articulo::findOrFail($id);

        return view('articulos.editar', ['id' => $id, 'articulo' => $articulo]);
    }

    /**
     * actualizar articulo
     */
    public function update_article(Request $formData, $id) {
        $article = Articulo::findOrFail($id);
        $article->update($formData->all());

        return redirect()->route('articulos')->with('success', 'Articulo actualizado exitosamente');
    }

    /**
     * eliminar articulo
     */
    public function delete_article($id) {
        $article = Articulo::findOrFail($id);
        $article->delete();

        return redirect()->route('articulos')->with('success', 'Articulo eliminado exitosamente');
    }

    

}
