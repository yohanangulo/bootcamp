@extends('layouts.template')

@section('title', 'Create a new course')

@section('content')
  <h1>In this section you can create a new course</h1>
  <form action="{{ route('courses.update', $course) }}" method="POST">
    @method('PUT')
    @csrf
    <div>
      <label>Name</label> <br>
      <input type="text" name="name" value="{{ old('name', $course->name) }}">
      @error('name')
        <br>
        *{{ $message }}
      @enderror
    </div> <br>
    <div>
      <label>Slug</label> <br>
      <input type="text" name="slug" value="{{old('slug', $course->slug)}}" >

      @error('slug')
        <br>
        *{{$message}}
      @enderror

    </div> <br>
    <div>
      <label>Description</label> <br>
      <textarea name="description" rows="5">{{ old('description', $course->description) }}</textarea>
      @error('description')
        <br>
        *{{ $message }}
      @enderror
    </div> <br>
    <div>
      <label>category</label> <br>
      <input type="text" name="category" value="{{ old('category', $course->category) }}">
      @error('category')
        <br>
        *{{ $message }}
      @enderror
    </div>
    <br><br>
    <button>Guardar</button>
  </form>
@endsection
