@extends('layouts.template')

@section('title', 'Courses')
    

@section('content')
    <h1>Here you can find all the courses</h1>
    <a href="{{ route('courses.create') }}">Create course</a>
    <ul>
        @foreach ($courses as $course)
            <li><a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a></li>
        @endforeach
    </ul>
    {{$courses->links()}}
@endsection
