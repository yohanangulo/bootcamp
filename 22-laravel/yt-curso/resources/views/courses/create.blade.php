@extends('layouts.template')

@section('title', 'Create a new course')

@section('content')
  <h1>In this section you can create a new course</h1>
  <form action="{{route('courses.store')}}" method="POST">
    @csrf
    <div>
      <label>Name</label> <br>
      <input type="text" name="name">
    </div> <br>
    <div>
      <label>Description</label> <br>
      <textarea name="description" rows="5"></textarea>
    </div> <br>
    <div>
      <label>category</label> <br>
      <input type="text" name="category">
    </div>
    <br><br>
    <button>Guardar</button>
  </form>
@endsection
