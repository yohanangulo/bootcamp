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
        $articles = Articulo::all();

        return view('home', ['articles' => $articles]);
    }
}
