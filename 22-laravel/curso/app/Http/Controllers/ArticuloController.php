<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// se importa el modelo de articulo
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * @return homeView
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return articlesView
     */
    public function get_articles()
    {
        $articles = Articulo::all();

        return view('articulos', ['articles' => $articles]);
    }

    /**
     * @return createArticleView
     */
    public function create_article() {
        return view('articulos.crear');
    }

    public function store_article(Request $formData) {
        Articulo::create($formData->all());

        return redirect()->route('articulos')->with('success', 'Articulo creado correctamente');
    }

    public function edit_article($id) {

        $articulo = Articulo::findOrFail($id);

        return view('articulos.editar', ['id' => $id, 'articulo' => $articulo]);
    }

    public function update_article(Request $formData, $id) {
        $article = Articulo::findOrFail($id);
        $article->update($formData->all());

        return redirect()->route('articulos')->with('success', 'Articulo actualizado correctamente');
    }

}
