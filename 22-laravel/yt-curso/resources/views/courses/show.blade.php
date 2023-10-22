@extends('layouts.template')

@section('title', "$course->name course")

@section('content')
  <h2>You are watching {{ $course->name }} course</h2>
  <a href="{{ route('courses.index') }}">All courses</a>
  <p><strong>Course:</strong> {{ $course->category }}</p>
@endsection
