<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function index()
  {
    return view('courses.index');
  }

  public function create()
  {
    return view('courses.create');
  }

  public function show($course) // con el signa de interrogacion queremos decir que es opcional
  {
    return view('courses.show', compact('course'));
    // return view('courses.show', ['course' => $course]); // esta es otra manera de enviar datos a la vista
  }
}
