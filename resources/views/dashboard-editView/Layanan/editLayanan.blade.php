@extends('mainLayout')

@section('content')
<section class="bg-white">
    <form action="{{ route('update-layanan', $layanan) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>Input title</div>
        <input type="text" name="title" value="{{ old('title', $layanan->title) }}">
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <div>Input description</div>
        <input type="text" name="description" value="{{ old('description', $layanan->description) }}">
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror

        <div>Input image (kosongkan jika tidak ganti gambar)</div>
        <small>Gambar saat ini: {{ $layanan->image }}</small><br>
        <input type="file" name="image">
        @error('image')
            <p class="error">{{ $message }}</p>
        @enderror

        <br>
        <input type="submit" value="request" />
    </form>
</section>
@endsection