<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourse;
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
  public function store(StoreCourse $request)
  {

    // $course_data = new Course();

    // $course_data->name = $request->name;
    // $course_data->description =$request->description;
    // $course_data->category =$request->category;

    // $course_data->save();

    // $course = Course::created([
    //   'name' => $request->name,
    //   'description' => $request->description,
    //   'category' => $request->category,
    // ]);

    $course = Course::create($request->all());

    return redirect()->route('courses.show', $course);
  }

  /**
   * shows a single course
   */
  public function show(Course $course) // con el signa de interrogacion queremos decir que es opcional
  {
    // $course = Course::find($id);

    return view('courses.show', compact('course'));
    // return view('courses.show', ['course' => $course]); // esta es otra manera de enviar datos a la vista
  }

  /**
   * shows edit course
   */
  public function edit(Course $course)
  {

    return view('courses.edit', compact('course'));
  }

  /**
   * updates the course
   */
  public function update(Request $request, Course $course)
  {

    // $course->name = $request->name;
    // $course->description = $request->description;
    // $course->category = $request->category;

    // $course->save();

    $request->validate([
      'name' => ['required', 'min: 3'],
      'slug' => ['required', "unique:courses,slug,$course->id"],
      'description' => 'required',
      'category' => 'required',
    ]);

    $course->update($request->all());

    return redirect()->route('courses.show', $course);
  }

  /**
   * delete a course
   */
  public function destroy(Course $course)
  {
    $course->delete();

    return redirect()->route('courses.index');
  }
}
