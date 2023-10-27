@extends('layouts.template')

@section('title', 'Contact Us')


@section('content')
  <h1>Contact Us</h1>
  <form action="{{ route('contact_us.store') }}" method="POST">
    @csrf
    <div>
      <label>Name</label>
      <br>
      <input type="text" name='name' value="{{old('name')}}">
    </div>
    @error('name')
      *{{ $message }}
    @enderror
    <div>
      <label>Email</label>
      <br>
      <input type="email" name='email' value="{{old('email')}}">
    </div>
    @error('email')
      *{{ $message }}
    @enderror
    <div>
      <label>Message</label>
      <br>
      <textarea name="message" rows="4">{{old('message')}}</textarea>
    </div>
    @error('message')
      *{{ $message }} <br>
    @enderror
    <button>Send</button>
  </form>
  @if (session('info'))
      <script>
        alert("{{session('info')}}")
      </script>
  @endif
@endsection
