@extends('mainLayout')

@section('content')


<form action="/login" method="POST">
    @csrf
    <input type="email" name="email" value="{{ old('email') }}" class="text-white">
    <input type="password" name="password" class="text-white">
    @error('email') <p class="text-white" >{{ $message }}</p> @enderror
    <button type="submit">Login</button>
</form>

@endsection