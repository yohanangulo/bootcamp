<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
  /**
   * shows all courses available
   */
  public function index()
  {
    $courses = Course::orderBy('id', 'desc')->paginate();

    return view('courses.index', compact('courses'));
  }

  /**
   * shows a form to create a course
   */
  public function create()
  {
    return view('courses.create');
  }

  /**
   *  stores a new course
   */
  public function store(Request $request)
  {
    $course_data = new Course();

    $course_data->name = $request->name;
    $course_data->description =$request->description;
    $course_data->category =$request->category;

    $course_data->save();

    return redirect()->route('courses.show', $course_data->id);

  }

  /**
   * shows a single course
   */
  public function show($id) // con el signa de interrogacion queremos decir que es opcional
  {

    $course = Course::find($id);

    return view('courses.show', compact('course'));
    // return view('courses.show', ['course' => $course]); // esta es otra manera de enviar datos a la vista
  }
}
