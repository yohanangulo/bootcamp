<?php

use Illuminate\Support\Facades\Route;

// importamos el controlador del articulo el cual contione toda la logica.
// conectarse con el modela para buscar los datos
// tambien se encarga de mandar la vista
use App\Http\Controllers\ArticuloController;

Route::get('/', function () {
  return view('home');
});
