@extends('mainLayout')

@section('content')
<section class="bg-white">
<form action="{{ route('update-contact', $contact) }}" method="POST">
    @csrf <!-- security supaya mengentahui data yg masuk adalah dari laravel -->
    <div>Input whatsapp</div>
    <input type="text" name="whatsapp" value="{{ old('whatsapp', $contact->whatsapp) }}">
    @error('whatsapp')
        <p class="error">{{ $message }}</p>
    @enderror

    <div>Input gmail</div>
    <input type="text" name="gmail" value="{{ old('gmail', $contact->gmail) }}">
    @error('gmail')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <div>Input lokasi</div>
    <input type="text" name="lokasi" value="{{ old('lokasi', $contact->lokasi) }}">
    @error('lokasi')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="request" />

    </form>
    </section>
@endsection