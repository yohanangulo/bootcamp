<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');


// Route::get('/courses', [CursoController::class, 'index']);
// Route::get('/courses/create', [CursoController::class, 'create']);
// Route::get('/courses/{course}', [CursoController::class, 'show']);


// groupe routes in laravel when they are managed by the same controller
// Route::controller(CursoController::class)->group(function () {
//   Route::get('/courses', 'index')->name('courses.index');
//   Route::get('/courses/create', 'create')->name('courses.create');
//   Route::post('/courses', 'store')->name('courses.store');
//   Route::get('/courses/{course}', 'show')->name('courses.show');
//   Route::get('/courses/{course}/edit', 'edit')->name('courses.edit');
//   Route::put('/courses/{course}', 'update')->name('courses.update');
//   Route::delete('/courses/{course}', 'destroy')->name('courses.destroy');
// });

// Route::resource('asign', CursoController::class)->names('courses');
Route::resource('courses', CursoController::class);

// cuando solamente queremos mostrar una vista que no necesitamos conn to db
Route::view('about', 'about')->name('about');

// Route::get('contact-us', function () {

//   Mail::to('anguloyohan98@gmail.com')
//     ->send(new ContactUsMailable);

//   return 'Sent';

// })->name('contactUs');

