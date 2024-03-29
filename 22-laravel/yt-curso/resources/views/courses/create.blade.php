@extends('layouts.template')

@section('title', 'Create a new course')

@section('content')
  <h1>In this section you can create a new course</h1>
  <form action="{{route('courses.store')}}" method="POST">
    @csrf
    <div>
      <label>Name</label> <br>
      <input type="text" name="name" value="{{old('name')}}" >

      @error('name')
        <br>
        *{{$message}}
      @enderror

    </div> <br>
    <div>
      <label>Slug</label> <br>
      <input type="text" name="slug" value="{{old('slug')}}" >

      @error('slug')
        <br>
        *{{$message}}
      @enderror

    </div> <br>
    <div>
      <label>Description</label> <br>
      <textarea name="description" rows="5">{{old('description')}}</textarea>
      @error('description')
        <br>
        *{{$message}}
      @enderror
    </div> <br>
    <div>
      <label>category</label> <br>
      <input type="text" name="category" value="{{old('category')}}">
      @error('category')
        <br>
        *{{$message}}
      @enderror
    </div>
    <br><br>
    <button>Guardar</button>
  </form>
@endsection
