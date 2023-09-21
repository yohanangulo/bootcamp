<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// se importa el modelo de articulo
use App\Models\Articulo;

class ArticuloController extends Controller {
    public function get_articles() {
        $articulos = Articulo::all();
        echo $articulos;
    }
}
