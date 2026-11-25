@extends('mainLayout')

@section('content')
<section class="bg-white">
    <form action="{{ route('save-layanan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>Input title</div>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <div>Input description</div>
        <input type="text" name="description" value="{{ old('description') }}">
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror

        <div>Input image</div>
        <input type="file" name="image">
        @error('image')
            <p class="error">{{ $message }}</p>
        @enderror

        <br>
        <input type="submit" value="request" />
    </form>
</section>
@endsection