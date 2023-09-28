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
}
