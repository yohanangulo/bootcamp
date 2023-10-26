@extends('layouts.template')

@section('title', "$course->name course")

@section('content')
  <h2>You are watching {{ $course->name }} course</h2>
  <a href="{{ route('courses.index') }}">All courses</a>
  <a href="{{route('courses.edit', $course)}}">Edit this course</a>
  <a href="{{route('courses.destroy', $course->id)}}">Delete this course</a>
  <p><strong>Course:</strong> {{ $course->category }}</p>
  <form action="{{route('courses.destroy', $course)}}" method="POST">
    @csrf
    @method('delete')
    <button>Delete</button>
  </form>
@endsection
