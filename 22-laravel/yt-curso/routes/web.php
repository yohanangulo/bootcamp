<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);


// Route::get('/courses', [CursoController::class, 'index']);
// Route::get('/courses/create', [CursoController::class, 'create']);
// Route::get('/courses/{course}', [CursoController::class, 'show']);


// groupe routes in laravel when they are managed by the same controller
Route::controller(CursoController::class)->group(function () {
  Route::get('/courses', 'index')->name('courses.index');
  Route::get('/courses/create', 'create')->name('courses.create');
  Route::post('/courses', 'store')->name('courses.store');
  Route::get('/courses/{id}', 'show')->name('courses.show');
});
