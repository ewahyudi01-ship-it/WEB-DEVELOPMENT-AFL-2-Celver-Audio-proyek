@extends('mainLayout')

@section('content')
<section class="bg-white">
<form action="{{ route('save-portfolio') }}" method="POST">
    @csrf <!-- security supaya mengentahui data yg masuk adalah dari laravel -->
    <div>Input titlePlace</div>
    <input type="text" name="titlePlace" value="{{ old('titlePlace') }}">
    @error('titlePlace')
        <p class="error">{{ $message }}</p>
    @enderror

    <div>Input descriptionPlace</div>
    <input type="text" name="descriptionPlace" value="{{ old('descriptionPlace') }}">
    @error('descriptionPlace')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <div>Input image</div>
    <input type="text" name="image" value="{{ old('image') }}">
    @error('image')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="request" />

    </form>
    </section>
@endsection