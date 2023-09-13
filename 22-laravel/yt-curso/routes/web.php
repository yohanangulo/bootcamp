<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);


// Route::get('/courses', [CursoController::class, 'index']);
// Route::get('/courses/create', [CursoController::class, 'create']);
// Route::get('/courses/{course}', [CursoController::class, 'show']);


// groupe routes in laravel
Route::controller(CursoController::class)->group(function () {
  Route::get('/courses', 'index');
  Route::get('/courses/create', 'create');
  Route::get('/courses/{course}', 'show');
});
